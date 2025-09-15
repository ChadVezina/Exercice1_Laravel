@extends('layouts.master')

@section('titre', 'Me contacter')
@section('description', 'Contactez-moi pour discuter de vos projets web et design')

@section('contenu')
<!-- Section Hero -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-3">Me contacter</h1>
                <p class="lead">Discutons de votre projet ensemble</p>
            </div>
        </div>
    </div>
</section>

<!-- Section formulaire de contact -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center py-4">
                        <h2 class="h4 text-primary mb-0">
                            <i class="bi bi-envelope-at"></i> Envoyez-moi un message
                        </h2>
                    </div>
                    <div class="card-body p-5">
                        <form action="{{ route('contact.traiter') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="nom" class="form-label fw-bold">Nom complet *</label>
                                <input type="text"
                                    class="form-control form-control-lg"
                                    id="nom"
                                    name="nom"
                                    value="{{ old('nom') }}"
                                    required
                                    placeholder="Votre nom et prénom">
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold">Adresse email *</label>
                                <input type="email"
                                    class="form-control form-control-lg"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    placeholder="votre@email.com">
                            </div>

                            <div class="mb-4">
                                <label for="sujet" class="form-label fw-bold">Sujet *</label>
                                <select class="form-select form-select-lg" id="sujet" name="sujet" required>
                                    <option value="">Choisissez un sujet</option>
                                    <option value="Projet web" {{ old('sujet') === 'Projet web' ? 'selected' : '' }}>
                                        Nouveau projet web
                                    </option>
                                    <option value="Design UI/UX" {{ old('sujet') === 'Design UI/UX' ? 'selected' : '' }}>
                                        Design UI/UX
                                    </option>
                                    <option value="Question technique" {{ old('sujet') === 'Question technique' ? 'selected' : '' }}>
                                        Question technique
                                    </option>
                                    <option value="Collaboration" {{ old('sujet') === 'Collaboration' ? 'selected' : '' }}>
                                        Proposition de collaboration
                                    </option>
                                    <option value="Autre" {{ old('sujet') === 'Autre' ? 'selected' : '' }}>
                                        Autre
                                    </option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label fw-bold">Message *</label>
                                <textarea class="form-control"
                                    id="message"
                                    name="message"
                                    rows="6"
                                    required
                                    placeholder="Décrivez votre projet ou votre demande en détail...">{{ old('message') }}</textarea>
                                <div class="form-text">Minimum 10 caractères</div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="bi bi-send"></i> Envoyer le message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section informations de contact -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="display-6 fw-bold text-primary">Mes coordonnées</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <div class="card-body p-4">
                        <i class="bi bi-geo-alt-fill text-primary fs-1 mb-3"></i>
                        <h3 class="h5">Localisation</h3>
                        <p class="text-muted mb-0">
                            Québec, Canada<br>
                            <small>Travail à distance</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <div class="card-body p-4">
                        <i class="bi bi-envelope-fill text-primary fs-1 mb-3"></i>
                        <h3 class="h5">Email</h3>
                        <p class="text-muted mb-0">
                            <a href="mailto:chad.vezina@example.com" class="text-primary text-decoration-none fw-bold">
                                chad.vezina@example.com
                            </a><br>
                            <small>Réponse sous 24h</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <div class="card-body p-4">
                        <i class="bi bi-linkedin text-primary fs-1 mb-3"></i>
                        <h3 class="h5">Réseaux</h3>
                        <p class="text-muted mb-0">
                            <a href="#" class="text-primary text-decoration-none fw-bold">
                                LinkedIn
                            </a><br>
                            <small>Connectons-nous !</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section FAQ -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="display-6 fw-bold text-primary">Questions fréquentes</h2>
            </div>
        </div>

        @php
        $faqs = [
        [
        'question' => 'Quel est le délai moyen pour un projet web ?',
        'reponse' => 'Cela dépend de la complexité, mais généralement entre 2 et 8 semaines pour un site vitrine ou application web.'
        ],
        [
        'question' => 'Travaillez-vous à distance ?',
        'reponse' => 'Oui, je travaille principalement à distance, ce qui me permet de collaborer avec des clients partout.'
        ],
        [
        'question' => 'Proposez-vous de la maintenance ?',
        'reponse' => 'Je peux proposer un support post-livraison incluant mises à jour et corrections mineures.'
        ],
        [
        'question' => 'Les sites sont-ils optimisés pour mobile ?',
        'reponse' => 'Absolument ! Tous mes projets sont responsive et optimisés pour mobile, tablette et desktop.'
        ]
        ];
        @endphp

        <div class="row">
            <div class="col-lg-8 mx-auto">
                @foreach($faqs as $index => $faq)
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="h6 text-primary mb-3">
                            <i class="bi bi-question-circle"></i>
                            {{ $faq['question'] }}
                        </h4>
                        <p class="text-muted mb-0 ms-4">
                            {{ $faq['reponse'] }}
                        </p>
                    </div>
                </div>
                @endforeach

                <div class="alert alert-primary text-center mt-4" role="alert">
                    <h5 class="alert-heading">Vous ne trouvez pas la réponse à votre question ?</h5>
                    <p class="mb-0">N'hésitez pas à me contacter directement via le formulaire ci-dessus !</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection