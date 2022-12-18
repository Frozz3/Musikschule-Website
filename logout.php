<?php

    session_start();
    session_destroy();

	echo '<h1>Admin Bereich</font></h1>';
    echo '<p>Logout erfolgreich!</p><br />';
	echo '<form id="formular" action="Startseite.php", method="post">';
			echo '<input type="submit" value="Zur&uuml;ck zur Startseite" />';
		echo '</form>';

?>
