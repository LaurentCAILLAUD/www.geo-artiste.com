<?php
require ('../controller/galleryViewController.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Galerie</title>
    <link href="../css/galleryView.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="../js/galleryView.js"></script>
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
                <li class="positionningLeft"><a href="musicView.php">Musiques</a></li>
                <li class="positionningLeft"><a href="textView.php">Textes</a></li>
                <li class="positionningLeft"><a href="">Galerie</a></li>
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

        <!-- Beginning of the block "pictureAlbumNav" -->
        <nav id="pictureAlbumNav">
            <ul id="pictureAlbumMenu">
                <?php foreach ($picturesAlbum as $pictureAlbumName => $pictureAlbumPicturesKey) : ?>
                <li><a href="galleryView.php?albumId=<?php echo $pictureAlbumName; ?>"><?php echo $pictureAlbumName; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <!-- End of the block "pictureAlbumNav" -->

        <?php if(isset($_GET['albumId'])) : ?>

            <!-- Beginning of the block "picturesContainer" -->
            <section id="picturesContainer">
                <figure id="picturesLeftControl">
                    <img src="../files/pictures/left-arrow.png">
                </figure>
                <figure id="picturesContent">
                    <img src="<?php echo $picturesAlbum[$_GET['albumId']][0]; ?>" id="slideShow">
                </figure>
                <figure id="picturesRightControl">
                    <img src="../files/pictures/right-arrow.png">
                </figure>
            </section>
            <!-- End of the block "picturesContainer" -->

        <?php else: ?>

            <!-- Beginning of the block "galleryWelcomeMessageContainer" -->
            <section id="galleryWelcomeMessageContainer">
                    <p>
                        Bienvenue sur la page de mes albums photos. Afin de consulter un de ceux-ci, veuillez le choisir à l'aide du menu
                        tournant présent juste au dessus.
                    </p>
            </section>
            <!-- End of the block "galleryWelcomeMessageContainer" -->

        <?php endif; ?>

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