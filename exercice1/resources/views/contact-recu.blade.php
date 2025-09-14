@extends('layouts.master')

@section('titre', 'Message reçu')
@section('description', 'Votre message a été envoyé avec succès')

@section('contenu')
<!-- Section Hero -->
<section class="hero">
    <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
    <h1>Message envoyé avec succès !</h1>
    <p>Nous avons bien reçu votre message et vous répondrons rapidement</p>
</section>

<!-- Section récapitulatif -->
<section class="form-container">
    <h2 style="text-align: center; margin-bottom: 2rem; color: #667eea;">
        📋 Récapitulatif de votre message
    </h2>

    <div style="background: #f8f9fa; padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
        <table class="table">
            <tr>
                <td style="font-weight: bold; color: #667eea; padding: 1rem;">Nom:</td>
                <td style="padding: 1rem;">{{ $donnees['nom'] }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold; color: #667eea; padding: 1rem;">Email:</td>
                <td style="padding: 1rem;">
                    <a href="mailto:{{ $donnees['email'] }}" style="color: #667eea;">
                        {{ $donnees['email'] }}
                    </a>
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold; color: #667eea; padding: 1rem;">Sujet:</td>
                <td style="padding: 1rem;">{{ $donnees['sujet'] }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold; color: #667eea; padding: 1rem;">Date d'envoi:</td>
                <td style="padding: 1rem;">{{ $donnees['date_envoi'] }}</td>
            </tr>
        </table>
    </div>

    <div style="background: rgba(102, 126, 234, 0.1); padding: 2rem; border-radius: 15px; 
                    border: 2px solid rgba(102, 126, 234, 0.2);">
        <h3 style="color: #667eea; margin-bottom: 1rem;">💬 Votre message:</h3>
        <div style="background: white; padding: 1.5rem; border-radius: 10px; 
                       font-style: italic; line-height: 1.6; border-left: 4px solid #667eea;">
            "{{ $donnees['message'] }}"
        </div>
    </div>

    <!-- Section prochaines étapes -->
    <div style="margin-top: 3rem; padding: 2rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    border-radius: 15px; color: white; text-align: center;">
        <h3 style="margin-bottom: 2rem;">🚀 Prochaines étapes</h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
            <div>
                <div style="font-size: 2rem; margin-bottom: 1rem;">📥</div>
                <h4>Message reçu</h4>
                <p style="opacity: 0.9; font-size: 0.9rem;">Votre message est dans notre boîte de réception</p>
            </div>
            <div>
                <div style="font-size: 2rem; margin-bottom: 1rem;">👥</div>
                <h4>Analyse par l'équipe</h4>
                <p style="opacity: 0.9; font-size: 0.9rem;">Notre équipe va analyser votre demande</p>
            </div>
            <div>
                <div style="font-size: 2rem; margin-bottom: 1rem;">📞</div>
                <h4>Réponse rapide</h4>
                <p style="opacity: 0.9; font-size: 0.9rem;">Nous vous répondrons sous 24h</p>
            </div>
        </div>
    </div>

    <!-- Section actions -->
    <div style="text-align: center; margin-top: 2rem;">
        <div style="margin-bottom: 2rem;">
            <p style="margin-bottom: 1rem;">
                <strong>Temps de réponse estimé:</strong>
                <span style="color: #667eea;">24 heures maximum</span>
            </p>
            <p style="font-size: 0.9rem; color: #666;">
                Si votre demande est urgente, n'hésitez pas à nous appeler au
                <a href="tel:+33123456789" style="color: #667eea;">+33 1 23 45 67 89</a>
            </p>
        </div>

        <div style="margin-top: 2rem;">
            <a href="{{ route('accueil') }}" class="btn" style="margin-right: 1rem;">
                🏠 Retour à l'accueil
            </a>
            <a href="{{ route('services') }}" class="btn btn-secondary">
                🔍 Voir nos services
            </a>
        </div>
    </div>
</section>

<!-- Section témoignages -->
<section class="cards">
    @php
    $testimonials = [
    [
    'nom' => 'Sophie L.',
    'entreprise' => 'Startup Tech',
    'message' => 'Réactivité exceptionnelle ! Ils ont répondu en moins de 2 heures.',
    'note' => 5
    ],
    [
    'nom' => 'Marc D.',
    'entreprise' => 'E-commerce Plus',
    'message' => 'Équipe très professionnelle, projet livré dans les délais.',
    'note' => 5
    ],
    [
    'nom' => 'Julie M.',
    'entreprise' => 'Design Agency',
    'message' => 'Excellent travail sur notre refonte web, très satisfaits !',
    'note' => 5
    ]
    ];
    @endphp

    <div style="grid-column: 1 / -1; text-align: center; margin-bottom: 1rem;">
        <h3 style="color: #667eea;">⭐ Ce que disent nos clients</h3>
    </div>

    @foreach($testimonials as $testimonial)
    <div class="card" style="text-align: center;">
        <div style="margin-bottom: 1rem;">
            @for($i = 1; $i <= 5; $i++)
                <span style="color: {{ $i <= $testimonial['note'] ? '#ffd700' : '#ddd' }}; font-size: 1.2rem;">⭐</span>
                @endfor
        </div>

        <p style="font-style: italic; margin-bottom: 1.5rem; line-height: 1.6;">
            "{{ $testimonial['message'] }}"
        </p>

        <div>
            <strong style="color: #667eea;">{{ $testimonial['nom'] }}</strong><br>
            <small style="color: #666;">{{ $testimonial['entreprise'] }}</small>
        </div>
    </div>
    @endforeach
</section>
@endsection