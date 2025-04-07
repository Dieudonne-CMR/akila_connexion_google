# Analyse du code Akila Connexion Google

## 1. Structure générale du projet

Le projet est une application web PHP structurée de la manière suivante :

- **app/** : Dossier principal contenant le code de l'application
  - **assets/** : Ressources statiques (CSS, JS, images)
  - **api_shops/** : API pour les boutiques en ligne
  - **fonctions/** : Fonctions utilitaires PHP
  - **includes/** : Fichiers d'inclusion pour l'en-tête et le pied de page
  - **pages/** : Pages de l'application
  - **path_action/** : Actions spécifiques (connexion, déconnexion, etc.)
  - **processings/** : Traitement des formulaires et des données
- **@ressouce/** : Ressources externes (images, fichiers téléchargés)
- **akia_bd.sql** : Script de base de données SQL

## 2. Architecture du système

L'application utilise une architecture MVC simplifiée :

- **Modèle** : Classes de connexion à la base de données (`@ressouce/class.db.php` et `@ressouce/class.register.php`)
- **Vue** : Pages PHP dans le dossier `app/pages/`
- **Contrôleur** : Scripts de traitement dans `app/processings/` et `app/path_action/`

Le point d'entrée de l'application est `app/index.php`, qui gère le routage en fonction de l'URL demandée.

## 3. Système de routage

Le routage est géré dans `app/includes/main_header/route.php`. Les URLs sont analysées et dirigées vers les fichiers PHP correspondants :

```php
$tab_nom_page=['home','posts','entreprises','services','@add-post','page-vente','reservation','@reglage',...];
$tab_nom_page_processings=['ajoute_service', 'ajoute_post','modify_blog', 'ajoute_service',...];

if(@$url[0]=='deconnexion' AND !empty($url[1])):
    $d=$url[1];
    require "path_action/deconnexion.php";
elseif($url==""):
    require("pages/home.php");
elseif(in_array($url[0],$tab_nom_page)):
    require("pages/$url[0].php");
// ... autres routes
endif;
```

## 4. Base de données

La base de données utilise MySQL avec les tables principales suivantes :

- **admin** : Données des administrateurs et utilisateurs
- **website** : Informations sur les sites web/entreprises
- **blog** : Articles de blog
- **service** : Services proposés
- **page** : Pages de vente
- **partenaire_entreprise** : Partenaires commerciaux
- **paiement** : Informations de paiement
- **visiteurs_journaliers** : Statistiques de visite

La connexion à la base de données est gérée par la classe `DB` dans `@ressouce/class.db.php` et les requêtes par la classe `Register` dans `@ressouce/class.register.php`.

## 5. Système d'authentification

L'authentification est gérée dans `app/processings/connection.php` :

1. L'utilisateur entre ses identifiants
2. Le système vérifie les informations dans la base de données
3. Si valides, une session est créée avec les informations de l'utilisateur
4. Des niveaux de permission différents existent (`permission` et `sup_admin`)

## 6. Fonctionnalités principales

### 6.1 Gestion des entreprises et sites web

Le système permet de créer et gérer des entreprises/sites web avec différentes options :

- Sites intégrés à la plateforme (`onsite = 1`)
- Sites utilisant l'API (`onsite = 0, articles = 1`)
- Sites avec pages de vente (`onsite = 0, articles = 0`)

### 6.2 Système de blog

Permet de créer et gérer des articles de blog avec :

- Catégories
- Images
- Statistiques de visites

### 6.3 Gestion des services

Permet de créer différents types de services (formations) classés en 6 catégories.

### 6.4 Pages de vente

Système de création de pages de vente personnalisées.

### 6.5 Intégration boutique en ligne

Système de paiement et gestion des commandes via `api_shops/`.

### 6.6 Statistiques de visites

Suivi des visiteurs par jour et par site dans la table `visiteurs_journaliers`.

## 7. Sécurité

### 7.1 Points forts

- Utilisation de hachage MD5 pour les mots de passe
- Filtrage des entrées utilisateur avec `test_input()`
- Utilisation de requêtes préparées pour prévenir les injections SQL

### 7.2 Points d'amélioration

- Le MD5 est une méthode de hachage obsolète et non sécurisée, il faudrait migrer vers bcrypt ou Argon2
- Manque de validation systématique des entrées
- Protection CSRF non détectée

## 8. Points d'amélioration techniques

1. **Organisation du code** : Le code pourrait bénéficier d'une structure plus modulaire et orientée objet
2. **Sécurité** : Améliorer le hachage des mots de passe et la validation des entrées
3. **Compatibilité PHP** : Mettre à jour le code pour utiliser les fonctionnalités modernes de PHP
4. **Front-end** : Séparer plus clairement la logique de présentation et la logique métier
5. **Documentation** : Ajouter des commentaires et une documentation plus complète

## 9. Conclusion

Akila Connexion Google est une plateforme de gestion de sites web et de commerce électronique en PHP. Le système permet de gérer plusieurs sites, blogs, services et pages de vente à partir d'une interface d'administration centralisée.

L'application utilise une architecture simple mais efficace, avec un système de routage personnalisé et une gestion de session pour l'authentification. Les principales améliorations à apporter concernent la sécurité (hachage des mots de passe) et l'organisation du code.
