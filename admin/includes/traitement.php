<?php
    require_once('bdd.inc.php');

    if(isset($_GET['delete'])){

        // traitement.php?delete & news = id_de_la_news

        // $_GET['delete']
        // $_GET['news'] = id_de_la_news

        $id = (INT)$_GET['news'];
        $delete = $bdd->query('DELETE FROM news WHERE id=' . $id);
        header('Location: ../index.php?actualites');
    }

    else if(isset($_GET['modifActu'])){

        var_dump($_FILES);

        /* requête d'insertion de données */
        $requete = $bdd->prepare('INSERT INTO news (title, img, alt, text, day, date) VALUES (:title, :img, :alt, :text, :day, :date)');
        $requete->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
        $requete->bindParam(':img', $_FILES['img']['tmp_name'], PDO::PARAM_STR);
        $requete->bindParam(':alt', $_POST['alt'], PDO::PARAM_STR);
        $requete->bindParam(':text', $_POST['text'], PDO::PARAM_STR);
        $requete->bindParam(':day', $_POST['day'], PDO::PARAM_STR);
        $requete->bindParam(':date', $_POST['date']);

        $requete->execute();

        /* récupérer le dernier id */
        $requete2 = $bdd->query('SELECT MAX(id) FROM news');
        $dernierIdEnTableau = $requete2->fetch();
        $dernierId = $dernierIdEnTableau[0];

        /* générer le chemin de l'image */
        $format = strrchr($_FILES['img']['name'], '.');
        $chemin = '../assets/img/news/actualite' . $dernierId . $format;

        /* modifier le nom de l'image en bdd */

        $requete3 = $bdd->prepare('UPDATE news SET img=:img WHERE id=' . $dernierId);
        $requete3->bindParam(':img', $chemin, PDO::PARAM_STR);
        $requete3->execute();

        /* déplacer le fichier */
        move_uploaded_file($_FILES['img']['tmp_name'], '../' . $chemin);

        header('Location: ../index.php?actualites');
    }
?>