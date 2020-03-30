<?php
/**
 * User: Sander de Jong
 * Date: 23-3-2020
 * Time: 16:50
 * File: form_data.php
 */
?>
<?php
include "Hoofdstuk 3/Includes/header.php"
?>
<body>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse:collapse;
        }
    </style>
    <h2>Uitwerking van <a href="../../Index.php"> PHP-opdrachten</a></h2>
<div class="box">

    <table>
        <tr>
            <th>Bedrijfsnaam:</th>
            <td><?php echo $_GET["Bedrijfsnaam"]; ?></td>
        </tr>
        <tr>
            <th>Voornaam:</th>
            <td><?php echo $_GET["Voornaam"]; ?></td>
        </tr>
        <tr>
            <th>Achternaam:</th>
            <td><?php echo $_GET["Achternaam"]; ?></td>
        </tr>
        <tr>
            <th>Telefoon:</th>
            <td><?php echo $_GET["Telefoon"]; ?></td>
        </tr>
        <tr>
            <th>E-mail:</th>
            <td><?php echo $_GET["E-mail"]; ?></td>
        </tr>
        <tr>
            <th>Bericht:</th>
            <td><?php echo $_GET["Bericht"]; ?></td>
        </tr>
    </table>


<?php
include "Hoofdstuk 3/Includes/footer.php"
?>