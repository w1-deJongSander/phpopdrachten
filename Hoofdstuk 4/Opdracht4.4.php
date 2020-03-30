<?php
/**
 * User: Sander de Jong
 * Date: 14-2-2020
 * Time: 14:30
 * File: Opdracht4.4.php
 */
?>
<?php
include "Hoofdstuk 3/Includes/header.php"
?>



<?php
echo "<br>";
echo "<br>";
echo "<h1>Weekkalender Komende week</h1>";
$DaysWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
$test = "";
for($x=0; $x <8; $x++) {
    $DayNr = date('w', strtotime("+$x days"));
    $date = date('d-m-Y', strtotime("+$x days"));
    $test .= "Dag $DayNr is {$DaysWeek[$DayNr]} $date <br>";
}
echo $test
?>


<?php
include "Hoofdstuk 3/Includesnclude/footer.php"
?>