<?php
/**
 * User: Sander de Jong
 * Date: 17-03-2020
 * Time: 11:00
 * File: opdracht3.2.php
 */
?>
<?php
$trafficLightColor = "Groen";
$ambulanceComing = false;
$driveOn = true;
$result = " ";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
    </title>
    <meta name="description" content="Mijn eerste poging in php">
    <meta name="keywords" content="plz, help, me">
    <meta charset="utf-8">
    <link href="../CSS/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<h2>Deel 1</h2>
<?php
if ($trafficLightColor == "Groen" && $ambulanceComing == false)
{
    $driveOn = true;
}
else
{
    $driveOn = false;
}

if ($driveOn == true)
{
    echo '<span class="green">U mag doorrijden</span>';
}
else
{
    echo '<span class="red">U moet stoppen</span>';
}
?>
<p><?php echo $result ?></p>
<br>
<h2>Deel 2</h2>
<?php
$boozePlz = "";
$countryName = "Bulgarije";
$currentAge = 20;

if($currentAge > 20)
{
    $boozePlz = "Je mag hier alle drankjes consumeren";
}
elseif($currentAge <= 20 && $currentAge >= 17)
{
    if ($currentAge >= 18 && ($countryName == "België" || $countryName == "Bulgarije" || $countryName =="Nederland"))
    {
        $boozePlz = "Je woont in $countryName en bent $currentAge. Je mag hier alle drankjes drinken";
    }
    else if ($currentAge >= 17 && ($countryName == "Cyprus" || $countryName == "België"))
    {
        $boozePlz = "Je woont in $countryName en bent $currentAge. Je mag hier alle drankjes drinken";
    }
    else if ($currentAge >= 18 && $currentAge <= 19 && $countryName == "Zweden")
    {
        $boozePlz = "Je woont in $countryName en bent $currentAge. Je mag hier zwakke drankjes drinken";
    }
    else
    {
        $boozePlz = "Helaas, geen drankjes voor jou";
    }
}
elseif ($currentAge <= 15 )
{
    $boozePlz = "Ga naar mama toe";
}
elseif ($currentAge <= 18)
{
    if($countryName == "België")
    {
        $boozePlz = "Je woont in $countryName en bent $currentAge. Je mag hier alle zwakke drankjes drinken";
    }
    else if ($countryName == "Zweden" && $currentAge >= 18)
    {
        $boozePlz = "Je woont in $countryName en bent $currentAge. Je mag hier alle zwakke drankjes drinken";
    }
    else
    {
        $boozePlz = "Helaas, geen drankjes voor jou";
    }
}
else
{
    $boozePlz = "Hier mag je niet komen";
}
?>

<p><?php echo $boozePlz ?>
</p>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>
            <a href="../index.php">Home</a>
        </li>
    </ul>
</aside>
<main id="wrapper">
</main>
</body>
</html>