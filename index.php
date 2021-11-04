<?php
require __DIR__ . '/php/header.php';
require __DIR__ . '/php/data.php';
require __DIR__ . '/php/functions.php';

//myFunction runs if data is placed in the form starting on line 35
if (isset($_GET['city'], $_GET['occupation'], $_GET['experience'], $_GET['contract'])) {
    $available = availableEmployees($_GET['city'], $_GET['occupation'], intval($_GET['experience']), $_GET['contract']);
}

require __DIR__ . '/php/navbar.php';

?>
<section class="Main">
    <div class="Message">
        <h3>Vården <br>väntar <br>inte</h3>
        <p> Vi har personal redo för framtida uppdrag runt om i hela Sverige. Vi ser till att inget sjukhus drabbas utav personalbrist. Vår målsättning är att ni får en resurs som uppfyller just era behov samtidigt som vår reseurs får en arbetsplats där hen kan trivas på under en längre period. Vara sig det är intensiteten i storstäderna eller lugnet på landsbyggden så har vi någon för just er!<br>Tveka inte att fylla i vårt formulär, hjälp är bara några klick bort!
        </p>
    </div>
    <a id=#From></a>
    <div class="Form">
        <h3>Hjälp oss hjälpa er<br> hjälpa andra</h3>
        <div class="selectForm">

            <!-- Dropdown menu where user select which hospital is represented. The data is then sent to availableEmployees() -->
            <Form action="index.php" method="GET">
                <label for="city">Arbetsplats:</label> <br>
                <select id="city" name="city">
                    <option value="" disabled selected class="placeholder">Sjukhus i behov av resurs</option>
                    <?php foreach ($hospitals as $hospital) {
                        foreach ($hospital as $key => $value) {
                    ?><option value="<?php echo $key; ?>"><?php echo $value; ?>, <?php echo $key; ?></option><?php
                                                                                                            }
                                                                                                        } ?>
                </select><br><br>

                <!-- Dropdown menu where user select which occupation is wanted. The data is then sent to availableEmployees() -->
                <label for="occupation">Behov:</label> <br>
                <select id="occupation" name="occupation">
                    <option value="" disabled selected class="placeholder">Vi är i behov utav</option>
                    <?php
                    for ($i = 0; $i < count($occupations); $i++) {
                        $occupation = $occupations[$i];
                    ?> <option value="<?php echo $occupation; ?>"><?php echo $occupation; ?></option><?php
                                                                                                    } ?>
                </select><br><br>

                <!-- Dropdown menu where user select minimum experience. The data is then sent to availableEmployees() -->
                <label for="experience">Erfaranhet:</label> <br>
                <select id="experience" name="experience">
                    <option value="" disabled selected class="placeholder">Minimum erfarenhet</option>
                    <?php
                    $i = 0;
                    for ($i = 0; $i < count($minimumExperience); $i++) {
                        $experience = $minimumExperience[$i];
                    ?> <option value="<?php echo $i; ?>"><?php echo $experience; ?> års erfaranhet</option><?php
                                                                                                        } ?>
                </select><br><br>

                <!-- Dropdown menu where user select lenght of the contract. The data is then sent to availableEmployees() -->
                <label for="contract">Anställningsavtal:</label> <br>
                <select id="contract" name="contract">
                    <option value="" disabled selected class="placeholder">Önskad kontraktslängd</option>
                    <?php
                    for ($i = 0; $i < count($contracts); $i++) {
                        $contractLenght = $contracts[$i];
                    ?> <option value="<?php echo $contractLenght; ?>"><?php echo $contractLenght; ?></option><?php
                                                                                                            } ?>
                </select><br><br>
                <input type="submit" class="button" value="Skicka">
                <br><br>

                <!-- When the previous data has filtred through the $employee array all the matching data is put in the below form -->
                <!-- The choosen data (employee) from the form is passed to contact.php -->
            </Form>
            <?php if (isset($_GET)) { ?>

                <form action="/svensk_vardresurs/php/contact.php" method="POST">
                    <label for="available">Tillgänglig personal:</label> <br>
                    <select id="available" name="available">
                        <option value="" disabled selected class="placeholder">Tillgänglig personal</option>
                        <?php foreach ($available as $staff) {
                        ?><option value='<?php echo json_encode($staff); ?>'><?php echo "$staff[name], $staff[occupation], $staff[experience]års erfarenhet."; ?></option> <?php } ?>
                    </select><br><br><?php
                                    }
                                        ?><input type="submit" class="button" value="Kontakta resurs">
                </form>
        </div>
    </div>
</section>

<!-- Loop through the $quotes array to print each quote from the array -->
<article class="Reference">
    <div class="Quote">
        <?php foreach ($quotes as $quote) {
        ?>
            <div class="Review">
                <p> <?php echo "$quote[review]"; ?><br /><span>- <?php echo "$quote[name]"; ?> </span></p>
            </div> <?php
                } ?>
    </div>
    <div class="Photo">
        <picture class="PictureFrame">
            <img src="/svensk_vardresurs/images/young-doctor copy .jpg" alt="Doctor-pointing" />
        </picture>
        <picture class="PictureFrame">
            <img src="/svensk_vardresurs/images/usman-yousaf-pTrhfmj2jDA-unsplash.jpg" alt="Doctor-pointing" />
        </picture>
        <picture class="PictureFrame">
            <img src="/svensk_vardresurs/images/young-doctor copy .jpg" alt="Doctor-pointing" />
        </picture>
    </div>
</article>
<?php
require __DIR__ . '/php/footer.php';
?>
