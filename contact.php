<?php


if (isset($_POST['envoyer'])) { ?>
    <!DOCTYPE html>
    <html>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom </th>
                <th>Prenom </th>
                <th>Adresse </th>
                <th>Ville</th>
                <th>Code postal </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= ($_POST['nom']) ?></td>
                <td><?= ($_POST['prenom']) ?></td>
                <td><?= ($_POST['adresse']) ?></td>
                <td><?= ($_POST['CodePostal']) ?></td>
            </tr>
        </tbody>
    </table>

    </html>

<?php
} else {
    $nom = "";
    $prenom = "";
    $adresse = "";
    $ville = "";
    $CodePostal = 0;
}


?>

<!DOCTYPE html>
<html>

<head>

    <form method="POST" action="index.php">
        <p>
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom" value="<?php echo $nom ?>" />
        </p>

        <p>
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $prenom ?>" />
        </p>
        <p>
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" value="<?php echo $adresse ?>" />
        </p>

        <p>
            <label for="ville">Ville</label>
            <input type="text" id="ville" name="ville" value="<?php echo $ville ?>" />
        </p>

        <p>
            <label for="CodePostal">Code postal</label>
            <input type="number" id="CodePostal" name="CodePostal" value="<?php echo $CodePostal ?>" />
        </p>



        <input type="submit" name="btSubmit" value="Envoyer" />
    </form>
    </body>

</html>