
<!DOCTYPE html>
<html>

<head>
    <title>Unterricht</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link href="instrumente.css" type="text/css" rel="stylesheet">
   
</head>

<body>

<header>
    
        <div class="img"><img src="images/Geige.png" alt="geige"></div>
        <div id="header">
            <h1>Private Musikschule T&uuml;bingen</h1>
        </div>
        <nav class="menu">
            <a href="Startseite.php">Start</a> <a href="login.php">Instrumente</a> <a href="Unterricht.php">Unterricht</a> <a href="Kontakt.php">Kontakt</a>

        </nav>
    </header>

    <main>
       
  <div id="kinderU">
  <h2>Instrumentaler Unterricht f&uuml;r Kinder</h2> 
  <p class="unterrichtT">
     <?php
		$bereich = "Angebot_Kinder";
		include 'ausgabe.php';
		?>
  <br />
  <br />
  <br />
  <br />

  <a class="Ubutton" href="Anmeldung Unttericht.php"><b>Unterricht Buchen</b></a>
  </p>
  
  </div>
  
  <div id="erwachsenU">
  <h2>Instrumentaler Unterricht f&uuml;r Erwachsene</h2>
  <p class="unterrichtT">
  <?php
		$bereich = "Angebot_Erwachsene";
		include 'ausgabe.php';
		?>
  <br />
  <br />

  <a class="Ubutton" href="Anmeldung Unttericht.php"><b>Unterricht Buchen</b></a>

  </p>
  
  
  </div>
  
  <div id="gesangU">
  <h2>Gesangsunterricht</h2>
  <p>
    <?php
		$bereich = "Angebot_Gesang";
		include 'ausgabe.php';
		?>
  <br />
  <br />
  <br />

  <a class="Ubutton" href="Anmeldung Unttericht.php"><b>Unterricht Buchen</b></a>
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