<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./template/header.css">
    <script src="./js/script.js" defer></script>

    <title>Document</title>
</head>

<body>
    <header>
        <section id="menu">
            <ul>
                <a href="index.php?action=home"><img id="logo" src="./public/images/logo.png" alt="Logo"></a>
                <li><a href="index.php?action=home">Accueil</a></li>
                <li><a href="index.php?action=numerisation">Numérisation/restauration</a></li>
                <li><a href="index.php?action=CD">CD/Films</a></li>
                <li><a href="index.php?action=videophoto">Vidéos/photos</a></li>
                <li><a href="index.php?action=reportage">Reportage</a></li>
                <li id="devis"><a href="index.php?action=devis">Devis</a></li>
            </ul>
        </section>
    </header>
    <main>
        <div class="float">
            <video id="background-video" autoplay loop muted>
                <source src="./public/videos/montage.mp4" type="video/mp4">
            </video>
        </div>
    </main>
</body>

</html>