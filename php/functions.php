<?php

declare(strict_types=1);


//The data from the form in index.php is pushed to array $available
function availableEmployees(string $city, string $occupation, int $year, string $contract): array
{
    require __DIR__ . '/data.php';
    $available = [];

    foreach ($employees as $value) :
        if ($value['city'] === $city && $value['occupation'] === $occupation && intval($value['experience']) >= $year && $value['contract'] === $contract) :
            array_push($available, $value);
        endif;
    endforeach;

    return $available;
}
function getSocialLink(string $icons): string
{
    if ($icons === 'instagram') {
        return "https://instagram.com";
    } else if ($icons === 'facebook') {
        return "https://facebook.com";
    } else {
        return '';
    }
}
