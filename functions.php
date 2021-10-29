<?php

declare(strict_types=1);



$quotes = [
    'Dr Nick O`Teen' => 'Jag har varit ute på över 10 uppdrag för Svensk Vårdresurs och det har varit en perfekt matchning varje gång!',
    'Dr Sal Ami' => 'Why not?',
    'Dr Pat Myaz' => 'When people are sick they deserve a little help. Sick, help. Sick, help.',
];

//Array för samtliga väljbara yrken. Printas i form/select i main
$occupations = [
    'Allmänspecialist',
    'Kirurg',
    'Leg. Läkare',
    'Narkosläkare',
    'Sjuksköterska',
    'ST-läkare',
    'Överläkare',
];

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
$minimumExperiance = [];

$i = 0;
for ($i = 0; $i <= 10; $i++) {
    $experiance = $i;
    array_push($minimumExperiance, $experiance);
};

$contracts = [
    'Långtidskontrakt',
    'Korttidskontrakt',
];


$employees = [
    ['name' => 'Sam Teame', 'occupation' => 'Allmänmedicin', 'experience' => '8', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Maria Henriksson', 'occupation' => 'Allmänmedicin', 'experience' => '6', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Cecilia Synd', 'occupation' => 'Allmänmedicin', 'experience' => '6', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Fredrik Snortare', 'occupation' => 'Allmänmedicin', 'experience' => '4', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Dino Kocevski', 'occupation' => 'Allmänmedicin', 'experience' => '5', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Robert Olsson', 'occupation' => 'Allmänmedicin', 'experience' => '5', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Anne Vuorenmaa', 'occupation' => 'Allmänmedicin', 'experience' => '8', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Stockholm'],
    ['name' => 'Alexandra Roine', 'occupation' => 'Kirurg', 'experience' => '10', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Stockholm'],
    ['name' => 'Carl Romlin', 'occupation' => 'Kirurg', 'experience' => '9', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Alfred Olofsson', 'occupation' => 'Kirurg', 'experience' => '5', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Esrom Solomon', 'occupation' => 'Kirurg', 'experience' => '5', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Anna Gutesjö', 'occupation' => 'Leg. läkare', 'experience' => '8', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Alexander Pandzic', 'occupation' => 'Leg. läkare', 'experience' => '12', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Annie Weglin', 'occupation' => 'Leg. läkare', 'experience' => '4', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Daniel Alcén', 'occupation' => 'Leg. läkare', 'experience' => '6', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Anton Wester', 'occupation' => 'Leg. läkare', 'experience' => '15', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Stockholm'],
    ['name' => 'Sam Hoshjargar', 'occupation' => 'Leg. läkare', 'experience' => '2', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Arvin Panah', 'occupation' => 'Leg. läkare', 'experience' => '14', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Caroline Helier', 'occupation' => 'Leg. läkare', 'experience' => '10', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Isabella Nurmagomedov', 'occupation' => 'Leg. läkare', 'experience' => '7', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Hasbulla Nurmagomedov', 'occupation' => 'Narkosläkare', 'experience' => '19', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Samuel To', 'occupation' => 'Narkosläkare', 'experience' => '9', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'L.G Frisk', 'occupation' => 'Narkosläkare', 'experience' => '16', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Carl Tuvéd', 'occupation' => 'Narkosläkare', 'experience' => '2', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Petter Nittiota', 'occupation' => 'Sjuksköterska', 'experience' => '1', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Johanna Pall', 'occupation' => 'Sjuksköterska', 'experience' => '4', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Pantea Asgaroulady', 'occupation' => 'Sjuksköterska', 'experience' => '1', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Umeå, Kiruna, Stockholm,Göteborg, Varberg, Halmstad, Malmö'],
    ['name' => 'Frida Johannesson', 'occupation' => 'Sjuksköterska', 'experience' => '4', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Jackie Dah', 'occupation' => 'Sjuksköterska', 'experience' => '1', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg, Umeå, Kiruna'],
    ['name' => 'Muhammed Aly', 'occupation' => 'Sjuksköterska', 'experience' => '1', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg, Umeå, Stockholm'],
    ['name' => 'Elin Lundin', 'occupation' => 'Sjuksköterska', 'experience' => '2', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Eli Norén', 'occupation' => 'Sjuksköterska', 'experience' => '2', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Malmö, Halmstad, Varberg'],
    ['name' => 'Stefan Åkrister', 'occupation' => 'Sjuksköterska', 'experience' => '1', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Halmstad, Varberg, Malmö'],
    ['name' => 'Edwin M. Enarú', 'occupation' => 'Sjuksköterska', 'experience' => '3', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Umeå, Kiruna, Stockholm,Göteborg, Varberg, Halmstad, Malmö'],
    ['name' => 'My Sigare', 'occupation' => 'Sjuksköterska', 'experience' => '1', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Malmö'],
    ['name' => 'Amne Heshmati', 'occupation' => 'Sjuksköterska', 'experience' => '22', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Marselle Henry', 'occupation' => 'Sjuksköterska', 'experience' => '19', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Ebba Element', 'occupation' => 'Sjuksköterska', 'experience' => '13', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Alva Bladh', 'occupation' => 'Sjuksköterska', 'experience' => '8', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Maria Koronen', 'occupation' => 'Sjuksköterska', 'experience' => '3', 'prefered contract' => 'Långtidskontrakt', 'city' => 'Göteborg'],
    ['name' => 'Martin Craft', 'occupation' => 'ST-läkare', 'experience' => '3', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Umeå, Kiruna, Stockholm,Göteborg, Varberg, Halmstad, Malmö'],
    ['name' => 'John Kavanagh', 'occupation' => 'ST-läkare', 'experience' => '19', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Stockholm, Varberg, Malmö'],
    ['name' => 'Lina Eriksson', 'occupation' => 'ST-läkare', 'experience' => '9', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Halmstad, Varberg, Malmö'],
    ['name' => 'Henrik Björlin', 'occupation' => 'ST-läkare', 'experience' => '3', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Umeå, Kiruna'],
    ['name' => 'Karl Andersson', 'occupation' => 'ST-läkare', 'experience' => '3', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Stockholm'],
    ['name' => 'Love Alén', 'occupation' => 'ST-läkare', 'experience' => '8', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Halmstad, Varberg'],
    ['name' => 'Anna Andersson', 'occupation' => 'Överläkare', 'experience' => '29', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Stockholm'],
    ['name' => 'Roger Henriksson', 'occupation' => 'Överläkare', 'experience' => '24', 'prefered contract' => 'Korttidskontrakt', 'city' => 'Göteborg, Stockholm, Malmö'],
];



//array_keys
//array_filter
