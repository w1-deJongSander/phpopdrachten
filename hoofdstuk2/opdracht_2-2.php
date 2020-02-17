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
$text1 = 'Hallo';
$text2 = 'een makkelijke taal';
$text3 = 'toch zon makkelijke taal';
$text4 = 'wat is';
$text5 = 'PHP';
$text6 = 'Nooit gedacht dat';
$text7 = 'De installatie is best ingewikkeld';
$text8 = 'Fijn';
$text9 = '?';
$text10 = '.';
$text11 = ',';
$text12 = '<br>';
$text13 = 'is';
$text14 = 'Vind je niet';
$text15 = 'toch';

echo $text1 . $text11 . $text4 . $text5 . $text15 . $text2 . $text11
?>

</body>
</html>
