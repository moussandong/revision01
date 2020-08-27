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
    }
    else if (($_POST['vendre'])){
        header('Location: vendre.html');  
        header('Location: louer.html');  
    }
        ?>

<!DOCTYPE html>
<html>

<head>

    <form method="POST" action="contact.php">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
        </div>
        </br>
        <div>
            <label for="prenom">prenom :</label>
            <input type="text" id="nom" name="prenom">
        </div>
        </br>
        <div>
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse">
        </div>
        </br>
        <div>
            <label for="ville">ville :</label>
            <input type="text" id="ville" name="ville">
        </div>
        </br>
        <div>
            <label for="CodePostal">code postal :</label>
            <input type="number" id="CodePostal" name="CodePostal">
        </div>
        </br>
        <div class="button">
            <input type="submit" name="envoyer">
         

       
    </form>

</html>