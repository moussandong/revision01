<?php
if (isset($_POST['envoyer'])) { 
    

} else {
    $NumeroArticle = 0;
    $TypeArticle = "";
    $adresse = "";
    $caracteristique = "";
}
?>
<!DOCTYPE html>
<html>

<head>
    <form method="POST" action="index.php">
        <p>
            <label for="NumeroArticle">Numero de l’article</label>
            <input type="number" id="NumeroArticle" name="NumeroArticle" value="<?php echo $NumeroArticle ?>" />
        </p>

        <p>
            <label for="TypeArticle">Type de l’article</label>
            <input type="text" id="TypeArticle" name="TypeArticle" value="<?php echo $TypeArticle ?>" />
        </p>
        <p>
            <label for="caracteristique">Caracteristique</label>
            <input type="text" id="Caracteristique" name="Caracteristique" value="<?php echo $caracteristique ?>" />
        </p>

        <p>
            <label for="adresse">Adresse</label>
            <input type="text" id="adresse" name="adresse" value="<?php echo $adresse ?>" />
        </p>

        <input type="submit" name="btSubmit" value="Envoyer" />
    </form>
    </body>
