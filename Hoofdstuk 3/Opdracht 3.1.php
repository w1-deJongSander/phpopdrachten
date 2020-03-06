<?php
/**
 * User: Sander de Jong
 * Date:7-2-2020
 * Time: 12:23
 * FIle: index.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href=/css/style.css type=text/css rel="stylesheet">
    <meta charset="utf-8">
    <title>3.1</title>
</head>
<header>Opdracht 3.1</header>
<body>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $evenement = "<u>Elfstedentocht</u>";
    $evenementFries = "<u>Alvestêdetocht</u>";
    $lengtebaan = "<u>200</u>";
    $tocht = "<u>schaatstocht</u>";
    $ijs = "<u>natuurijs</u>";
    $organisator = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $hoofdstad = "<u>Leeuwarden</u>";
    $provincie = "<u>Friesland</u>";
    $kerenGereden = "<u>15</u>";
    $startjaar = "<u>1909</u>";
    $perJaar = "<u>1</u>";

    $verhaal1 = "De $evenement  (Fries . $evenementFries)   is een  $lengtebaan kilometer lange $tocht over $ijs
        die wordt  georganiseerd door de $organisator. $hoofdstad de hoofdstad van $provincie,
        is start- en aankomstplaats. De $evenement is inmiddels $kerenGereden maal gereden
         en werd voor het eerst in $startjaar gereden  en wordt maximaal $perJaar keer per winter
         gehouden";
    echo ("<h1>Taak 1</h1>");
    echo ("<p>$verhaal1</p>");

    $verhaal2 = "De " . $evenement .  " (Fries: " . $evenementFries . ") is een " . $lengtebaan . " kilometer lange " . $tocht . " over " . $ijs . " die wordt
    georganiseerd door de " . $organisator .". " . $hoofdstad . ",  de hoofdstad van " . $provincie . ",  is start- en
    aankomstplaats. De " . $evenement . " is inmiddels " . $kerenGereden . " maal
    verreden en werd voor het eerst in " . $startjaar . " gereden en wordt
    maximaal . $perJaar . keer per winter gehouden.";
    echo ("<h1>Taak 2</h1>");
    echo ("<p>$verhaal2</p>");
    ?>
</main>
</body>
</html>
