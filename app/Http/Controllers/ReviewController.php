<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        $reviews = [
            [
                "name" => "Ali Ahmed",
                "image" => "12.jpg",
                "date" => "2024-04-01",
                "description" => 'Super Service und sehr kompetent! Herr Al Bakkour hat alles schnell und unkompliziert erledigt.
                 Das Gutachten war detailliert und nachvollziehbar.
                 Wirklich empfehlenswert und absolut nach meiner Erwartung. Danke',
                "rating" => 5,
            ],
           
            [
                'name' => 'Dennis Merling',
                'image' => '10.jpg',
                'date' => '2024-04-02',
                'description' => 'Sehr empfehlenswert! Herr Al Bakkour arbeitet schnell, zuverlässig und professionell. 
                Das Gutachten war präzise und zügig erstellt. Auch die Kommunikation war freundlich und unkompliziert.
                 Wenn Sie einen kompetenten Kfz-Gutachter suchen, sind Sie hier genau richtig.',
                'rating' => 3,
            ],
            [
                'name' => 'Er do',
                'image' => '16.jpg',
                'date' => '2025-05-10',
                'description' => 'Ich hatte kürzlich einen Schadenfall und war auf der Suche nach einem Kfz-Gutachter.
                 Die Terminvereinbarung verlief schnell und unkompliziert, die Begutachtung meines Autos hat er professionell durchgeführt.
                Herr Al Bakkour nahm sich viel Zeit, alles zu erklären, und das Gutachten war zügig fertig. Mit seiner Unterstützung 
                konnte ich meinen Schaden problemlos bei der Versicherung geltend machen und es wurde komplett übernommen.
                Großes Dankeschön!',
                'rating' => 4,
            ],
            
            [
                'name' => 'Jan Rutenbeck',
                'image' => '17.jpg',
                'date' => '2025-07-01',
                'description' => 'Wir haben Herrn Al Bakkour als sehr kompetent und freundlich wahrgenommen.
                 Sehr schnelle und unkomplizierte Abwicklung
                 des Gutachtens und Kommunikation mit den beteiligten Versicherungen.',
                'rating' => 5,
            ],
            
            [
                'name' => 'Yaman yamen',
                'image' => '15.jpg',
                'date' => '2025-07-03',
                'description' => 'Der Herr Al Bakkour war sehr professionell, und konnte uns alle Fragen beantworten bis hin zur Umsetzung...
                 Immer wieder gerne',
                'rating' => 5,
            ],

            [
                'name' => 'Ahmad',
                'image' => '14.jpg',
                'date' => '2025-07-07',
                'description' => 'Professioneller und ehrlicher Gutachter. Die Gutachten von Herr Al Bakkour
                 werden im Gegensatz zu den meisten anderen Gutachtern sogar vorm Amtsgerichten anerkennt. Weiter so',
                'rating' => 4,
            ],
            [
                'name' => 'NN',
                'image' => '13.jpg',
                'date' => '2025-07-10',
                'description' => 'Einer der vernünftigen und ehrlichen Gutachter , den ich kenne. Die meisten Gutachter schrauben
                 die Preise für den Schaden hoch, dementsprechend deren Honorar, 
                und am Ende regelt die Versicherung weniger zu Gunsten des Geschädigten.',
                'rating' => 5,
            ],
            
            
            
        ];

        return view('welcome.home', ["reviews" => $reviews]);
    }
    function about(){

    $features = [
        [
            'icon' => 'fas fa-star',
            'title' => 'Hochwertige Services',
            'description' => 'Super Service und sehr kompetent! Firma AutoHeld hat alles schnell und unkompliziert erledigt. Das Gutachten war detailliert und nachvollziehbar.
             Wirklich empfehlenswert und absolut nach meiner Erwartung. Danke',
        ],
       

        [
            'icon' => 'fas fa-star',
            'title' => 'Genauigkeit und Sorgfalt',
            'description' => 'Wir legen großen Wert auf Genauigkeit und Sorgfalt bei der Durchführung von Gutachten, um sicherzustellen,
             dass unsere Kunden die besten Ergebnisse erzielen.'
        ],

        
        [
            'icon' => 'fas fa-star',
            'title' => 'Kundenorientierung',
            'description' => 'Wir sind kundenorientiert und bieten individuelle Lösungen an, 
            um die Bedürfnisse unserer Kunden zu erfüllen.',
        ],
    ];

    return view('welcome.about', ["features" => $features]);
}
function service(){
    return view('welcome.service');
    }

}
