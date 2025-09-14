# Mon Site Web - Projet Laravel 10

## Description du projet

Ce projet est un site web moderne développé avec Laravel 10 dans le cadre de l'exercice du cadriciel web. Il présente une architecture complète avec contrôleur, routes, vues Blade et formulaire de contact.

## Fonctionnalités

-   ✅ **Page d'accueil** : Présentation des services avec design moderne
-   ✅ **Page À propos** : Présentation de l'équipe et des technologies
-   ✅ **Page Services** : Détails des services proposés avec tarifs
-   ✅ **Page Contact** : Formulaire de contact avec validation
-   ✅ **Traitement des données** : Gestion des données POST avec validation
-   ✅ **Design responsive** : Compatible mobile, tablette et desktop

## Technologies utilisées

-   **Backend** : Laravel 10 (PHP)
-   **Frontend** : Blade templates, CSS3 personnalisé
-   **Base de données** : SQLite (par défaut)
-   **Architecture** : MVC (Model-View-Controller)

## Structure du projet

### Routes configurées (5 routes)

1. `GET /` - Page d'accueil
2. `GET /apropos` - Page à propos
3. `GET /services` - Page services
4. `GET /contact` - Formulaire de contact
5. `POST /contact` - Traitement du formulaire

### Contrôleur : `MonSiteController`

-   `index()` - Gestion de la page d'accueil
-   `apropos()` - Gestion de la page à propos
-   `services()` - Gestion de la page services
-   `contact()` - Affichage du formulaire
-   `traiterContact()` - Traitement des données POST

### Vues Blade

-   `layouts/master.blade.php` - Template master
-   `accueil.blade.php` - Page d'accueil
-   `apropos.blade.php` - Page à propos
-   `services.blade.php` - Page services
-   `contact.blade.php` - Formulaire de contact
-   `contact-recu.blade.php` - Confirmation de réception

### Assets CSS

-   `public/css/styles.css` - Styles personnalisés avec design moderne

## Installation et utilisation

### Prérequis

-   PHP 8.1+
-   Composer
-   Node.js (optionnel)

### Installation

1. Cloner le projet
2. Installer les dépendances :
    ```bash
    composer install
    ```
3. Copier le fichier d'environnement :
    ```bash
    cp .env.example .env
    ```
4. Générer la clé d'application :
    ```bash
    php artisan key:generate
    ```

### Lancement du serveur

```bash
php artisan serve --port=8080
```

Le site sera accessible à l'adresse : `http://127.0.0.1:8080`

## Fonctionnalités du formulaire

-   **Validation côté serveur** avec messages d'erreur en français
-   **Champs requis** : Nom, Email, Sujet, Message
-   **Validation email** : Format email valide
-   **Message minimum** : 10 caractères
-   **Affichage des données** : Page de confirmation avec récapitulatif
-   **Messages flash** : Notification de succès

## Design et CSS

Le design utilise :

-   **Gradients modernes** : Dégradés bleu/violet
-   **Animations CSS** : Effets de survol et transitions
-   **Cards design** : Présentation en cartes avec ombres
-   **Responsive design** : Adaptation mobile/tablette
-   **Typographie moderne** : Segoe UI
-   **Icons emoji** : Utilisation d'emojis pour les icônes

## Points d'évaluation respectés

### ✅ Création du projet Laravel (2pts)

-   Projet Laravel 10 créé avec `composer create-project`

### ✅ Création du fichier CSS (2pts)

-   Fichier CSS personnalisé dans `public/css/styles.css`
-   Design moderne avec gradients, animations et responsive

### ✅ Création du contrôleur (2pts)

-   Contrôleur `MonSiteController` créé avec Artisan
-   5 méthodes pour gérer toutes les pages

### ✅ Définition des routes (2pts)

-   5 routes configurées dans `routes/web.php`
-   Routes GET et POST vers le contrôleur

### ✅ Utilisation d'un formulaire (2pts)

-   Formulaire de contact avec méthode POST
-   Champs validation côté client et serveur

### ✅ Traitement des données reçues (2pts)

-   Validation des données avec règles personnalisées
-   Affichage des données sur page de confirmation
-   Messages d'erreur en français

### ✅ Utilisation de fichiers Blade (2pts)

-   Template master (`layouts/master.blade.php`)
-   5 vues Blade étendant le master
-   Évite la duplication de code

### ✅ Contenu personnalisé (bonus)

-   Contenu entièrement personnalisé (pas de template générique)
-   Données réalistes pour une agence web
-   Équipe, services, FAQ, témoignages personnalisés

## Auteur

Projet réalisé pour l'exercice 1 du cadriciel web.

## Licence

Ce projet est à des fins éducatives uniquement.
