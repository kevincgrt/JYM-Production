<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./public/js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="./public/js/script.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="./public/images/logo.png" />
    <link rel="stylesheet" href="./public/css/devis.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Devis</title>
</head>

<body>
    <?php require "./template/header.php"; ?>
    <div class="premierbandeau">
        <h1>Devis pour le transfert de vos films <strong>en HD</strong> sur clé USB pour votre TV</h1>
    </div>
    <div id="container" class="container-fluid bg-white">
        <div class="row align-items-center">
            <div class="col-8 order-2 order-md-1">
                <p>Besoin d'un conseil ou d'une aide pour utiliser ce formulaire ?</p>
                <h2 class="text-danger font-weight-bold"><img id="devisphone" src="./public/images/appel.png" alt=""> 04
                    90 91 43 26</h2>
            </div>
            <div class="col-4 order-1 order-md-2 text-right">
                <img id="devislogo" src="./public/images/logo.png" alt="Logo">
            </div>
        </div>
    </div>
    <div class="formatfilms">
        <h1>Formulaire de devis en ligne</h1>
        <form method="post" action="traitement.php" id="form">


            <input type="text" name="nom" id="nom" required placeholder="Nom :"><br><br>
            <input type="email" name="email" id="email" required placeholder="Email :"><br><br>
            <input type="tel" name="telephone" id="telephone" required placeholder="Telephone :">
                  <!--   <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>
      
    <div class="group">      
      <input type="text" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Email</label>
    </div> -->
            <br><br><br>


            <label id="prestation" for="prestation"><strong><span id="numero">1 </span>Cochez le format de vos
                    films</strong></label>



            <!-- HTML code for the radio buttons -->
            <input type="radio" name="prestation" id="prestation1" value="prestation1">
            <span>Super 8 à 18 i/s</span>
            <br>
            <input type="radio" name="prestation" id="prestation2" value="prestation2">
            <span>Super 8 à 24 i/s (rare)</span>
            <br>
            <input type="radio" name="prestation" id="prestation3" value="prestation3">
            <span>8 mm</span>
            <br>
            <input type="radio" name="prestation" id="prestation4" value="prestation4">
            <span>9,5 mm</span>
            <br>
            <input type="radio" name="prestation" id="prestation5" value="prestation5">
            <span>Pathé-Baby</span>
            <br>
            <input type="radio" name="prestation" id="prestation6" value="prestation6">
            <span>16 mm à 16 i/s</span>
            <br>
            <input type="radio" name="prestation" id="prestation7" value="prestation7">
            <span>16 mm à 24 i/s</span>
            <br><br><br>
            <label id="prestation" for="prestation"><strong><span id="numero">2 </span>Saisissez le nombre de
                    bobines</strong> (bobines de toutes tailles)</label>
            <input id="nombre" type="text" name="nom" placeholder="Saisir ici">
            <br><br><br>
            <label id="prestation" for="prestation"><strong><span id="numero">3 </span>Saisissez la longueur de vos
                    films</strong></label>
            <p id="p1"> En cas d'absence d'échelle graduée sur des bobines, veuillez utiliser ce tableau pour les correspondances :</p>

  <div class="row">
    <div id="testcolone" class="col-md-6 mx-auto">
      <div class="row">
        <div class="col-md-12">
          <p>Ø 7,5 cm pour 15 mètres</p>
        </div>
        <div class="col-md-12">
          <p>Ø 13 cm pour 60 mètres</p>
        </div>
        <div class="col-md-12">
          <p>Ø 21 cm pour 180 mètres</p>
        </div>
      </div>
    </div>
    <div id="testcolone2" class="col-md-6 mx-auto">
      <div class="row">
        <div class="col-md-12">
          <p>Ø 10 cm pour 30 mètres</p>
        </div>
        <div class="col-md-12">
          <p>Ø 18 cm pour 120 mètres</p>
        </div>
        <div class="col-md-12">
          <p>Ø 25 cm pour 240 mètres</p>
        </div>
      </div>
    </div>
  </div>
            <br><br><br>
            <input type="submit" name="envoyer" value="Envoyer">
        </form>
</body>

</html>