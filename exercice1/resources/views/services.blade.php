@extends('layouts.master')

@section('titre', 'Mes Services')
@section('description', 'Découvrez ma gamme complète de services de développement web et design')

@section('contenu')
<!-- Section Hero -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">Mes Services</h1>
                <p class="lead">Des solutions sur mesure pour vos projets digitaux</p>
            </div>
        </div>
    </div>
</section>

<!-- Section services détaillés -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($services as $index => $service)
            @php
            $borderColors = [
            0 => 'border-primary',
            1 => 'border-secondary',
            2 => 'border-success',
            3 => 'border-info'
            ];
            $bgColors = [
            0 => 'bg-primary',
            1 => 'bg-secondary',
            2 => 'bg-success',
            3 => 'bg-info'
            ];
            $borderClass = $borderColors[$index] ?? 'border-primary';
            $bgClass = $bgColors[$index] ?? 'bg-primary';
            @endphp

            <div class="col-lg-6">
                <div class="card h-100 shadow-sm border-0 {{ $borderClass }}" style="border-top: 4px solid !important;">
                    <div class="card-header {{ $bgClass }} text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title h5 mb-0">{{ $service['titre'] }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text mb-4">{{ $service['description'] }}</p>

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="bg-light p-3 rounded">
                                    <strong><i class="bi bi-clock"></i> Durée estimée:</strong><br>
                                    <span class="text-muted">{{ $service['duree'] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h4 class="h6 mb-3"><i class="bi bi-tools"></i> Technologies utilisées:</h4>
                            <div class="d-flex flex-wrap gap-1">
                                @foreach($service['technologies'] as $tech)
                                <span class="badge bg-light text-dark border">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('contact') }}" class="btn {{ str_replace('border-', 'btn-', $borderClass) }}">
                                <i class="bi bi-envelope"></i> Discuter du projet
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section processus de travail -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="display-6 fw-bold text-primary">Mon processus de travail</h2>
                <p class="lead text-muted">Comment je m'y prends pour mener à bien vos projets</p>
            </div>
        </div>

        <div class="row g-4">
            @php
            $processus = [
            [
            'numero' => '1',
            'titre' => 'Analyse des besoins',
            'description' => 'J\'étudie votre projet en détail pour comprendre vos objectifs et contraintes.'
            ],
            [
            'numero' => '2',
            'titre' => 'Proposition technique',
            'description' => 'Je vous propose une solution technique adaptée avec un planning détaillé.'
            ],
            [
            'numero' => '3',
            'titre' => 'Développement',
            'description' => 'Je développe votre projet en suivant les meilleures pratiques du secteur.'
            ],
            [
            'numero' => '4',
            'titre' => 'Tests & Livraison',
            'description' => 'Je teste rigoureusement avant de livrer un produit de qualité.'
            ]
            ];
            @endphp

            @foreach($processus as $etape)
            <div class="col-md-6 col-lg-3">
                <div class="text-center p-4 h-100">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <span class="fs-4 fw-bold">{{ $etape['numero'] }}</span>
                    </div>
                    <h4 class="h5 mb-3">{{ $etape['titre'] }}</h4>
                    <p class="text-muted">{{ $etape['description'] }}</p>
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
                <h2 class="display-6 fw-bold mb-3">Prêt à démarrer votre projet ?</h2>
                <p class="lead mb-4">
                    Contactez-moi dès aujourd'hui pour discuter de vos besoins et voir comment je peux vous aider.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                        <i class="bi bi-envelope"></i> Me contacter
                    </a>
                    <a href="{{ route('apropos') }}" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-person"></i> En savoir plus sur moi
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection