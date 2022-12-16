
<HTML>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Formula.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="img"><img src="images/geige.png" alt="geige"></div>
        <div id="header">
            <h1>Private Musikschule T&uuml;bingen</h1>
        </div>
        <nav class="menu">
            <a href="Startseite.php">Start</a> <a href="Instrumente.php">Instrumente</a> <a href="Unterricht.php">Unterricht</a> <a href="Kontakt.php">Kontakt</a>
            
        </nav>
    </header>

    <main>
        <div id="form" class="blockLook">
            <h2> Anmeldung für den Instrumentalunterricht</h2>

            
            
            <form action="Formula.php" method="GET">
                <label for="first">Vorname</label>
                <input id="first" type="text" name="vorname" value="<?php
                if (isset ($_GET['vorname'])) 
                {
                    echo $_GET['vorname'];
                }
                if (empty($_GET["vorname"]))
                {
                    Echo "Name is required";
                }
                ?>" />
                <br/>
                <br/>
                <label for="last">Nachname</label>
                <input id="last" type="text" name="nachname" value="<?php
                 if (isset ($_GET['nachname'])) 
                 {
                     echo $_GET['nachname'];
                 }
                 if (empty($_GET["nachname"]))
                 {
                     Echo "Name is required";
                 }
                ?>" />
                <br />
                <br />
                <label for="birthday">Geburtsdatum</label>
                <input id="birthday" type="date" name="datum" value="<?php
                if (isset ($_GET['datum'])) 
                {
                    echo $_GET['datum'];
                }
                ?>"
                <?php
                if(empty($_GET['datum']))
                {
                    echo "\nDate is requird";
                } 
                ?>/>
                <br />
                <br />
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="<?php
                if (isset ($_GET['email'])) 
                {
                    echo $_GET['email'];
                }
                if (empty($_GET["email"]))
                {
                    Echo "Email is required";
                }
                ?>" />
                <br />
                <br />
                <label for="phone">Telefon</label>
                <input id="phone" type="tel" name="tel" value="<?php
                if (isset ($_GET['tel'])) 
                {
                    echo $_GET['tel'];
                }
                if (empty($_GET["tel"]))
                {
                    Echo "Telefonnumber is required";
                }
                ?>" />
                <br />
                <br />
                <label for="gender"> Geschlecht </label>
                <input id="male" type="radio" name="gender"
                <?php if (isset($gender) && $gender=="male")?>
                >
                <label for="male">Männlich</label>
                <input type="radio" name="gender"
                <?php if (isset($gender) && $gender=="female")?>
                >
                <label for="female">Weiblich</label>

                <?php
                if (empty($_GET["gender"])) {
                    echo "\tGender is required";
                  } else {
                    echo ($_GET["gender"]);
                  }
                ?>
                <br />
                <br />
                <label for="address">Adresse</label>
                <input id="adress" type="text" name="adresse" value="<?php
                if (isset ($_GET['adresse'])) 
                {
                    echo $_GET['adresse'];
                }
                if (empty($_GET["adresse"]))
                {
                    Echo "Adresse is required";
                }
                ?>" />
                <br />
                <br />
                <label for="instrument">Instrument</label>
                <select id="instrument" name="instrument">
                    <option value="Gitarre"<?php if ($_GET['instrument'] == 'Gitarre') { echo 'selected'; } ?>>Gitarre</option>
                    <option value="Klavir"<?php if ($_GET['instrument'] == 'Klavier') { echo 'selected'; } ?>>Klavir</option>
                    <option value="Geige"<?php if ($_GET['instrument'] == 'Geige') { echo 'selected'; } ?>>Geige</option>
                    <option value="Akkordeon"<?php if ($_GET['instrument'] == 'Arkkordeon') { echo 'selected'; } ?>>Akkordeon</option>
                    <option value="Trompete"<?php if ($_GET['instrument'] == 'Trompete') { echo 'selected'; } ?>>Trompete</option>
                    <option value="Kontrabass"<?php if ($_GET['instrument'] == 'Kontrabass') { echo 'selected'; } ?>>Kontrabass</option>
                  </select>
                <br />
                <br />

                <label for="uhrzeit">Dauer</label>
                  <select id="uhrzeit" name="uhrzeit">
                      <option value="45m" <?php if ($_GET['uhrzeit'] == '45m') { echo 'selected'; } ?>>45 Minuten</option>
                      <option value="60m" <?php if ($_GET['uhrzeit'] == '60m') { echo 'selected'; } ?>>60 Minuten</option>
                      <option value="90m" <?php if ($_GET['uhrzeit'] == '90m') { echo 'selected'; } ?>>90 Minuten</option>
                    </select>

                <br/>
                <br/>
                <label for="frage">Weitere Anmerkungen</label>
                <textarea id="frage"></textarea>
                <br />
                <br />
                <br />-
                <br />
                <div id="buttons">
                    <input type="submit" />
                    <input type="reset" />
                </div>
              </form>
        </div>
    </main>
    <footer class="blockLook">
        <div id="text">
        <p>Private Musikschule T&uuml;bingen</p> 
        <p>Telefon: 07071 2046100</p>
        <p>Adresse: Frischlinstraße 4, 72074 Tübingen</p>
        <small><a href="impressum.html">Impressum</a> <a href="Datenschutz.html">Datenschutz</a></small>
    </div>
    </footer>
</body>

</html>



<?php
 echo"<p> Danke für ihre Einsendung</p>";
$handle = fopen ("Daten.txt", "a");
fwrite ($handle, @$_GET ['vorname']);
fwrite ($handle, "\r\n");
fwrite ($handle, @$_GET ['nachname']);
fwrite ($handle, "\r\n");
fwrite ($handle, "\r\n");
fwrite ($handle, @$_GET ['datum']);
fwrite ($handle, "\r\n");
fwrite ($handle, $_GET['email']);
fwrite ($handle, "\r\n");
fwrite ($handle, $_GET['tel']);
fwrite ($handle, "\r\n");
fwrite ($handle, $_GET['gender']);
fwrite ($handle, "\r\n");
fwrite ($handle, $_GET['adresse']);
fwrite ($handle, "\r\n");
fwrite ($handle, $_GET['instrument']);
fwrite ($handle, "-----------------------");
fclose ($handle);

?>
</BODY>
</HTML>