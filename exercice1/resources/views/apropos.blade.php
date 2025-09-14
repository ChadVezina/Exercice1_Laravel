@extends('layouts.master')

@section('titre', 'À propos de nous')
@section('description', 'Découvrez notre équipe de développeurs passionnés et notre expertise technique')

@section('contenu')
<!-- Section Hero -->
<section class="hero">
    <h1>À propos de nous</h1>
    <p>Une équipe passionnée de développement web</p>
</section>

<!-- Section présentation -->
<section class="form-container">
    <h2 style="text-align: center; margin-bottom: 2rem; color: #667eea;">Notre mission</h2>
    <p style="text-align: center; font-size: 1.1rem; line-height: 1.8; margin-bottom: 3rem;">
        Nous sommes une équipe de développeurs passionnés qui créons des solutions web modernes et performantes.
        Notre objectif est d'aider les entreprises à digitaliser leurs activités grâce à des technologies
        de pointe comme Laravel, Vue.js, et bien d'autres.
    </p>

    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                    padding: 2rem; border-radius: 15px; color: white; text-align: center; margin-bottom: 3rem;">
        <h3 style="margin-bottom: 1rem;">Nos valeurs</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
            <div>
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">🚀</div>
                <strong>Innovation</strong>
                <p style="margin-top: 0.5rem;">Technologies de pointe</p>
            </div>
            <div>
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">🤝</div>
                <strong>Collaboration</strong>
                <p style="margin-top: 0.5rem;">Travail d'équipe efficace</p>
            </div>
            <div>
                <div style="font-size: 2rem; margin-bottom: 0.5rem;">✨</div>
                <strong>Qualité</strong>
                <p style="margin-top: 0.5rem;">Code propre et maintenable</p>
            </div>
        </div>
    </div>
</section>

<!-- Section équipe -->
<section class="cards">
    @foreach($equipe as $membre)
    <div class="card">
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <div style="width: 80px; height: 80px; border-radius: 50%; 
                               background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                               margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; 
                               color: white; font-size: 2rem; font-weight: bold;">
                {{ substr($membre['nom'], 0, 1) }}
            </div>
            <h3>{{ $membre['nom'] }}</h3>
            <p style="color: #667eea; font-weight: bold; margin-bottom: 0.5rem;">{{ $membre['poste'] }}</p>
            <p><strong>Expérience:</strong> {{ $membre['experience'] }}</p>
        </div>

        <div>
            <h4 style="margin-bottom: 1rem;">Spécialités:</h4>
            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                @foreach($membre['specialites'] as $specialite)
                <span style="background: #667eea; color: white; padding: 0.3rem 0.8rem; 
                                        border-radius: 20px; font-size: 0.9rem;">
                    {{ $specialite }}
                </span>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach

    <!-- Carte de recrutement -->
    <div class="card" style="border: 2px dashed #667eea;">
        <div style="text-align: center;">
            <div style="font-size: 4rem; margin-bottom: 1rem;">👥</div>
            <h3>Rejoignez-nous !</h3>
            <p>Nous recherchons toujours de nouveaux talents pour agrandir notre équipe.</p>
            <a href="{{ route('contact') }}" class="btn">Postuler</a>
        </div>
    </div>
</section>

<!-- Section technologies -->
<section class="form-container">
    <h2 style="text-align: center; margin-bottom: 2rem; color: #667eea;">Technologies que nous utilisons</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); 
                    gap: 1rem; text-align: center;">
        @php
        $technologies = [
        'Laravel', 'PHP', 'JavaScript', 'Vue.js', 'React', 'Node.js',
        'MySQL', 'PostgreSQL', 'Docker', 'Git', 'AWS', 'CSS3', 'HTML5'
        ];
        @endphp
        @foreach($technologies as $tech)
        <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; 
                           border-left: 4px solid #667eea;">
            <strong>{{ $tech }}</strong>
        </div>
        @endforeach
    </div>
</section>
@endsection