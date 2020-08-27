<?php

if (isset($_POST['vendre']))
    header('Location: vendre.html');
if (isset($_POST['acheter']))
    header('Location: acheter.html');
if (isset($_POST['louer']))
    header('Location: louer.html');
if (isset($_POST['contact']))
    header('Location: louer.html');
if (isset($_POST['accueil']))
    header('Location: accueil.html');
?>




<!DOCTYPE html>
<html>
<form method="POST" action="index.php">
    <table>
        <thead>
            <tr>
                <th>
                    <div class="button">
                        <input type="submit" name="accueil" value="accueil">
                </th>
                <th>
                    <div class="button">
                        <input type="submit" name="vendre" value="vendre">
                </th>
                <th>
                    <div class="button">
                        <input type="submit" name="acheter" value="acheter">
                </th>
                <th>
                    <div class="button">
                        <input type="submit" name="louer" value="louer">
                </th>
                <th>
                    <div class="button">
                        <input type="submit" name="contact" value="contact">
                </th>

            </tr>
        </thead>

    </table>
</form>


</html>