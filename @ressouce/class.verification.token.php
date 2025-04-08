<?php
include_once "class.db.php";

class VerificationToken {
    private $conn;

    public function __construct() {
        $database = new DB();
        $this->conn = $database->db;
    }

    /**
     * Vérifie si un token de vérification est valide pour un email donné
     * 
     * @param string $email Email de l'utilisateur
     * @param string $token Token à vérifier
     * @return bool True si le token est valide, False sinon
     */
    public function verifyToken($email, $token) {
        if (empty($token) || empty($email)) {
            // Aucun token ou email fourni
            return false;
        }

        // Nettoyer les tokens expirés
        $cleanStmt = $this->conn->prepare("DELETE FROM verification_token WHERE expires < NOW()");
        $cleanStmt->execute();

        // Vérifier si le token existe et est valide
        $stmt = $this->conn->prepare("SELECT * FROM verification_token WHERE identifier = ? AND token = ? AND expires > NOW()");
        $stmt->execute([$email, $token]);
        $tokenData = $stmt->fetch();
        
        if (!$tokenData) {
            // Token invalide ou expiré
            return false;
        }
        
        // Supprimer le token après usage pour éviter sa réutilisation
        $deleteStmt = $this->conn->prepare("DELETE FROM verification_token WHERE identifier = ? AND token = ?");
        $deleteStmt->execute([$email, $token]);
        
        return true;
    }
    /**
     * Supprime le token d'un utilisateur
     */

    public function deleteTokenExpiresFromUser($email) {
        $stmt = $this->conn->prepare("DELETE FROM verification_token WHERE identifier = ? AND expires < NOW()");
        $stmt->execute([$email]);
    }

    /**
     * Récupère les données d'inscription en attente à partir de la session
     * 
     * @param string $email Email de l'utilisateur
     * @return array|null Données d'inscription ou null si aucune donnée trouvée
     */
    public function getPendingRegistrationData($email) {
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $sessionKey = 'pending_registration_' . md5($email);
        
        if (isset($_SESSION[$sessionKey])) {
            $userData = $_SESSION[$sessionKey];
            // Supprimer les données de la session après récupération
            unset($_SESSION[$sessionKey]);
            return $userData;
        }
        
        return null;
    }
}

?> 