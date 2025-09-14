@extends('layouts.master')

@section('titre', $donnees['titre'])
@section('description', $donnees['description'])

@section('contenu')
<!-- Section Hero -->
<section class="hero">
    <h1>{{ $donnees['titre'] }}</h1>
    <p>{{ $donnees['description'] }}</p>
    <div>
        <a href="{{ route('services') }}" class="btn">Découvrir nos services</a>
        <a href="{{ route('contact') }}" class="btn btn-secondary">Nous contacter</a>
    </div>
</section>

<!-- Section Services -->
<section class="cards">
    @foreach($donnees['services'] as $service)
    <div class="card">
        <div style="font-size: 3rem; text-align: center; margin-bottom: 1rem;">{{ $service['icone'] }}</div>
        <h3>{{ $service['nom'] }}</h3>
        <p>{{ $service['description'] }}</p>
        <a href="{{ route('services') }}" class="btn">En savoir plus</a>
    </div>
    @endforeach
</section>

<!-- Section statistiques -->
<section class="text-center mt-4 p-4" style="background: rgba(255, 255, 255, 0.1); border-radius: 15px; color: white;">
    <h2 style="margin-bottom: 2rem;">Quelques chiffres</h2>
    <div class="cards">
        <div class="card">
            <h3 style="color: #667eea; font-size: 3rem;">50+</h3>
            <p>Projets réalisés</p>
        </div>
        <div class="card">
            <h3 style="color: #667eea; font-size: 3rem;">25+</h3>
            <p>Clients satisfaits</p>
        </div>
        <div class="card">
            <h3 style="color: #667eea; font-size: 3rem;">5+</h3>
            <p>Années d'expérience</p>
        </div>
    </div>
</section>
@endsection