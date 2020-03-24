<?php

$courseName = 'JavaScript';
$teacherName = '';
/**Nederlands = Mr. van den Ende, Engels = Mr. Giesen, PHP = Mr. Saebu, Javascript = Mr. Evers, ASP = Mr. van Meer,
 Modelleren = Mr. van Bijnen, SQL = Mr. van de Wetering, Digitale Vaardigheden = Mvr. Pielage, Rekenen = Mr. van de Wetering,
 Loopbaan en Burgerschap = Mvr. de Ruijter en Computertekenen = Mr. van den Berg*/
switch($courseName)
{
    case "Nederlands":
        $teacherName = 'Jan-Chris van den Ende';
        break;
    case "Engels":
        $teacherName = 'Jan Giesen';
        break;
    case "PHP":
        $teacherName = 'Abu Saebu';
        break;
    case "JavaScript":
        $teacherName = 'Remco Evers';
        break;
    case "ASP":
        $teacherName = 'Martijn van Meer';
        break;
    case "Modelleren":
        $teacherName = 'Wim van Bijnen';
        break;
    case "Database SQL":
        $teacherName = 'Martijn van de Wetering';
        break;
    case "Digitale vaardigheden gevorderd":
        $teacherName = 'Larissa Pielage';
        break;
    case "Rekenen":
        $teacherName = 'Martijn van de Wetering';
        break;
    case "Loopbaan & Burgerschap":
        $teacherName = 'Paula de Ruiter';
        break;
    case "Computertekenen":
        $teacherName = 'Pieter van den Berg';
        break;
}

echo '<p>Voor het vak <b>'.$courseName.'</b> heb je <b>'.$teacherName.'</b> als docent.'
?>