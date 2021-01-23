<?php
    require_once('./includes/bdd.inc.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Melvin DOUCET">
    <meta name="description" content="restaurant suédois en France | repas midi et soir">
    <meta name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer></script>
    <title>Måltidstid</title>
</head>
<body>
    
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-5 bg-dark text-white">
                    <h1>Måltidstid - espace administrateur</h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <style>
            li {
                list-style: none;
            }
            li a {
                text-decoration: none;
            }
        </style>

        <div class="container-fluid">
            <div class="row">
                <div class="col-2 bg-secondary" id="navAdmin">
                    <!-- nav -->
                    <ul class="ps-sm-0">
                        <li><a class="text-white" href="index.php"><i class="bi bi-house"></i>&nbsp;accueil</a></li>
                        <li><a class="text-white" href="index.php?actualites"><i class="bi bi-newspaper"></i>&nbsp;actus</a></li>
                        <li><a class="text-white" href="index.php?carte"><i class="bi bi-wallet2"></i>&nbsp;carte</a></li>
                        <li><a class="text-white" href="index.php?contact">contact</a></li>
                        <li><a class="text-white" href="../index.php"><i class="bi bi-arrow-90deg-up"></i> retour site</a></li>
                    </ul>
                </div>
                <div class="col-10"></div>
                    <!-- formulaires -->
                    <?php
                        if(isset($_GET['actualites'])){
                            include_once('./includes/actualites.php');
                        } else if(isset($_GET['actualitesEditer'])){
                            include_once('./includes/actualitesEditer.php');
                        }
                        else {
                            echo '<h2>Bonjour, patron !</h2><br><div><span id="date"></span> - <span id="horloge"></span></div>';
                        }
                    ?>
            </div>
        </div>
    </main>

<!--  -->
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
            <audio id="e4">
                <source src="./assets/audio/MIDI/e4.mid" type="audio/midi">
                <source src="./assets/audio/MP3/e4.mp3" type="audio/mpeg">
            </audio>
            <audio id="f4">
                <source src="./assets/audio/MIDI/f4.mid" type="audio/midi">
                <source src="./assets/audio/MP3/f4.mp3" type="audio/mpeg">
            </audio>
            <audio id="g4">
                <source src="./assets/audio/MIDI/g4.mid" type="audio/midi">
                <source src="./assets/audio/MP3/g4.mp3" type="audio/mpeg">
            </audio>
        </div>
</body>
</html>