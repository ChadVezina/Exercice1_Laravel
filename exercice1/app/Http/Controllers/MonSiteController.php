<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonSiteController extends Controller
{
    /**
     * Affiche la page d'accueil
     */
    public function index()
    {
        $donnees = [
            'titre' => 'Bienvenue sur Mon Site Web',
            'description' => 'Un projet Laravel moderne et responsive',
            'services' => [
                [
                    'nom' => 'Développement Web',
                    'description' => 'Création de sites web modernes et responsives',
                    'icone' => '💻'
                ],
                [
                    'nom' => 'Design UI/UX',
                    'description' => 'Interface utilisateur intuitive et moderne',
                    'icone' => '🎨'
                ],
                [
                    'nom' => 'Consulting',
                    'description' => 'Conseils et expertise technique',
                    'icone' => '💡'
                ]
            ]
        ];

        return view('accueil', compact('donnees'));
    }

    /**
     * Affiche la page à propos
     */
    public function apropos()
    {
        $equipe = [
            [
                'nom' => 'Alex Dubois',
                'poste' => 'Développeur Full-Stack',
                'experience' => '5 ans',
                'specialites' => ['Laravel', 'Vue.js', 'MySQL']
            ],
            [
                'nom' => 'Marie Martin',
                'poste' => 'Designer UI/UX',
                'experience' => '4 ans',
                'specialites' => ['Figma', 'Adobe Creative', 'Prototypage']
            ]
        ];

        return view('apropos', compact('equipe'));
    }

    /**
     * Affiche la page de contact avec le formulaire
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Traite les données du formulaire de contact
     */
    public function traiterContact(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string|min:10'
        ], [
            'nom.required' => 'Le nom est obligatoire',
            'email.required' => 'L\'email est obligatoire',
            'email.email' => 'L\'email doit être valide',
            'sujet.required' => 'Le sujet est obligatoire',
            'message.required' => 'Le message est obligatoire',
            'message.min' => 'Le message doit contenir au moins 10 caractères'
        ]);

        // Récupération des données
        $donnees = [
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'sujet' => $request->input('sujet'),
            'message' => $request->input('message'),
            'date_envoi' => now()->format('d/m/Y à H:i:s')
        ];

        // Simulation de l'envoi (dans un vrai projet, on enverrait un email)
        session()->flash('success', 'Votre message a été envoyé avec succès !');

        return view('contact-recu', compact('donnees'));
    }

    /**
     * Affiche la page des services
     */
    public function services()
    {
        $services = [
            [
                'titre' => 'Développement Web',
                'description' => 'Création de sites web et applications web modernes avec Laravel, React, Vue.js',
                'prix' => 'À partir de 1500€',
                'duree' => '2-6 semaines',
                'technologies' => ['Laravel', 'PHP', 'JavaScript', 'MySQL', 'CSS3', 'HTML5']
            ],
            [
                'titre' => 'E-commerce',
                'description' => 'Boutiques en ligne complètes avec système de paiement et gestion des stocks',
                'prix' => 'À partir de 2500€',
                'duree' => '4-8 semaines',
                'technologies' => ['Laravel', 'Stripe', 'PayPal', 'Vue.js', 'Bootstrap']
            ],
            [
                'titre' => 'Applications Mobile',
                'description' => 'Applications mobiles natives et hybrides pour iOS et Android',
                'prix' => 'À partir de 3000€',
                'duree' => '6-12 semaines',
                'technologies' => ['React Native', 'Flutter', 'Firebase', 'API REST']
            ],
            [
                'titre' => 'Consulting & Formation',
                'description' => 'Conseil technique, audit de code, formation d\'équipes de développement',
                'prix' => '500€/jour',
                'duree' => 'Variable',
                'technologies' => ['Architecture', 'Best Practices', 'Code Review', 'DevOps']
            ]
        ];

        return view('services', compact('services'));
    }
}
