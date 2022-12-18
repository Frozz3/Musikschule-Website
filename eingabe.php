<?php

   if ($_POST['bereich'] != "" && $_POST['bereich'] != "xx" && $_POST['inhalt'] != "")
   {
		$date = date ("d.m.Y");
        $sql= "update `seiteninhalt` set `inhalt` = '{$_POST['inhalt']}', `datum` = '{$date}' where `bereich` = '{$_POST['bereich']}';";

        $db_link=mysqli_connect ("localhost:3307", "root", "", "adminbeispiel");
        mysqli_select_db ($db_link, "adminbeispiel");
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