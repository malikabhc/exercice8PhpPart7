<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice8/7</title>
  </head>
  <body>
      <?php
      if(empty($_POST) && empty($_GET)){
      ?>
    <form action="index.php" method="get">
        <select name="civility">
            <option>Monsieur</option>
            <option>Madame</option>
        </select>
      <label for="lastname">Votre nom : </label><input type="text" name="lastname" placeholder="Nom" />
      <label for="firstname">Votre prénom : </label><input type="text" name="firstname" placeholder="Prénom" />
      <label for="file">Nom du fichier : </label><input type="file" name="file" placeholder="Fichier" />
      <input type="submit" value="Valider" />
    </form>
      <?php
      }
      ?>
   <p>    
    <?php 
        if(isset($_GET['civility']) && ($_GET['firstname']) && isset($_GET['lastname'])){
         $fileExtension = pathinfo($_GET['file'],PATHINFO_EXTENSION);
            echo $_GET['civility'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' ';
          if($fileExtension == 'pdf'){
          echo pathinfo($_GET['file'],PATHINFO_FILENAME) . '.' . pathinfo($_GET['file'],PATHINFO_EXTENSION);
        }
        else{
          echo 'Le fichier transmis n\'est pas au bon format (PDF)';
        }
        }
    ?>
   </p> 
  </body>
</html>
