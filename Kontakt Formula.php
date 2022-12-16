<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Formula kontakt.css">
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
    <main>
        <div id="form" class="blockLook">
            <h2> Kontakt Formula</h2>
            <form action="Formula.php" method="GET">
                <label for="first">Vorname</label>
                <input id="first" type="text" name="vorname" value=""/>
                <br />
                <br />
                <label for="last">Nachname</label>
                <input id="last" type="text" name="nachname" value=""/>
                <br />
                <br />
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value=""/>
                <br />
                <br />
                <label for="phone">Telefon</label>
                <input id="phone" type="tel" name="tel" value=""/>
                <br />
                <br />
                <label for="frage">Weitere Anmerkungen</label>
                <textarea id="frage"></textarea>
                <br />
                <br />
                <br />
                <br />
                <div id="buttons">
                    <input type="submit" />
                    <input type="reset" />
                </div>
                        </form>
  
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