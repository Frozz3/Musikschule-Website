<?php

	$db_link=mysqli_connect ("localhost:3307", "root", "", "anmeldung");
	mysqli_select_db ($db_link, "anmeldung");
	$sql = "SELECT * FROM `seiteninhalt`";
	$db_erg = mysqli_query ($db_link, $sql);

	while ($datensatz = mysqli_fetch_array ($db_erg, MYSQLI_ASSOC))
		if ($datensatz['bereich'] == $bereich)
			echo "<p>".$datensatz['inhalt']."</p>";

?>
