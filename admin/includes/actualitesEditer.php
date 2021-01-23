<h2 class="my-3 text-center">Ajouter / Modifier des données</h2>

<style>
    input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<div class="col-12 my-4">
    <form action="./includes/traitement.php?modifActu" method="post" enctype="multipart/form-data">
        <div class="form-group my-2">
            <label for="title">Titre</label>
            <input type="text" name="title" placeholder="Ex. : Repas de la Saint-Valentin" class="form-control" required>
        </div>

        <div class="form-group my-2">
            <label for="img">Image</label>
            <input type="file" name="img" class="form-control" required>
        </div>

        <div class="form-group my-2">
            <label for="alt">Texte alternatif</label>
            <input type="text" name="alt" placeholder="photo de repas" class="form-control" required>
        </div>

        <div class="form-group my-2">
            <label for="text">Texte</label>
            <input type="text" name="text" placeholder="description de l'événement" class="form-control" required>
        </div>

        <div class="form-group my-2">
            <label for="day" class="d-block">Jour (de la semaine)</label>
            <!-- <input type="text" name="day" class="form-control" required> -->
            <select name="day" class="form-control" id="day">
                <option value="lundi">lundi</option>
                <option value="mardi" disabled>mardi</option>
                <option value="mercredi">mercredi</option>
                <option value="jeudi">jeudi</option>
                <option value="vendredi">vendredi</option>
                <option value="samedi">samedi</option>
                <option value="dimanche">dimanche</option>
            </select>
        </div>

        <div class="form-group my-2">
            <label for="date">Date</label>
            <input type="text" name="date" placeholder="Ex. : 2021-01-19 14:13:00" class="form-control" required>
        </div>

        <div class="text-end my-4">
            <a href="index.php?actualites" class="mx-1" name="">Annuler</a>
            <button type="submit" class="btn btn-success mx-1">Valider</button>
        </div>
    </form>
</div>