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
            'titre' => 'Bienvenue sur mon Portfolio',
            'description' => 'Développeur Web & Designer UI/UX avec 3 ans d\'expérience',
            'services' => [
                [
                    'nom' => 'Développement Web',
                    'description' => 'Création de sites web modernes et applications web responsives',
                    'icone' => '💻'
                ],
                [
                    'nom' => 'Design UI/UX',
                    'description' => 'Interfaces utilisateur intuitives et expérience utilisateur optimisée',
                    'icone' => '🎨'
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
        $competences = [
            [
                'categorie' => 'Frontend',
                'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'TypeScript', 'React.js', 'Next.js', 'Vue.js', 'Tailwind', 'Bootstrap', 'Sass']
            ],
            [
                'categorie' => 'Backend',
                'technologies' => ['PHP', 'Laravel', 'MySQL', 'SQLite', 'API REST']
            ],
            [
                'categorie' => 'Design',
                'technologies' => ['Figma', 'Photoshop','Illustrator', 'UI/UX Design']
            ],
            [
                'categorie' => 'CMS & Outils',
                'technologies' => ['WordPress', 'Git', 'VS Code', 'Docker', 'NPM', 'Composer']
            ]
        ];

        return view('apropos', compact('competences'));
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
        $messageSucces = 'Votre message a été envoyé avec succès !';

        // Passer le message directement à la vue pour éviter d'utiliser le flash session
        return view('contact-recu', compact('donnees', 'messageSucces'));
    }

    /**
     * Affiche la page des services
     */
    public function services()
    {
        $services = [
            [
                'titre' => 'Site Vitrine',
                'description' => 'Création de sites web et applications web modernes avec React, Vue.js. Sites responsives et optimisés pour tous les appareils.',
                'duree' => '2-6 semaines',
                'technologies' => ['JavaScript', 'TypeScript', 'React.js', 'Next.js', 'Vue.js', 'CSS3', 'HTML5', 'Tailwind', 'Bootstrap']
            ],
            [
                'titre' => 'Maquette de site web',
                'description' => 'Conception d\'interfaces utilisateur intuitives et expériences utilisateur optimisées. Prototypage et wireframing.',
                'duree' => '1-3 semaines',
                'technologies' => ['Figma', 'Photoshop', 'Illustrator']
            ],
            [
                'titre' => 'Sites E-commerce',
                'description' => 'Boutiques en ligne complètes avec système de paiement sécurisé et gestion des stocks intégrée.',
                'duree' => '4-8 semaines',
                'technologies' => ['Laravel', 'WordPress', 'Stripe', 'PayPal', 'Vue.js', 'React.js']
            ],
            [
                'titre' => 'Applications Web',
                'description' => 'Applications web Full Stack sur mesure pour répondre à vos besoins spécifiques. Tableaux de bord et outils de gestion.',
                'duree' => '6-12 semaines',
                'technologies' => ['Laravel', 'PHP', 'Vue.js', 'React.js', 'Next.js', 'TypeScript', 'JavaScript', 'HTML5', 'CSS3', 'API REST', 'MySQL', 'SQLite']
            ]
        ];

        return view('services', compact('services'));
    }
}
