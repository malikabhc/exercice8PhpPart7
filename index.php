<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice7/7</title>
    </head>
    <body>

        <?php
        // Vérification de la présence de valeurs
        if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['file'])) {
            // Déclaration de la variable qui stocke les infos du fichier récupérées par la fonction pathinfo
            $fileInfo = pathinfo($_FILES['file']['name']);
            if ($fileInfo['extension'] == 'PDF' || $fileInfo['extension'] == 'pdf') {
                echo 'Le fichier est au bon format (PDF)';
            }
            // Affichage des valeurs des paramètres
            echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' a envoyé le fichier ' . $_FILES['file']['name'] . ' ' . $fileInfo['extension'];
        } else {
            // Sinon affichage du formulaire
            ?>
            <form action="index.php" method="post" enctype ="multipart/form-data">
                <label for="civility">Civilité</label>
                <select name="civility" id="civility">
                    <option selected disabled>Veuillez sélectionner une option</option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="lastname">Votre Prénom :</label>
                <input type="text" name="lastname" id="lastname" />
                <label for="firstname">Votre Nom :</label>
                <input type="text" name="firstname"  id="firstname" />
                <label for="file">Fichier :</label>
                <input type="file" name="file" id="file" />
                <input type="submit" name="submit" value="Envoyer" />
            </form>
        <?php } ?>
    </body>
</html>