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

