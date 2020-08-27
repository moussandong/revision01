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
    }
        ?>