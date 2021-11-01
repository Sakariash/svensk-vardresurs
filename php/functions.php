<?php

declare(strict_types=1);


//The data from the form in index.php is pushed to array $available
function myFunction(string $city, string $occupation, int $experience, string $contract): array
{
    require __DIR__ . '/data.php';
    $available = [];

    foreach ($employees as $value) {
        if ($value['city'] === $city && $value['occupation'] === $occupation && intval($value['experience']) >= $experience && $value['contract'] === $contract) {
            array_push($available, $value);
        }
    }

    return $available;
}
