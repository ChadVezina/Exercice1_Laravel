# Portfolio Web - Projet Laravel 10

## Description du projet

Ce projet est un portfolio/site web personnel développé avec Laravel 10 dans le cadre de l'exercice 1 du cadriciel web. Il présente une architecture MVC complète avec contrôleur, routes nommées, vues Blade et formulaire de contact avec validation avancée.

Le site présente un développeur web avec ses compétences, services et portfolio, incluant un système de contact fonctionnel.

## Fonctionnalités

-   ✅ **Page d'accueil** : Présentation du développeur et aperçu des services
-   ✅ **Page À propos** : Présentation détaillée des compétences techniques par catégorie
-   ✅ **Page Services** : Catalogue complet des services avec détails techniques et durées
-   ✅ **Page Contact** : Formulaire de contact avec validation côté serveur
-   ✅ **Traitement des données** : Gestion POST avec validation Laravel et messages personnalisés
-   ✅ **Design responsive** : Interface moderne adaptée à tous les appareils
-   ✅ **Routes nommées** : Toutes les routes sont nommées pour une meilleure organisation
-   ✅ **Confirmation directe** : La confirmation du formulaire de contact est renvoyée via la vue `contact-recu` (pas de messages flash de session)

## Technologies utilisées

-   **Backend** : Laravel 10.10+ (PHP 8.1+)
-   **Frontend** : Blade templates, CSS3 personnalisé avec animations
-   **Base de données** : SQLite (configuration par défaut)
-   **Architecture** : MVC (Model-View-Controller)
-   **Validation** : Validation Laravel côté serveur avec messages personnalisés
-   **Sessions** : Confirmation de contact renvoyée directement à la vue (pas de dépendance aux messages flash)

## Structure du projet

### Routes configurées (5 routes nommées)

1. `GET /` - Page d'accueil → `route('accueil')`
2. `GET /apropos` - Page à propos → `route('apropos')`
3. `GET /services` - Page services → `route('services')`
4. `GET /contact` - Formulaire de contact → `route('contact')`
5. `POST /contact` - Traitement du formulaire → `route('contact.traiter')`

### Contrôleur : `MonSiteController`

-   `index()` - Page d'accueil avec données de présentation et services
-   `apropos()` - Page à propos avec compétences techniques organisées par catégorie
-   `services()` - Page services avec catalogue détaillé (durées, technologies)
-   `contact()` - Affichage du formulaire de contact
-   `traiterContact()` - Traitement POST avec validation Laravel avancée

### Vues Blade (6 fichiers)

-   `layouts/master.blade.php` - Template master avec navigation
-   `accueil.blade.php` - Page d'accueil avec présentation développeur
-   `apropos.blade.php` - Page à propos avec compétences techniques
-   `services.blade.php` - Page services avec catalogue détaillé
-   `contact.blade.php` - Formulaire de contact avec validation
-   `contact-recu.blade.php` - Page de confirmation avec récapitulatif

### Assets et Styles

-   `public/css/styles.css` - Feuille de style personnalisée avec design moderne
-   Design avec gradients, animations CSS et effets de transition
-   Interface responsive adaptée mobile/tablette/desktop

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

### Lancement du serveur

```bash
php artisan serve
```

Le site sera accessible à l'adresse : `http://localhost:8000`,
si votre port est déjà occupé il sera disponible au port 8001 , 8002 etc.. jusqu'à trouver un port valide

## Contenu et données du site

### Page d'accueil

-   Présentation professionnelle du développeur
-   Aperçu des services principaux (Développement Web, Design UI/UX)
-   Interface moderne avec call-to-action

### Page À propos

-   **Compétences techniques organisées par catégories** :
    -   Frontend : HTML5, CSS3, JavaScript, TypeScript, React.js, Next.js, Vue.js, Tailwind, Bootstrap, Sass
    -   Backend : PHP, Laravel, MySQL, SQLite, API REST
    -   Design : Figma, Photoshop, UI/UX Design
    -   CMS & Outils : WordPress, Git, VS Code, Docker, NPM, Composer

### Page Services

-   **4 services détaillés** :
-   **4 services détaillés** :
    1.  Site Vitrine (2-6 semaines)
    2.  Maquette de site web (1-3 semaines)
    3.  Sites E-commerce (4-8 semaines)
    4.  Applications Web (6-12 semaines)
-   Chaque service inclut : description, durée et technologies utilisées

### Formulaire de Contact

-   Validation Laravel avec règles personnalisées
-   Messages d'erreur en français
-   Page de confirmation avec récapitulatif complet
-   Horodatage automatique des soumissions

## Détails d'implémentation

-   Le formulaire de contact POST `/contact` est traité par `MonSiteController::traiterContact()` et renvoie directement la vue `contact-recu` avec les données soumises et une variable `messageSucces` contenant le texte de confirmation.
-   Règles de validation côté serveur utilisées :
    -   `nom` : required|string|max:255
    -   `email` : required|email|max:255
    -   `sujet` : required|string|max:255
    -   `message` : required|string|min:10

Les messages d'erreur personnalisés sont fournis en français dans le contrôleur.

## Validation et gestion des données

### Règles de validation

-   **Nom** : Requis, chaîne de caractères, maximum 255 caractères
-   **Email** : Requis, format email valide, maximum 255 caractères
-   **Sujet** : Requis, chaîne de caractères, maximum 255 caractères
-   **Message** : Requis, minimum 10 caractères

### Messages d'erreur personnalisés

-   Messages en français intégrés dans le contrôleur
-   Affichage automatique des erreurs dans les vues Blade
-   Notification de succès avec messages flash

### Traitement des données

-   Récupération sécurisée avec `$request->input()`
-   Horodatage automatique avec `now()->format()`
-   Affichage complet des données sur la page de confirmation

## Design et interface utilisateur

### Éléments de design

-   **Gradients modernes** : Dégradés bleu/violet pour un look professionnel
-   **Animations CSS** : Effets de survol et transitions fluides
-   **Cards design** : Présentation en cartes avec ombres portées
-   **Responsive design** : Interface adaptée mobile/tablette/desktop
-   **Typographie moderne** : Police Segoe UI pour une lisibilité optimale
-   **Icons emoji** : Utilisation d'emojis comme icônes pour un rendu moderne

### Navigation

-   Menu de navigation cohérent sur toutes les pages
-   Routes nommées pour une gestion propre des liens
-   Design responsive avec adaptation mobile
