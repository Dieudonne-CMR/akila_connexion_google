<?php
include "class.db.php";


/**
 * Classe pour gérer les utilisateurs
 */
class admin {
    private $conn;
    
    public function __construct() {
        $database = new DB();
        $this->conn = $database->db;
    }
   
    public function findById($id) {
        $stmt = $this->conn->prepare('SELECT * FROM admin WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    /**
     * Récupère un utilisateur par son email
     */
    function getUserByEmail($email) {
      $stmt = $this->conn->prepare('SELECT * FROM admin WHERE email = ?');
      $stmt->execute([$email]);
      return $stmt->fetch();
  }
    /**    
     * Crée ou met à jour un utilisateur après connexion Google
     */
   public function createOrUpdateFromGoogle($googleUser) {
        $googleId = $googleUser['sub'] ?? null;
        $email = $googleUser['email'] ?? null;
        $name = $googleUser['name'] ?? null;
        $picture = $googleUser['picture'] ?? null;
        
        if (!$googleId || !$email) {
            return false;
        }
        
        // Vérifier si l'utilisateur existe déjà
        $existingUser = $this->getUserByEmail($email);
        
        if ($existingUser) {
            // Mettre à jour l'utilisateur
            $stmt = $this->conn->prepare('UPDATE admin SET nom = ?, profile = ? WHERE email = ?');
            $stmt->execute([$name, $picture, $email]);
            return $this->getUserByEmail($email);
        } else {
            // Créer un nouvel utilisateur
            $stmt = $this->conn->prepare('INSERT INTO admin (password, email, nom, profile) VALUES (?, ?, ?, ?)');
            $stmt->execute([$googleId, $email, $name, $picture]);
            return $this->getUserByEmail($email);
        }
    }
} 