<?php
require "../_include/inc_config.php";
$sql = "select * from contact";
//exécution d'une requete
$result = mysqli_query($link, $sql);
if (isset($_POST["btsubmit"])) {
    //échappe les caractères spéciaux du SQL
    $_POST = array_map("cb_mres", $_POST);
    extract($_POST);
    $sql = "insert into contact values (null,'$nom','$prenom','$adresse','$ville', '$CodePostal')";
    requeteSQL($link,$sql);
    header("location:contact.php");
} else {
    $nom = "";
    $prenom = "";
    $adresse = "";
    $ville = "";
    $CodePostal = 0;
   
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?php require "../_include/inc_head.php" ?>
    </head>

    <body>

        <h1>Liste des contacts</h1>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>adresse</th>
                    <th>ville</th>
                    <th>Code postal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    //htmlentities échappe les caractères spéciaux du HTML
                    $row = array_map("cb_htmlentities", $row);
                    extract($row);
                    echo "<tr>";
                    echo "<td>$co_id</td>";
                    echo "<td>$co_nom</td>";
                    echo "<td>$co_prenom</td>";
                    echo "<td>$co_adresse</td>";
                    echo "<td>$co_ville</td>";
                    echo "<td>$co_CP</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </body>

    </html>

<?php
}

?>

<!DOCTYPE html>
<html>

<head>

    <form method="POST" action="contact.php">
        <p>
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom" required value='<?= htmlentities($nom, ENT_QUOTES, "utf-8") ?>'>
        </p>

        <p>
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" required value='<?= htmlentities($prenom, ENT_QUOTES, "utf-8") ?>'>
        </p>
        <p>
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" required value='<?= htmlentities($adresse, ENT_QUOTES, "utf-8") ?>'>
        </p>

        <p>
            <label for="ville">Ville</label>
            <input type="text" id="ville" name="ville" required value='<?= htmlentities($ville, ENT_QUOTES, "utf-8") ?>'>
        </p>

        <p>
            <label for="CodePostal">Code postal</label>
            <input type="number" id="CodePostal" name="CodePostal" required value='<?= htmlentities($CodePostal, ENT_QUOTES, "utf-8") ?>'>
        </p>



        <input type="submit" name="btsubmit" value="Envoyer" />
    </form>
    </body>

</html>