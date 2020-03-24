
<?php
include "../Hoofdstuk 3/Includes/header.php"
?>

    <h2>Menu</h2>
    <ul>
        <li>
            <a href="../hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
        </li>
        <li>
            <a href="../hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
        </li>
        <li>
            <a href="../Hoofdstuk%203/Opdracht%203.1.php">Opdracht 3.1</a>
        </li>
        <li>
            <a href="../Hoofdstuk%203/Opdracht3.2.php">Opdracht 3.2</a>
        </li>
        <li>
            <a href="../Hoofdstuk%203/Opdracht3.3.php">Opdracht 3.3</a>
        </li>
        <li>
            <a href="../Hoofdstuk%204/Opdracht%204.1.php">Opdracht 4.1</a>
        </li>
        <li>
            <a href="../Hoofdstuk%204/Opdracht4.2.php">Opdracht 4.2</a>
        </li>
        <li>
            <a href="../Hoofdstuk%204/Opdracht4.3.php">Opdracht 4.3</a>
        </li>
    </ul>
<h2>Uitwerkingen</h2>
<?php
date_default_timezone_set("Europe/Amsterdam");
$hour = ('H');
$year = date('Y');
$moment =" ";

if($hour >= 0 && $hour <= 5)
{
    $moment = 'Goedennacht';
}
else if ($hour >= 5 && $hour <= 12)
{
    $moment = 'Goedenochtend';
}
else if($hour >= 12 && $hour <= 17)
{
    $moment = 'Goedenmiddag';
}
else if ($hour >= 17 && $hour <= 0)
{
    $moment = 'Goedenavond';
}

echo $moment . ' bezoeker, &copy; Sander de Jong ' . $year;
?>
<?php
include "../Hoofdstuk 3/Includes/footer.php"
?>