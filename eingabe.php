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

   if ($_POST['bereich'] != "" && $_POST['bereich'] != "xx" && $_POST['inhalt'] != "")
   {
		$date = date ("d.m.Y");
        $sql= "update `seiteninhalt` set `inhalt` = '{$_POST['inhalt']}', `datum` = '{$date}' where `bereich` = '{$_POST['bereich']}';";

        $db_link=mysqli_connect ("localhost:3307", "root", "", "anmeldung");
        mysqli_select_db ($db_link, "anmeldung");
        mysqli_query ($db_link, $sql);

		echo "<p>Eintrag wurde gespeichert!</p><br />";
		echo '<form id="formular" action="Adminbereich.php" , method="post">';
			echo '<input type="submit" value="Zur&uuml;ck" />';
		echo '</form>';
		echo '<form id="formular" action="Startseite.php" , method="post">';
			echo '<input type="submit" value="Startseite" />';
		echo '</form>';

   }
   else
	{
		echo "<p>Bitte alle Felder ausf&uuml;llen!</p><br />";
		echo '<input onclick="history.back()" type="button"  value="Zur&uuml;ck">';
	}	

?>
<footer class="blockLook">
        
        <div id="text">
        <p>Private Musikschule T&uuml;bingen</p> 
        <p>Telefon: 07071 2046100</p>
        <p>Adresse: Frischlinstraße 4, 72074 Tübingen</p>
        <small><a href="impressum.html">Impressum</a> <a href="Datenschutz.html">Datenschutz</a></small>
    </div>
    </footer>