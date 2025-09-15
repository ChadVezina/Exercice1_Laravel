@extends('layouts.master')

@section('titre', 'Message reçu')
@section('description', 'Votre message a été envoyé avec succès')

@section('contenu')
<div class="container py-5">
    <!-- Récapitulatif modernisé -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg mb-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-white border border-primary rounded-circle p-3 me-3">
                            <i class="bi bi-envelope-check-fill text-primary fs-4"></i>
                        </div>
                        <div>
                            <h2 class="h4 mb-1 text-dark">Récapitulatif de votre message</h2>
                            <p class="text-muted mb-0">Détails de votre demande</p>
                        </div>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="p-3 bg-white border rounded-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person-fill text-primary me-2"></i>
                                    <small class="text-muted fw-bold">NOM</small>
                                </div>
                                <p class="mb-0 mt-1 fw-semibold">{{ $donnees['nom'] }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-white border rounded-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                                    <small class="text-muted fw-bold">EMAIL</small>
                                </div>
                                <p class="mb-0 mt-1 fw-semibold">
                                    <a href="mailto:{{ $donnees['email'] }}" class="text-decoration-none">{{ $donnees['email'] }}</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-white border rounded-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-tag-fill text-primary me-2"></i>
                                    <small class="text-muted fw-bold">SUJET</small>
                                </div>
                                <p class="mb-0 mt-1 fw-semibold">{{ $donnees['sujet'] }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-white border rounded-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-calendar-fill text-primary me-2"></i>
                                    <small class="text-muted fw-bold">DATE D'ENVOI</small>
                                </div>
                                <p class="mb-0 mt-1 fw-semibold">{{ $donnees['date_envoi'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-top pt-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-chat-quote-fill text-primary me-2"></i>
                            <h3 class="h6 mb-0 text-dark fw-bold">Votre message</h3>
                        </div>
                        <div class="bg-white border border-primary border-start border-4 p-3 rounded-end">
                            <p class="mb-0 fst-italic text-dark">"{{ $donnees['message'] }}"</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fil d'ariane de traitement - Style livraison -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="h5 text-center mb-4 text-dark">Suivi de votre demande</h3>

                    <div class="row text-center position-relative">
                        

                        <!-- Étape 1 - Message reçu -->
                        <div class="col-4 position-relative" style="z-index: 2;">
                            <div class="mb-3">
                                <div class="bg-success rounded-circle mx-auto d-flex align-items-center justify-content-center text-white" style="width: 60px; height: 60px;">
                                    <i class="bi bi-check-circle-fill fs-4"></i>
                                </div>
                            </div>
                            <h4 class="h6 fw-bold text-success">Message reçu</h4>
                            <p class="small text-muted mb-0">Votre message est bien enregistré</p>
                            <small class="text-success fw-semibold">✓ Terminé</small>
                        </div>

                        <!-- Étape 2 - Analyse -->
                        <div class="col-4 position-relative" style="z-index: 2;">
                            <div class="mb-3">
                                <div class="bg-warning rounded-circle mx-auto d-flex align-items-center justify-content-center text-white" style="width: 60px; height: 60px;">
                                    <i class="bi bi-hourglass-split fs-4"></i>
                                </div>
                            </div>
                            <h4 class="h6 fw-bold text-warning">Analyse</h4>
                            <p class="small text-muted mb-0">Étude personnalisée de votre demande</p>
                            <small class="text-warning fw-semibold">⏳ En cours</small>
                        </div>

                        <!-- Étape 3 - Réponse -->
                        <div class="col-4 position-relative" style="z-index: 2;">
                            <div class="mb-3">
                                <div class="bg-secondary rounded-circle mx-auto d-flex align-items-center justify-content-center text-white" style="width: 60px; height: 60px;">
                                    <i class="bi bi-reply-fill fs-4"></i>
                                </div>
                            </div>
                            <h4 class="h6 fw-bold text-secondary">Réponse</h4>
                            <p class="small text-muted mb-0">Réponse sous 24h maximum</p>
                            <small class="text-secondary fw-semibold">⏸️ En attente</small>
                        </div>
                    </div>

                    <!-- Temps de réponse estimé -->
                    <div class="text-center mt-4 p-3 bg-info bg-opacity-10 rounded-3">
                        <i class="bi bi-clock-fill text-info me-2"></i>
                        <strong class="text-info">Temps de réponse estimé : 24 heures maximum</strong>
                    </div>
                </div>
            </div>

            <!-- Navigation simplifiée -->
            <div class="text-center mb-5">
                <a href="{{ route('accueil') }}" class="btn btn-primary btn-lg px-5">
                    <i class="bi bi-house-fill me-2"></i>Retour à l'accueil
                </a>
            </div>
        </div>
    </div>

    <!-- Témoignages modernisés avec modales -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <?php
            $testimonials = [
                [
                    'nom' => 'Sophie L.',
                    'entreprise' => 'Startup Tech',
                    'message' => 'Réactivité exceptionnelle !',
                    'messageComplet' => 'Service client absolument parfait ! Chad a répondu à toutes mes questions en moins de 2 heures et a livré un site web professionnel qui dépasse mes attentes. Je recommande vivement ses services.',
                    'note' => 5,
                    'avatar' => 'SL',
                ],
                [
                    'nom' => 'Marc D.',
                    'entreprise' => 'E-commerce Plus',
                    'message' => 'Très professionnel, projet livré dans les délais.',
                    'messageComplet' => 'Collaboration extraordinaire avec Chad. Il a transformé notre boutique en ligne avec un design moderne et une expérience utilisateur impeccable. Livraison dans les temps et budget respecté.',
                    'note' => 5,
                    'avatar' => 'MD',
                ],
                [
                    'nom' => 'Julie M.',
                    'entreprise' => 'Design Agency',
                    'message' => 'Excellent travail sur la refonte web.',
                    'messageComplet' => 'Chad a complètement transformé notre présence en ligne. Son expertise en UI/UX est remarquable et il comprend parfaitement les besoins business. Un vrai partenaire de confiance.',
                    'note' => 5,
                    'avatar' => 'JM',
                ],
            ];
            ?>

            <h3 class="h5 text-center text-primary mb-4">⭐ Ce que disent mes clients</h3>

            <div class="row g-4">
                @foreach($testimonials as $index => $testimonial)
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $index }}">
                        <div class="card-body text-center p-4">
                            <!-- Avatar personnalisé -->
                            <div class="mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 60px; height: 60px;">
                                {{ $testimonial['avatar'] }}
                            </div>

                            <!-- Note étoiles -->
                            <div class="mb-3">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="bi bi-star-fill" style="color: {{ $i <= $testimonial['note'] ? '#ffc107' : '#e9ecef' }};"></i>
                                    @endfor
                            </div>

                            <!-- Message court -->
                            <p class="fst-italic mb-3 text-muted">"{{ $testimonial['message'] }}"</p>

                            <!-- Informations client -->
                            <div>
                                <h6 class="fw-bold text-dark mb-1">{{ $testimonial['nom'] }}</h6>
                                <small class="text-muted">{{ $testimonial['entreprise'] }}</small>
                            </div>

                            <!-- Indicateur de clic -->
                            <div class="mt-3">
                                <small class="text-primary">
                                    <i class="bi bi-eye-fill me-1"></i>Cliquer pour lire plus
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal pour chaque témoignage -->
                <div class="modal fade" id="modal{{ $index }}" tabindex="-1" aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow rounded-3">
                            <div class="modal-header border-0 pb-0">
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 50px; height: 50px;">
                                        {{ $testimonial['avatar'] }}
                                    </div>
                                    <div>
                                        <h5 class="modal-title fw-bold" id="modalLabel{{ $index }}">{{ $testimonial['nom'] }}</h5>
                                        <small class="text-muted">{{ $testimonial['entreprise'] }}</small>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Note étoiles -->
                                <div class="text-center mb-4">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="bi bi-star-fill fs-5" style="color: {{ $i <= $testimonial['note'] ? '#ffc107' : '#e9ecef' }};"></i>
                                        @endfor
                                </div>

                                <!-- Message complet -->
                                <p class="text-muted fst-italic text-center">
                                    "{{ $testimonial['messageComplet'] }}"
                                </p>
                            </div>
                            <div class="modal-footer border-0 pt-0">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection