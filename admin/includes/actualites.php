<?php
    /*
        - connexion base de données
        - CRUD :
            * READ : affichage des actus => tableau
            * CREATE : insertion de données
            * UPDATE : modification de données
            * DELETE : suppression de données
    */

    $newsBdd = $bdd->query('SELECT * FROM news');
?>

<div class="row">
    <div class="col-12">
        <h2 class="text-center">Actualités</h2>
        
    </div>

    <div class="col-12">
        <table class="table table-striped table-hover" id="tableau-actus">
            <thead>
                <th class="text-center">ID</th>
                <th class="text-center">Texte</th>
                <th class="text-center">Titre</th>
                <th class="text-center">Image</th>
                <th class="text-center">Jour</th>
                <th class="text-center">Date</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                <?php while($news = $newsBdd->fetch()){ ?>
                <tr>
                    <td class="text-center"><?= $news['id'] ?></td>
                    <td class="text-center"><?= $news['text']?></td>
                    <td class="text-center"><?= $news['title']?></td>
                    <td class="text-center">
                        <img src="<?= $news['img']?>" alt="<?= $news['alt']?>">
                    </td>
                    <td class="text-center"><?= $news['day']?></td>
                    <td class="text-center"><?= $news['date']?></td>
                    <td class="text-center">
                        <a href="index.php?actualitesEditer=<?= $news['id'] ?>" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                        <a href="./includes/traitement.php?delete&news=<?= $news['id'] ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
            </tr>        
        <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="col-12 mx-auto text-center">
        <a href="index.php?actualitesEditer" class="btn btn-dark">Ajouter</a>
    </div>
</div>