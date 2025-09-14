@extends('layouts.master')

@section('titre', 'Nos Services')
@section('description', 'Découvrez notre gamme complète de services de développement web et consulting')

@section('contenu')
<!-- Section Hero -->
<section class="hero">
    <h1>Nos Services</h1>
    <p>Des solutions sur mesure pour vos projets digitaux</p>
</section>

<!-- Section services détaillés -->
<section class="cards">
    @foreach($services as $index => $service)
    @php
    $borderColors = [
    0 => 'border-top: 4px solid #667eea;',
    1 => 'border-top: 4px solid #764ba2;',
    2 => 'border-top: 4px solid #f093fb;',
    3 => 'border-top: 4px solid #f5576c;'
    ];
    $borderStyle = $borderColors[$index] ?? '';
    @endphp

    <div class="card" style="{{ $borderStyle }}">

        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
            <h3>{{ $service['titre'] }}</h3>
            <span style="background: #667eea; color: white; padding: 0.5rem 1rem; 
                                border-radius: 20px; font-weight: bold; white-space: nowrap;">
                {{ $service['prix'] }}
            </span>
        </div>

        <p style="margin-bottom: 1.5rem;">{{ $service['description'] }}</p>

        <div style="background: #f8f9fa; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div>
                    <strong>⏱️ Durée:</strong><br>
                    <span>{{ $service['duree'] }}</span>
                </div>
                <div>
                    <strong>💰 Tarif:</strong><br>
                    <span>{{ $service['prix'] }}</span>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 2rem;">
            <h4 style="margin-bottom: 1rem;">🛠️ Technologies utilisées:</h4>
            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                @foreach($service['technologies'] as $tech)
                <span style="background: rgba(102, 126, 234, 0.1); color: #667eea; 
                                        padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.9rem;
                                        border: 1px solid rgba(102, 126, 234, 0.3);">
                    {{ $tech }}
                </span>
                @endforeach
            </div>
        </div>

        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Demander un devis</a>
        </div>
    </div>
    @endforeach
</section>

<!-- Section processus de travail -->
<section class="form-container">
    <h2 style="text-align: center; margin-bottom: 2rem; color: #667eea;">Notre processus de travail</h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
        @php
        $processus = [
        [
        'numero' => '1',
        'titre' => 'Analyse des besoins',
        'description' => 'Nous étudions votre projet en détail pour comprendre vos objectifs et contraintes.'
        ],
        [
        'numero' => '2',
        'titre' => 'Proposition technique',
        'description' => 'Nous vous proposons une solution technique adaptée avec un devis détaillé.'
        ],
        [
        'numero' => '3',
        'titre' => 'Développement',
        'description' => 'Notre équipe développe votre projet en suivant les meilleures pratiques.'
        ],
        [
        'numero' => '4',
        'titre' => 'Tests & Livraison',
        'description' => 'Nous testons rigoureusement avant de livrer un produit de qualité.'
        ]
        ];
        @endphp

        @foreach($processus as $etape)
        <div style="text-align: center; padding: 2rem; background: rgba(102, 126, 234, 0.05); 
                           border-radius: 15px; border: 2px solid rgba(102, 126, 234, 0.1);">
            <div style="width: 60px; height: 60px; background: #667eea; color: white; 
                               border-radius: 50%; display: flex; align-items: center; justify-content: center;
                               font-size: 1.5rem; font-weight: bold; margin: 0 auto 1rem;">
                {{ $etape['numero'] }}
            </div>
            <h4 style="margin-bottom: 1rem; color: #333;">{{ $etape['titre'] }}</h4>
            <p style="color: #666;">{{ $etape['description'] }}</p>
        </div>
        @endforeach
    </div>
</section>

<!-- Section call to action -->
<section style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                    padding: 4rem 2rem; border-radius: 15px; text-align: center; color: white;">
    <h2 style="margin-bottom: 1rem;">Prêt à démarrer votre projet ?</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">
        Contactez-nous dès aujourd'hui pour discuter de vos besoins et obtenir un devis personnalisé.
    </p>
    <div>
        <a href="{{ route('contact') }}" class="btn btn-secondary" style="margin-right: 1rem;">
            Demander un devis
        </a>
        <a href="tel:+33123456789" class="btn" style="background: rgba(255,255,255,0.2);">
            📞 Nous appeler
        </a>
    </div>
</section>
@endsection