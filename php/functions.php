<?php

declare(strict_types=1);



function myFunction(string $city, string $occupation, int $experience, string $contract): array
{
    require __DIR__ . '/data.php';
    $city = $_POST['city'];
    $occupation = $_POST['occupation'];
    $experience = $_POST['experience'];
    $contract = $_POST['contract'];

    $available = [[]];

    foreach ($employees as $value) {
        if ($value['city'] === $city && $value['occupation'] === $occupation && $value['experience'] >= $experience && $value['contract'] === $contract) {
            // var_dump($value['name'], $city, $occupation, $value['experience'], $contract);
            array_push($available, $value);

            // var_dump($value['name'], $city, $occupation, $value['experience'], $contract);
            // array_push($available, $value['name'], $city, $occupation, $value['experience'], $contract);
        }
    }
    return $available;
}

if (isset($_POST['city'], $_POST['occupation'], $_POST['experience'], $_POST['contract'])) {
    $experience = intval($_POST['experience']);
    $available = myFunction($_POST['city'], $_POST['occupation'], $experience, $_POST['contract']);
    print_r($available);
}


    // foreach ($employees as $value) {


    //     if ($value['city'] === $city && $value['occupation'] === $occupation  && $value['experience'] >= $experience  && $value['contract'] === $contract) {
    //         var_dump($city);
    //     }
    // }


    // foreach ($employees as $value) {
    // if ($value['occupation'] === $_POST['occupation'] && $value['city'] === $_POST['city'] && $value['experience'] >= $_POST['experience'] && $value['contract'] === $_POST['contract']) {
    //     // var_dump($value['occupation'], $value['city'], $value['experience'], $value['contract']);
    // }
    // }




    //Fyll array med värde som går igenom

    //FUNKAR!!
    // foreach ($employees as $value) {
    //     if ($value['occupation'] === $data['occupation'] && $value['city'] === $data['city'] && $value['experience'] >= $data['experience'] && $value['contract'] === $data['contract']) {
    //         var_dump($value['occupation'], $value['city'], $value['experience'], $value['contract']);
    //     }
    // }


// foreach ($value as $key => $value)



// if ($value['occupation'] === $data['occupation'] && $data['experience'] >= $value['experience'] && $value['contract'] === $data['contract'] && $value['city'] === $data['city']) {

//     var_dump($value);
// }
// if ($value['experience'] === $data['experience']) {

//     continue;
// }
// if ($value['contract'] === $data['contract']) {

//     continue;
// }
// if ($value['city'] === $data['city']) {

//     continue;
// }
// var_dump($value);




// echo "<br>";
// var_dump($data['occupation']);

// foreach ($data as $value) {

// }

// foreach ($data['city'])
// var_dump($data['city']);


// require __DIR__ . '/data.php';
// $selectedHospital = $_POST['city'];
// $selectedOccupation = $_POST['occupation'];
// $minimumExperience = $_POST['experience'];
// $contractLenght = $_POST['contract'];

// if (isset($_POST[$key], $_POST[$occupation], $_POST[$experience], $_POST[$contractLenght])) {



// myFunction($_POST);
