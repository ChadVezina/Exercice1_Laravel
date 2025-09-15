@extends('layouts.master')

@section('titre', 'À propos de moi')
@section('description', 'Découvrez mon parcours de développeur web et designer UI/UX avec 3 ans d\'expérience')

@section('contenu')
<!-- Section Hero -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">À propos de moi</h1>
                <p class="lead">Développeur passionné par la création d'expériences web exceptionnelles</p>
            </div>
        </div>
    </div>
</section>

<!-- Section présentation -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 150px; height: 150px;">
                    <span class="display-2 fw-bold">CV</span>
                </div>
                <h3 class="h4">Chad Vézina</h3>
                <p class="text-muted">Développeur Web & Designer UI/UX</p>
            </div>
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold text-primary mb-4">Mon parcours</h2>
                <p class="lead mb-4">
                    Avec 3 ans d'expérience dans le développement web, je me spécialise dans la création
                    de sites web modernes et d'interfaces utilisateur intuitives.
                </p>
                <p class="mb-4">
                    Ma passion pour les technologies web m'a amené à maîtriser des outils comme Laravel,
                    Vue.js, et les frameworks CSS modernes. J'aime transformer les idées en réalités
                    digitales fonctionnelles et esthétiques.
                </p>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-primary fs-4 me-3"></i>
                            <div>
                                <strong>3 ans</strong><br>
                                <small class="text-muted">d'expérience</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-code-square text-primary fs-4 me-3"></i>
                            <div>
                                <strong>10 projets</strong><br>
                                <small class="text-muted">réalisés</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section valeurs -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="display-6 fw-bold text-primary">Mes valeurs</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="fs-1 mb-3">🚀</div>
                    <h3 class="h5">Innovation</h3>
                    <p class="text-muted">Toujours à l'affût des dernières technologies pour créer des solutions modernes</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="fs-1 mb-3">✨</div>
                    <h3 class="h5">Qualité</h3>
                    <p class="text-muted">Code propre, maintenable et respect des meilleures pratiques du développement</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 h-100">
                    <div class="fs-1 mb-3">🤝</div>
                    <h3 class="h5">Collaboration</h3>
                    <p class="text-muted">Écoute active des besoins clients et communication transparente</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section compétences -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="display-6 fw-bold text-primary">Mes compétences</h2>
                <p class="lead text-muted">Technologies et outils que je maîtrise</p>
            </div>
        </div>
        <div class="row g-4">
            @foreach($competences as $competence)
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title h5 mb-0">{{ $competence['categorie'] }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($competence['technologies'] as $tech)
                            <span class="badge bg-light text-dark border fs-6 py-2 px-3">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section call to action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-6 fw-bold mb-3">Travaillons ensemble !</h2>
                <p class="lead mb-4">
                    Vous avez un projet en tête ? N'hésitez pas à me contacter pour en discuter.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                    <i class="bi bi-envelope"></i> Me contacter
                </a>
            </div>
        </div>
    </div>
</section>
@endsection