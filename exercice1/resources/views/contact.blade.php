@extends('layouts.master')

@section('titre', 'Contactez-nous')
@section('description', 'Contactez notre équipe pour discuter de vos projets web')

@section('contenu')
<!-- Section Hero -->
<section class="hero">
    <h1>Contactez-nous</h1>
    <p>Discutons de votre projet ensemble</p>
</section>

<!-- Section formulaire de contact -->
<section class="form-container">
    <h2 style="text-align: center; margin-bottom: 2rem; color: #667eea;">
        📧 Envoyez-nous un message
    </h2>

    <form action="{{ route('contact.traiter') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nom">Nom complet *</label>
            <input type="text"
                id="nom"
                name="nom"
                value="{{ old('nom') }}"
                required
                placeholder="Votre nom et prénom">
        </div>

        <div class="form-group">
            <label for="email">Adresse email *</label>
            <input type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                placeholder="votre@email.com">
        </div>

        <div class="form-group">
            <label for="sujet">Sujet *</label>
            <select id="sujet" name="sujet" required>
                <option value="">Choisissez un sujet</option>
                <option value="Demande de devis" {{ old('sujet') === 'Demande de devis' ? 'selected' : '' }}>
                    Demande de devis
                </option>
                <option value="Question technique" {{ old('sujet') === 'Question technique' ? 'selected' : '' }}>
                    Question technique
                </option>
                <option value="Collaboration" {{ old('sujet') === 'Collaboration' ? 'selected' : '' }}>
                    Proposition de collaboration
                </option>
                <option value="Support" {{ old('sujet') === 'Support' ? 'selected' : '' }}>
                    Support technique
                </option>
                <option value="Autre" {{ old('sujet') === 'Autre' ? 'selected' : '' }}>
                    Autre
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message"
                name="message"
                required
                placeholder="Décrivez votre projet ou votre demande en détail...">{{ old('message') }}</textarea>
            <small style="color: #666; font-size: 0.9rem;">Minimum 10 caractères</small>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <button type="submit" class="btn" style="min-width: 200px;">
                📤 Envoyer le message
            </button>
        </div>
    </form>
</section>

<!-- Section informations de contact -->
<section class="cards">
    <div class="card">
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <div style="font-size: 3rem; margin-bottom: 1rem;">📍</div>
            <h3>Adresse</h3>
        </div>
        <p style="text-align: center;">
            123 Rue du Développement<br>
            75001 Paris, France<br>
            <strong>Métro: Châtelet-Les Halles</strong>
        </p>
    </div>

    <div class="card">
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <div style="font-size: 3rem; margin-bottom: 1rem;">📞</div>
            <h3>Téléphone</h3>
        </div>
        <p style="text-align: center;">
            <a href="tel:+33123456789" style="color: #667eea; text-decoration: none; font-weight: bold;">
                +33 1 23 45 67 89
            </a><br>
            <small style="color: #666;">Lun-Ven: 9h-18h</small>
        </p>
    </div>

    <div class="card">
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <div style="font-size: 3rem; margin-bottom: 1rem;">✉️</div>
            <h3>Email</h3>
        </div>
        <p style="text-align: center;">
            <a href="mailto:contact@monsiteweb.fr" style="color: #667eea; text-decoration: none; font-weight: bold;">
                contact@monsiteweb.fr
            </a><br>
            <small style="color: #666;">Réponse sous 24h</small>
        </p>
    </div>
</section>

<!-- Section FAQ -->
<section class="form-container">
    <h2 style="text-align: center; margin-bottom: 2rem; color: #667eea;">
        ❓ Questions fréquentes
    </h2>

    @php
    $faqs = [
    [
    'question' => 'Quel est le délai moyen pour un projet web ?',
    'reponse' => 'Cela dépend de la complexité, mais généralement entre 2 et 8 semaines pour un site vitrine ou e-commerce.'
    ],
    [
    'question' => 'Proposez-vous des contrats de maintenance ?',
    'reponse' => 'Oui, nous proposons des contrats de maintenance incluant mises à jour, sauvegarde et support technique.'
    ],
    [
    'question' => 'Travaillez-vous avec des entreprises de toute taille ?',
    'reponse' => 'Absolument ! Nous accompagnons aussi bien les startups que les grandes entreprises.'
    ],
    [
    'question' => 'Les sites sont-ils optimisés pour mobile ?',
    'reponse' => 'Tous nos sites sont responsive et optimisés pour mobile, tablette et desktop.'
    ]
    ];
    @endphp

    @foreach($faqs as $index => $faq)
    <div style="margin-bottom: 1.5rem; padding: 1.5rem; background: #f8f9fa; border-radius: 10px;
                       border-left: 4px solid #667eea;">
        <h4 style="margin-bottom: 1rem; color: #333;">
            <span style="color: #667eea; font-weight: bold;">Q{{ $index + 1 }}:</span>
            {{ $faq['question'] }}
        </h4>
        <p style="color: #666; margin-left: 2rem;">
            <strong>R:</strong> {{ $faq['reponse'] }}
        </p>
    </div>
    @endforeach

    <div style="text-align: center; margin-top: 2rem; padding: 2rem; 
                    background: rgba(102, 126, 234, 0.1); border-radius: 10px;">
        <p style="margin-bottom: 1rem;">
            <strong>Vous ne trouvez pas la réponse à votre question ?</strong>
        </p>
        <p>N'hésitez pas à nous contacter directement via le formulaire ci-dessus !</p>
    </div>
</section>
@endsection