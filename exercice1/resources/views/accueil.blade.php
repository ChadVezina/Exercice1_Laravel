@extends('layouts.master')

@section('titre', $donnees['titre'])
@section('description', $donnees['description'])

@section('contenu')
<!-- Section Hero -->
<section class="hero-section bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">{{ $donnees['titre'] }}</h1>
                <p class="lead mb-4 fs-3">{{ $donnees['description'] }}</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="{{ route('services') }}" class="btn btn-light btn-lg px-4">Découvrir mes services</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4">Me contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Services -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="display-5 fw-bold">Mes Services</h2>
                <p class="lead text-muted">Ce que je peux faire pour vous</p>
            </div>
        </div>
        <div class="row g-4">
            @foreach($donnees['services'] as $service)
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="fs-1 mb-3">{{ $service['icone'] }}</div>
                        <h3 class="card-title h4 text-primary">{{ $service['nom'] }}</h3>
                        <p class="card-text text-muted">{{ $service['description'] }}</p>
                        <a href="{{ route('services') }}" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Section statistiques -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2 class="display-6 fw-bold">Quelques chiffres</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <h3 class="display-4 fw-bold text-warning">10</h3>
                    <p class="fs-5">Projets réalisés</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h3 class="display-4 fw-bold text-warning">3</h3>
                    <p class="fs-5">Années d'expérience</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h3 class="display-4 fw-bold text-warning">100%</h3>
                    <p class="fs-5">Passion & dévouement</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection