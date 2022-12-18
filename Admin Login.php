
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
    session_start();

	echo '<h1>Admin Bereich</font></h1>';

    @$loginID = trim ($_POST['loginID']);
    @$kennwort = trim ($_POST['kennwort']);

    if (@$_POST['loginID'] != "" and @$_POST['kennwort'] != "")
    {
        $link = mysqli_connect ("localhost:3307", "root", "", "adminbeispiel");
        $sql = "SELECT count(*) AS eintraege FROM zugangsdaten WHERE loginID= '$loginID' AND kennwort= '$kennwort'";
        $erg = mysqli_query ($link, $sql);
        $datensatz = mysqli_fetch_array ($erg, MYSQLI_ASSOC);

        if ($datensatz ['eintraege'] >= 1)
        {
            echo '<p>Erfolgreich eingeloggt!</p>';
            $_SESSION ['eingeloggt'] = TRUE;
        }
		else {
			echo '<p>Falsche Eingabe!<br />Bitte erneut versuchen.</p>';
		}

    }

    if (@$_SESSION ['eingeloggt'])
    {
        echo date ("d.m.Y H:i:s");
        echo '<pre>'; 

		echo '<br />';
        echo '<form action="Adminbereich.php", method="post">';
        echo '<input type="submit" value="Inhalt bearbeiten" />';
        echo '</form>';
        echo '<br />';
		echo '<form action="logout.php", method="post">';
        echo '<input type="submit" value="Ausloggen" />';
        echo '</form>';


    }
	else {
		echo '<form action="Admin Login.php" , method="post">';
		echo '<p>Login-ID:<br /></p>';
		echo '<input type="text" name="loginID" size="20" />';
		echo '<p>Kennwort:<br /></p>';
		echo '<input type="password" name="kennwort" size="20" />';
		echo '<br /><br />';
		echo '<input type="submit" value="Einloggen" />';
		echo '</form>';

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