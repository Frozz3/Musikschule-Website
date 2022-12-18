
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