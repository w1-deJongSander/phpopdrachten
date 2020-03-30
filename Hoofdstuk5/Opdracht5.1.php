<?php
/**
 * User: Sander de Jong
 * Date: 23-3-2020
 * Time: 16:21
 * File: Opdracht5.1.php
 */
?>

<?php
include "Hoofdstuk 3/Includes/header.php"
?>

    <h1>RESTARIA KEES KROKET</h1>
    <br>
    <br>
    <p>Visstraat 12</p>
    <p>5211 DN 's-Hertogenbosch</p>
    <p>073 613 6720</p>
    <p>info@restariakeeskroket.nl</p>

    <form action="form_data.php"" method="get">
    <label>Bedrijfsnaam
    <input name="Bedrijfsnaam" type="text"><br>
    </label>
    <label>Voornaam
    <input name="Voornaam" type="text"><br>
    </label>
    <label>Achternaam
    <input name="Achternaam" type="text"><br>
    </label>
    <label>Telefoon
    <input name="Telefoon" type="number"><br>
    </label>
    <label>E-mail
    <input name="E-mail" type="email"><br>
    </label>
    <label>Bericht
    <input name="Bericht" type="text"><br>
    <input type="submit" name="verzenden" value="verzenden">
    </label>
    </form>





<?php
include "Hoofdstuk 3/Includes/footer.php"
    ?>