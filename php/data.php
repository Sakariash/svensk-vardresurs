<?php

declare(strict_types=1);


//Array with quotes from employees
$quotes = [
    [
        'name' => 'Dr Nick O`Teen',
        'review' => 'Jag har varit ute på över 10 uppdrag för Svensk Vårdresurs och det har varit en perfekt matchning varje gång!',
    ],
    [
        'name' => 'Dr Sal Ami',
        'review' => 'Why not?',
    ],
    [
        'name' => 'Dr Pat Myaz',
        'review' => 'When people are sick they deserve a little help. Sick, help. Sick, help.',
    ],
];

//Array containing the professions of the availible staff
$occupations = [
    'Allmänspecialist',
    'Kirurg',
    'Leg.Läkare',
    'Narkosläkare',
    'Sjuksköterska',
    'ST-läkare',
    'Överläkare',
];

//Array containing all the cities
$hospitals = [
    ['Göteborg' => 'Östra Sjukhuset'],
    ['Göteborg' => 'Sahlgrenska Universitetssjukhus'],
    ['Göteborg' => 'Capio Lundby Närsjukhus'],
    ['Stockholm' => 'Astrid Lindgrens Barnsjukhus'],
    ['Stockholm' => 'Södersjukhuset'],
    ['Stockholm' => 'Capio Sankt Görans Sjukhus'],
    ['Malmö' => 'Allmänna Sjukhuset'],
    ['Malmö' => 'Skånes Universitetssjukhus'],
    ['Varberg' => 'Hallands Sjukhus Varberg'],
    ['Halmstad' => 'Hallands Sjukhus Halmstad'],
    ['Kiruna' => 'Kiruna Sjukhus'],
    ['Umeå' => 'Norrlands Universitetssjukhus'],
];

/* Fill the array with array_push function*/
$minimumExperience = [];

$i = 0;
for ($i = 0; $i <= 10; $i++) {
    $experience = $i;
    array_push($minimumExperience, $experience);
};

//The avalible contract lenghts
$contracts = [
    'Långtidskontrakt',
    'Korttidskontrakt',
];

//Make the employee array multidimentional??
// $multi = [

//     [
//         'Kirurg' =>
//         [
//             'name' => 'Sam Teame',
//             'occupation' => 'Allmänmedicin',
//             'experience' => '8',
//             'contract' => 'Långtidskontrakt',
//             'city' => 'Stockholm',
//         ]
//     ]['Leg. Läkare'],
//     ['Narkosläkare'],
//     ['Sjuksköterska'],
//     ['ST-läkare'],
//     ['Överläkare'],
// ];

