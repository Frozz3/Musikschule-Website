<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>

<body>


    <header>
        <div class="img"><img src="images/geige.png" alt="geige"></div>
        <div id="header">
            <h1>Private Musikschule T&uuml;bingen</h1>
        </div>
        <nav class="menu">
            <a href="Startseite.php">Start</a> <a href="login.php">Instrumente</a> <a href="Unterricht.php">Unterricht</a> <a href="Kontakt.php">Kontakt</a>
            
        </nav>
    </header>

<?php
	
	echo '<h1>Seiteninhalt bearbeiten</font></h1>';

	echo '<form id="formular" action="eingabe.php" , method="post">';
	echo '<br />';
	echo '<label for="bereich">Bereich:</label>';
	echo '<br />';
	echo '<select id="bereich" name="bereich">';
		echo '<option value="Startseite">Startseite</option>';
		echo '<option value="Angebot_Kinder">Angebot_Kinder</option>';
		echo '<option value="Angebot_Erwachsene">Angebot_Erwachsene</option>';
		echo '<option value="Angebot_Gesang">Angebot_Gesang</option>';
	echo '</select>';

	echo '<br />';
	echo '<br />';
	echo '<label for="inhalt">Neuer Inhalt des Bereichs:</label>';
	echo '<br />';
	echo '<textarea id="inhalt" name="inhalt" maxlength="1000"></textarea>';

	echo '<br /><br />';
	echo '<input type="submit" value="Inhalt speichern" />';
	echo '</form>';
?>
	<footer class="blockLook">
        
        <div id="text">
        <p>Private Musikschule T&uuml;bingen</p> 
        <p>Telefon: 07071 2046100</p>
        <p>Adresse: Frischlinstraße 4, 72074 Tübingen</p>
        <small><a href="impressum.html">Impressum</a> <a href="Datenschutz.html">Datenschutz</a></small>
    </div>
    </footer>

