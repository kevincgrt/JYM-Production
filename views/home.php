<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Images/logo.png" />
    <link rel="stylesheet" href="./public/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="./public/js/script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="./public/images/logo.png"/>
    <title>Accueil</title>
</head>

<body>
    <?php require "./template/header.php"; ?>
    <div class="container text-center"
        style=" max-width: 100%;margin:0;padding:0;padding-top:100px;padding-bottom:100px;justify-content: center;">
        <div class="row row-cols-auto" style="justify-content:center;justify-content:space-evenly;">
            <div class="col"
                style="background-color:rgba(57, 109, 154, 0.680);width: 26vw;height: 50vh;margin-left: 25px;">
                <div id="video"><img id="video-photo" alt="gif" style="width: 150px;"
                        src="./public/images/5884-video-movie-unscreen.gif" /></div>
                <p style="color: white;">
                    JYM Production vous propose ses services de prises de photo et vidéo pour mariage, vidéo
                    promotionnelle, et bien d’autres.
                    Nous sommes une entreprise de production photo et vidéo.
                </p>
            </div>
            <div class="col" style="background-color:rgba(255, 199, 102, 0.680);width: 26vw;height: 50vh;">
                <div id="video"><img id="reportage" alt="gif" style="width: 150px;"
                        src="./public/images/76118-video-camera-unscreen.gif" /></div>
                <p>
                    L’entreprise JYM Production est aussi spécialiste du reportage pour diverses occasions. Faites
                    appel
                    à nos compétences en reportage.
                </p>

            </div>
            <div class="col" style="background-color:rgba(57, 109, 154, 0.680);width: 26vw;height: 50vh;">
                <div id="video"><img id="restauration" alt="gif" style="width: 150px;"
                        src="./public/images/9105-film-unscreen.gif" /></div>
                <p style="color: white;">
                    Vous avez des films stockés sur un vieux support ? Confiez les nous pour restitution et
                    numérisation
                    de cassette vidéo ou bien VHS.
                    Conservez vos souvenirs et revivez les avant qu’ils ne s’effacent.
                </p>
            </div>
        </div>
    </div>
    </div>
    <div class="bandeau-1">
        <h1>Tout travail déposé est traité sur place, sans intermédiaire. <br>
            Vous pouvez en connaître l'avancée, à tout moment </h1>
    </div>
    <div class="container-actualite">
        <h2>Notre actualité</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="margin-right: -20vw;">
                    <img id="sinclair" src="./public/images/157014782_3467617663348182_242875297347296530_n.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h3 class="h3-sinclair">Numérisation de Mini DV pour Sinclair</h3>
                    <p>​Le chanteur Sinclair est venu déposer ses cassettes mini DV pour numérisation de ses
                        concerts !
                    </p>
                    <a href="#"><button type="button" class="btn btn-outline-primary">En savoir plus</button></a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6" style="margin-right: -20vw;">
                    <img id="canon" src="./public/images/canonion.jpg" alt="apareil photo canon">
                </div>
                <div class="col-lg-6">
                    <h3 class="h3-canon">Nouvel Appareil Canon ION VF-50</h3>
                    <p>Nouvel appareil pour récupération de photos sur Canon ION RC-260, disquette VF-50.</p>
                    <a href="#"><button type="button" class="btn btn-outline-primary">En savoir plus</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-video">
        <div class="h3">
            <h3>Découvrez notre travail en image</h3>
        </div>
        <video id="background-video" autoplay loop muted width="1000" height="600" controls>
            <source src="./public/images/travailenimage.mp4" type="video/mp4">
        </video>
    </div>
    <div class="content">
        <h4>​Numérisation de Cassettes Vidéo à Arles & Montpellier</h4>

        <p id="p1"><strong>​JYM PRODUCTION</strong> est une jeune entreprise créée récemment, mais avec un
            savoir-faire depuis 2015.</p>

        <p id="p2">Nous sommes une entreprise <strong>passionnée de vidéo</strong> et ayant pour but de
            <strong>partager sa technique</strong> et sa <strong>passion</strong>
            au plus grand nombre.
        </p>

        <p id="p3">Je propose aux personnes de sauvegarder leur patrimoine qui se trouve sur supports,
            tels que vieux films en <strong>8 mm</strong>, <strong>super 8</strong>, <strong>9,5
                mm</strong> , <strong>16 mm</strong>, et analogiques comme
            <strong>VHS</strong>, <strong>VHS-C</strong>, <strong>HI 8</strong>, <strong>Mini DV</strong>
            et <strong>photos</strong> , <strong>diapositives</strong>  et<strong> négatifs</strong> .
        </p>

        <p id="p4">Nous nous situons à <strong>Arles</strong>, près de Nîmes, Avignon ou bien Montpellier ainsi que
            dans toutes les Bouches
            du Rhône.</p>
    </div>
    <div class="grid">
        <div class="element1"></div>
        <div class="element2"></div>
        <div class="element3"></div>
    </div>
    <hr>
    <h2 id="feria">Quelques photos prises lors de la <a
            href="https://www.arlestourisme.com/fr/d%C3%A9tails.html?=La+feria+s%27expose&dt=0&ident=6072711">FERIA de
            pâques
            d'Arles 2023</a>.
    </h2>
    <div id="gallery" class="row mx-auto" style="padding-right: 100px; padding-left: 110px;">
        <div class="col-md-4 p-1">
            <div class="thumbnail">
                <img src="./public/images/feria/MG_0191.jpg">
            </div>
            <div class="thumbnail pt-2">
                <img src="./public/images/feria/MG_0220.jpg">
            </div>
            <div class="thumbnail pt-2">
                <img src="./public/images/feria/MG_0104.jpg">
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="thumbnail">
                <img src="./public/images/feria/RMA8PB3.jpg">
            </div>
            <div class="thumbnail pt-2">
                <img src="./public/images/feria/R4KD033 (1).jpg">
            </div>
            <div class="thumbnail pt-2">
                <img src="./public/images/feria/MG_0137.jpg">
            </div>
            <div class="thumbnail pt-2">
                <img src="./public/images/feria/P4082576.JPG">
            </div>
        </div>
        <div class="col-md-4 p-1 pb-5">
            <div class="thumbnail">
                <img src="./public/images/feria/MG_0091.jpg">
            </div>
            <div class="thumbnail pt-2">
                <img src="./public/images/feria/P4092630.JPG">
            </div>
            <div class="thumbnail pt-2">
                <img src="./public/images/feria/MG_0257.jpg">
            </div>
        </div>
        <button id="me-contacter" type="button" class="btn btn-primary btn-lg w-25 mx-auto">Me contacter</button>
    </div>
    <div class="container-restaurer">
        <h2 id="ancien">Restauration de films anciens</h2>
        <h4 id="process">Pour récupérer vos images, le processus ce décompose en <strong style="color:red;">3 étapes
            </strong>:</h4>
        <div class="row mx-auto"
            style="justify-content:space-between;background-color:#72CEE8;margin-top:50px;padding-bottom:20px;">
            <div class="col-md-2 p-1">
                <ul>
                    <li><img id="numerisation" src="./public/images/dispositif-de-numerisation.png" alt="numérisation">
                        <h4>Numériser</h4>
                    </li>

                </ul>
            </div>
            <div class="col-md-2 p-1 ">
                <ul>
                    <li><img id="arrow" src="./public/images/up-arrow.png" alt="arrow">
                    </li>
                </ul>
            </div>
            <div class="col-md-2 p-1 ">
                <ul>
                    <li><img id="restaurer" src="./public/images/management.png" alt="restaurer">
                        <h4>Restaurer</h4>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 p-1 ">
                <ul>
                    <li><img id="arrow" src="./public/images/up-arrow.png" alt="arrow">
                    </li>
                </ul>
            </div>
            <div class="col-md-2 p-1">
                <ul>
                    <li><img id="transferer" src="./public/images/transferer-des-donnees.png" alt="transferer">
                        <h4>Transférer</h4>
                    </li>
                </ul>
            </div>
        </div>
        <p id="sauvegarde">La sauvegarde de vos images qui se trouvaient sur ces anciens supports se fait sur support
            numérique moderne (DVD, Blu Ray, Clé USB ou même disque dur).</p>
    </div>
    <div class="devis">
        <h3>Pour un devis personnalisé ou toutes autres questions</h3>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-lg w-25 mx-auto">Me contacter</button>
        </div>
    </div>
    <div class="avisclients">

        <h2 id="avis">Les derniers avis de nos clients</h2>
        <div class="container-avis">

            <div class="row justify-content-center">
                <div id="avis1" class="col-md-6 w-25">
                    <div id="nomavis">
                        <strong>utilisateur qui va rentrer l'avis dans le form</strong>
                    </div>
                    <p id="pavis"></p>
                </div>

                <div id="avis2" class="col-md-6 w-25">
                    <div id="nomavis">
                        <strong>OSCARCOLOMARSANTAMAR ⭐⭐⭐⭐⭐</strong>
                    </div>
                    <p id="pavis">
                        ​Nous avons confié à Jym Production la réalisation d'un film de présentation d'une nouvelle
                        activité.
                        Topissime, on nous a écoutés et compris, le résultat est bluffant, au delà de nos attentes. Nous
                        recommandons sans hésiter.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">

                <div id="avis3" class="col-md-6 w-25">
                    <div id="nomavis">
                        <strong>Guy Criaud ⭐⭐⭐⭐⭐</strong>
                    </div>
                    <p id="pavis">
                        ​Bonjour,
                        Je suis entèrement satisfait des prestations de JYM PRODUCTION.
                        Rapidité d'exécution pour un transfert de cassettes vidéo en clé USB.Déposé la veille,retiré le
                        lendemain.
                        Trés bien équipé pour tous travaux de transfert de vos souvenirs ,
                        le technicien sympa saura vous expliquer les opérations pour un résultat sans faute.
                        J'invite tous les porteurs de souvenirs sur anciens supports à moderniser ,
                        sécuriser et déposer ceux-ci en vous rendant chez ce professionnel compétent.
                        Bien cordialement.
                    </p>
                </div>

                <div id="avis4" class="col-md-6 w-25">
                    <div id="nomavis">
                        <strong>Julien DUNAND ⭐⭐⭐⭐⭐</strong>
                    </div>
                    <p id="pavis">
                        ​Pour un cadeau de Noël, je voulais restaurer les vieilles cassettes vidéo d'un proche
                        auxquelles il tient beaucoup.
                        Non seulement, j'ai été très bien informé sur la procédure,
                        mais en plus, le service est vraiment rendu avec beaucoup de professionalisme.
                        Le prix est plus qu'honnête pour un accompagnement autant qualitatif. Merci ⭐⭐⭐⭐⭐ je recommande
                        JYM PRODUCTION.
                    </p>
                </div>
            </div>
            <button id="buttonavis" type="button" class="btn btn-primary btn-lg w-25 mx-auto">Laissez nous un avis !</button>
        </main>
        
        <footer>
            <?php require "./template/footer.php"; ?>
        </footer>
</body>

</html>