//All the available hospital workers
$employees = [
    [
        'name' => 'Sam Teame',
        'occupation' => 'Allmänmedicin',
        'experience' => 8,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],

    [
        'name' => 'Maria Henriksson',
        'occupation' => 'Allmänmedicin',
        'experience' => 6,
        'contract' => 'Långtidskontrakt',
        'city' => 'Malmö',
    ],
    [
        'name' => 'Cecilia Synd',
        'occupation' => 'Allmänmedicin',
        'experience' => 6,
        'contract' => 'Långtidskontrakt',
        'city' => 'Malmö',
    ],
    [
        'name' => 'Fredrik Snortare',
        'occupation' => 'Allmänmedicin',
        'experience' => 4,
        'contract' => 'Korttidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Dino Kocevski',
        'occupation' => 'Allmänmedicin',
        'experience' => 5,
        'contract' => 'Korttidskontrakt',
        'city' => 'Varberg',
    ],
    [
        'name' => 'Robert Olsson',
        'occupation' => 'Allmänmedicin',
        'experience' => 5,
        'contract' => 'Korttidskontrakt',
        'city' => 'Umeå',
    ],
    [
        'name' => 'Anne Vuorenmaa',
        'occupation' => 'Allmänmedicin',
        'experience' => 8,
        'contract' => 'Korttidskontrakt',
        'city' => 'Umeå',
    ],
    [
        'name' => 'Alexandra Roine',
        'occupation' => 'Kirurg',
        'experience' => 10,
        'contract' => 'Korttidskontrakt',
        'city' => 'Göteborg'
    ],
    [
        'name' => 'Carl Romlin',
        'occupation' => 'Kirurg',
        'experience' => 9,
        'contract' => 'Korttidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Alfred Olofsson',
        'occupation' => 'Kirurg',
        'experience' => 5,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Esrom Solomon',
        'occupation' => 'Kirurg',
        'experience' => 5,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Anna Gutesjö',
        'occupation' => 'Kirurg',
        'experience' => 8,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Alexander Pandzic',
        'occupation' => 'Kirurg',
        'experience' => 12,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Annie Weglin',
        'occupation' => 'Leg. läkare',
        'experience' => 4,
        'contract' => 'Långtidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Daniel Alcén',
        'occupation' => 'Leg. läkare',
        'experience' => 6,
        'contract' => 'Långtidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Anton Wester',
        'occupation' => 'Leg. läkare',
        'experience' => 15,
        'contract' => 'Korttidskontrakt',
        'city' => 'Umeå',
    ],
    [
        'name' => 'Sam Hoshjargar',
        'occupation' => 'Leg. läkare',
        'experience' => 2,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Arvin Panah',
        'occupation' => 'Leg. läkare',
        'experience' => 14,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Caroline Helier',
        'occupation' => 'Leg. läkare',
        'experience' => 10,
        'contract' => 'Korttidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Isabella Nurmagomedov',
        'occupation' => 'Leg. läkare',
        'experience' => 7,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Hasbulla Nurmagomedov',
        'occupation' => 'Leg. Läkare',
        'experience' => 19,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Liza Marklund',
        'occupation' => 'Leg. Läkare',
        'experience' => 5,
        'contract' => 'Korttidskontrakt',
        'city' => 'Kiruna',
    ],
    [
        'name' => 'Dan Brown',
        'occupation' => 'Leg. Läkare',
        'experience' => 8,
        'contract' => 'Korttidskontrakt',
        'city' => 'Halmstad',
    ],
    [
        'name' => 'Clos Amador',
        'occupation' => 'Leg. Läkare',
        'experience' => 15,
        'contract' => 'Korttidskontrakt',
        'city' => 'Varberg',
    ],
    [
        'name' => 'Loke Påslakan',
        'occupation' => 'Leg. Läkare',
        'experience' => 4,
        'contract' => 'Korttidskontrakt',
        'city' => 'Malmö',
    ],
    [
        'name' => 'Samuel To',
        'occupation' => 'Narkosläkare',
        'experience' => 9,
        'contract' => 'Korttidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'L.G Frisk',
        'occupation' => 'Narkosläkare',
        'experience' => 16,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Carl Tuvéd',
        'occupation' => 'Narkosläkare',
        'experience' => 5,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Petter Nittiota',
        'occupation' => 'Sjuksköterska',
        'experience' => 4,
        'contract' => 'Långtidskontrakt',
        'city' => 'Umeå',
    ],
    [
        'name' => 'Johanna Pall',
        'occupation' => 'Sjuksköterska',
        'experience' => 4,
        'contract' => 'Korttidskontrakt',
        'city' => 'Umeå',
    ],
    [
        'name' => 'Pantea Asgaroulady',
        'occupation' => 'Sjuksköterska',
        'experience' => 6,
        'contract' => 'Långtidskontrakt',
        'city' => 'Kiruna,',
    ],
    [
        'name' => 'Frida Johannesson',
        'occupation' => 'Sjuksköterska',
        'experience' => 6,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Jackie Dah',
        'occupation' => 'Sjuksköterska',
        'experience' => 4,
        'contract' => 'Långtidskontrakt',
        'city' => 'Kiruna',
    ],
    [
        'name' => 'Muhammed Aly',
        'occupation' => 'Sjuksköterska',
        'experience' => 3,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Elin Lundin',
        'occupation' => 'Sjuksköterska',
        'experience' => 5,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Eli Norén',
        'occupation' => 'Sjuksköterska',
        'experience' => 6,
        'contract' => 'Korttidskontrakt',
        'city' => 'Halmstad',
    ],
    [
        'name' => 'Stefan Åkrister',
        'occupation' => 'Sjuksköterska',
        'experience' => 4,
        'contract' => 'Långtidskontrakt',
        'city' => 'Varberg',
    ],
    [
        'name' => 'Edwin M. Enarú',
        'occupation' => 'Sjuksköterska',
        'experience' => 4,
        'contract' => 'Långtidskontrakt',
        'city' => 'Kiruna',
    ],
    [
        'name' => 'My Sigare',
        'occupation' => 'Sjuksköterska',
        'experience' => 1,
        'contract' => 'Korttidskontrakt',
        'city' => 'Malmö',
    ],
    [
        'name' => 'Amne Heshmati',
        'occupation' => 'Sjuksköterska',
        'experience' => 22,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Marselle Henry',
        'occupation' => 'Sjuksköterska',
        'experience' => 19,
        'contract' => 'Långtidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Ebba Element',
        'occupation' => 'Sjuksköterska',
        'experience' => 13,
        'contract' => 'Långtidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Alva Bladh',
        'occupation' => 'Sjuksköterska',
        'experience' => 8,
        'contract' => 'Långtidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Maria Koronen',
        'occupation' => 'Sjuksköterska',
        'experience' => 3,
        'contract' => 'Långtidskontrakt',
        'city' => 'Göteborg',
    ],
    [
        'name' => 'Martin Craft',
        'occupation' => 'ST-läkare',
        'experience' => 3,
        'contract' => 'Korttidskontrakt',
        'city' => 'Umeå',
    ],
    [
        'name' => 'John Kavanagh',
        'occupation' => 'ST-läkare',
        'experience' => 19,
        'contract' => 'Korttidskontrakt',
        'city' => 'Malmö',
    ],
    [
        'name' => 'Lina Eriksson',
        'occupation' => 'ST-läkare',
        'experience' => 9,
        'contract' => 'Korttidskontrakt',
        'city' => 'Malmö',
    ],
    [
        'name' => 'Henrik Björlin',
        'occupation' => 'ST-läkare',
        'experience' => '3',
        'contract' => 'Korttidskontrakt',
        'city' => 'Kiruna',
    ],
    [
        'name' => 'Karl Andersson',
        'occupation' => 'ST-läkare',
        'experience' => 3,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Love Alén',
        'occupation' => 'ST-läkare',
        'experience' => 8,
        'contract' => 'Korttidskontrakt',
        'city' => 'Varberg',
    ],
    [
        'name' => 'Anna Andersson',
        'occupation' => 'Överläkare',
        'experience' => 29,
        'contract' => 'Korttidskontrakt',
        'city' => 'Stockholm',
    ],
    [
        'name' => 'Roger Henriksson',
        'occupation' => 'Överläkare',
        'experience' => 24,
        'contract' => 'Korttidskontrakt',
        'city' => 'Malmö',
    ],
    [
        'name' => 'Sal Ami',
        'occupation' => 'Överläkare',
        'experience' => 15,
        'contract' => 'Långtidskontrakt',
        'city' => 'Stockholm',
    ],
];



//array_keys
//array_filter
