<!DOCTYPE html>

<html lang="fr">

    <head>
        <?php require_once('./templates/head.php') ?>
    </head>

    <body class="d-flex flex-column justify-content-between min-vh-100">

        <div id="mes-audios">
            <audio id="a4">
                <source src="./assets/audio/MIDI/a4.mid" type="audio/midi">
                <source src="./assets/audio/MP3/a4.mp3" type="audio/mpeg">
            </audio>
            <audio id="b4">
                <source src="./assets/audio/MIDI/b4.mid" type="audio/midi">
                <source src="./assets/audio/MP3/b4.mp3" type="audio/mpeg">
            </audio>
            <audio id="c4">
                <source src="./assets/audio/MIDI/c4.mid" type="audio/midi">
                <source src="./assets/audio/MP3/c4.mp3" type="audio/mpeg">
            </audio>
            <audio id="d4">
                <source src="./assets/audio/MIDI/d4.mid" type="audio/midi">
                <source src="./assets/audio/MP3/d4.mp3" type="audio/mpeg">
            </audio>
        </div>

        <header>
            <?php require_once('./templates/header.html') ?>
        </header>
        
        <main class="container-fluid position-relative wrapper flex-grow-1">

            <div class="position-absolute top-0 end-0 p-2 text-end">
                <div class="taille-police-small">Nous sommes le&nbsp;: <span id="date"></span>.</div>
                <div class="taille-police-small">Il est&nbsp;: <span id="horloge"></span>.</div>
            </div>

            <?php
                if(isset($_GET['actualites'])){
                    require_once('./templates/actualites.php');
                } else if(isset($_GET['carte'])){
                    require_once('./templates/carte.php');
                } else if(isset($_GET['contact'])){
                    require_once('./templates/contact.php');
                }
                // else {require_once('./templates/footer.html');}
            ?>
        </main>
        
        <?php require_once('./templates/footer.html') ?>

    </body>

</html>