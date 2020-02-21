<?php
/**
 * User: Sander de Jong
 * Date:7-2-2020
 * Time: 12:23
 * FIle: index.php
 */
?>
<!DOCTYPE html>
<html lang ="en">
<link href=style.css type=text/css rel="stylesheet">
<head>
    <meta charset="utf-8">
    <title>2.2</title>
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
</main>
<?php
$text1 = "Hallo";
$text2 = "tocht een makkelijke taal";
$text3 = "wat is";
$text4 = "PHP";
$text5 = "nooit gedacht dat";
$text6 = "de ingewikkelde installatie";
$text7 = "Fijn toch?";

   echo ("<h1>Taak 2</h1>");
    echo ("<p>$text1 $text3 $text4 $text2</p>");
    echo ("<p>$text3 $text6 $text7</p>");
    echo ("<p>$text5 $text4 $text2 $text3</p>");
    ?>
<?php
echo ("<h1>Taak 3</h1>");
echo ("<p>$text1, $text3 $text4, ondanks $text6 $text2?</p>");
echo ("<p>$text7 $text5 $text4 eigenlijk $text2 blijkt te zijn?</p>");

?>
</body>
</html>
