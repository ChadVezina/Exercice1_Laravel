<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre', 'Mon Site Web') - Laravel Project</title>

    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Meta description pour SEO -->
    <meta name="description" content="@yield('description', 'Un site web moderne développé avec Laravel 10')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- Header avec navigation -->
    <header>
        <nav class="container">
            <a href="{{ route('accueil') }}" class="logo">MonSiteWeb</a>
            <ul class="nav-links">
                <li><a href="{{ route('accueil') }}" class="{{ request()->routeIs('accueil') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ route('apropos') }}" class="{{ request()->routeIs('apropos') ? 'active' : '' }}">À propos</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact*') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main>
        <div class="container">
            <!-- Messages flash -->
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <!-- Erreurs de validation -->
            @if($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Contenu spécifique de chaque page -->
            @yield('contenu')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} MonSiteWeb. Projet réalisé avec Laravel {{ app()->version() }}.</p>
            <p>Développé avec ❤️ pour l'exercice du cadriciel web.</p>
        </div>
    </footer>

    <!-- Scripts personnalisés -->
    @stack('scripts')
</body>

</html>