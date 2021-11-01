<?php
require __DIR__ . '/header.php';
require __DIR__ . '/navbar.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';

// $name = $staff['name'];


//Gör array till string -> tillbaka till array med hjälp av json_encode/decode
if (isset($_POST['available'])) {
    // var_dump($_POST['available']);
    $employee = json_decode($_POST['available'], true);
    // var_dump($name);
    // print_r($employee);
    echo $employee['name'];
    echo $employee['occupation'];
    echo $employee['experience'];
} else {
    echo "NOT";
}
//     selectedEmployee();

// echo $_POST[$staff['name']];
require __DIR__ . '/footer.php';
