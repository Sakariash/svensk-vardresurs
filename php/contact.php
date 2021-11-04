<?php
require __DIR__ . '/header.php';
require __DIR__ . '/navbar.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';



//json_encode makes the variable able to be any type
//json_decode switch the variable back to it orignial type
if (isset($_POST['available'])) {
    $employee = json_decode($_POST['available'], true);

    $name = $employee['name'];
    $occupation = $employee['occupation'];
    $experience = $employee['experience'];
    $contract = $employee['contract'];
}
?>
<div class="contact">
    <div class=contactHeader>
        <div class="contactLogo"><img src="/svensk_vardresurs/images/stethoscope.png" alt="Stethoscope-logo"></div>
        <h1>Svensk Vårdresurs</h1>
    </div>
    <div>
        <h2>Kontakt</h2>
    </div>
    <div class=information>
        <div class="name">Namn:</div>
        <div class="fillInName"><?php echo $name; ?></div>
        <div class="email">E-mail:</div>
        <div class="fillInEmail"><?php echo strtolower(str_replace(' ', '', $name)); ?>@svenskvardresurs.com</div>
        <div class="occupation">Titel:</div>
        <div class="fillInOccupation"><?php echo $occupation ?></div>
    </div>
    <p class="contactMessage">Meddelande</p>
    <div class="requiredMessage"> Hej, <?php echo $name; ?>!<br>Vi är på jakt efter en <?php echo strtolower($occupation); ?> och med tanke på din fina erfarenhet på <?php echo $experience; ?> år skulle vi vilja erbjuda dig ett <?php echo strtolower($contract); ?><br>Hoppas detta är något som intresserar dig och att vi hörs av inom en snar framtid! </div>
</div>
<button class="sendMessage">Kontakta</button>
<?php
require __DIR__ . '/footer.php';
