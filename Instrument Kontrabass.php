
<!DOCTYPE html>
<html>

<head>
    <title>Instrument Kontrabass</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link href="instrumente.css" type="text/css" rel="stylesheet">

<title>Instrumente</title>

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
    <main>
    <nav class="menulinks">
            <a href="Instrumente.php">Gitarre</a> <br />  <br /> <br />
            <a href="Insturment Klavir.php">Klavier</a> <br /> <br /> <br />
            <a href="Instrument Geige.php">Geige</a>  <br /> <br /> <br />
            <a href="Instrument Akkordeon.php">Akkordeon</a> <br />  <br /> <br />
            <a href="Instrument Trompete.php">Trompete</a>   <br /> <br /> <br />
            <a href="Instrument Kontrabass.php">Kontrabass</a>  <br /> <br /> <br />

        </nav>
        <div >
            <img id="kontrabass" src="images/kontrabass.png" border="" height="" width="" alt="" />
        </div>



        <div id="textinst">
        <p>
        <?php
		$bereich = "Instrumente_Kontrabass";
		include 'ausgabe.php';
		?>



        </p>


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