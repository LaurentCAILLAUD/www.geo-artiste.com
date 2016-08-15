<?php
require('../controller/musicViewController.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Musiques</title>
    <link href="../css/musicView.css" rel="stylesheet" type="text/css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
    <script src="../js/musicView.js" type="text/javascript"></script>
</head>
<body>

<!-- Beginning of the block "mainWrapper" -->
<div id="mainWrapper">

    <!-- Beginning of the block "mainHeader" -->
    <header id="mainHeader">
        <img src="../files/pictures/logo-geo.png" alt="Logo Geo" title="logo-geo">

        <!-- Beginning of the block "mainNav -->
        <nav id="mainNav">
            <ul id="mainMenu">
                <li class="positionningLeft"><a href="../index.html">Accueil</a></li>
                <li class="positionningLeft"><a href="aboutView.html">A propos</a></li>
                <li class="positionningLeft"><a href="">Musiques</a></li>
                <li class="positionningLeft"><a href="textView.php">Textes</a></li>
                <li class="positionningLeft"><a href="galleryView.php">Galerie</a></li>
                <li class="positionningLeft"><a href="pressView.php">Presse</a></li>
                <li class="positionningLeft"><a href="contactView.html">Contact</a></li>
                <div class="clear"></div>
            </ul>
        </nav>
        <!-- End of the block "mainNav" -->

    </header>
    <!-- End of the block "mainHeader" -->

    <!-- Beginning of the block mainContent" -->
    <div id="mainContent">

        <!-- Beginning of the block "trackNav" -->
        <nav id="trackNav">
            <ul id="trackMenu">
                <?php foreach ($tracksData as $key => $trackData) : ?>
                    <li><?php echo $trackData['titleTrack']; ?></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <!-- End of the block "trackNav" -->

        <!-- Beginning of the block "trackInformationContainer" -->
        <section id="trackInformationContainer">
            <p class="howToDoParagraph">
                Bienvenue sur la page d'écoute de mes titres musicaux. Afin d'écouter un de mes titres, veuillez le choisir dans le
                menu déroulant juste au dessus et après avoir cliqué sur celui-ci vous accèderez aux différents contrôles permettant
                son écoute.
            </p>
        </section>
        <!-- End of the block 'trackInformationContainer' -->

    </div>
    <!-- End of the block "mainContent" -->

    <!-- Beginning of the block "mainFooter" -->
    <footer id="mainFooter">

        <!-- Beginning of the block "contactInformations" -->
        <section id="contactInformations" class="positionningLeft">
            <p>
                <span class="red"> Geo</span>
            </p>
            <p>
                <span class="red">Numéro sociétaire SACEM:</span> 00422957156
            </p>
            <p>
                <span class="red">Téléphone:</span> 06.86.47.21.64
            </p>
            <p>
                <span class="red">Email:</span> geo-artiste@hotmail.com
            </p>
        </section>
        <!-- End of the block "contactInformations" -->

        <!-- Beginning of the block "variousInformations" -->
        <section id="variousInformations" class="positionningLeft">
            <figure>
                <img src="../files/pictures/logo-sacem.png" alt="Logo SACEM" title="logo-sacem.png">
            </figure>
            <p>
                <span class="red">Crédit photos:</span>
            </p>

            <p>
                <a href="http://www.ipernity.com/misstigri" target="_blank">Adeline C.</a>
            </p>
        </section>
        <!-- End of the block "variousInformations" -->

        <!-- Beginning of the block "realizationInformations" -->
        <section id="realizationInformations" class="positionningLeft">
            <p>
                <span class="red"> Site réalisé par:</span>
            </p>
            <p>
                <a href="http://www.lcgraphandweb.com" target="_blank">LC Graph & Web</a>
            </p>
        </section>
        <!-- End of the block "realizationInformations" -->

        <div class="clear"></div>
        <p class="copyright">
            @2016 - Geo - Tous droits réservés.
        </p>
    </footer>
    <!-- End of the block "mainFooter" -->

</div>
<!-- End of the block "mainWrapper" -->

</body>
</html>
