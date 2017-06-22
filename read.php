<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <a href="create.php">Retour au formulaire<a>
    <table>
      <!-- Afficher la liste des randonnées -->
      <?php
    include("connect.php");


      $reponse = $pdo->query('SELECT * FROM hiking');
      $reponse1 = $reponse->fetchAll();
      // var_dump($reponse1);
      foreach ($reponse1 as $value) {
        ?>
                <p><?= $value->name ?></p>
                <p><?= $value->difficulty ?></p>
                <p><?= $value->distance ?></p>
                <p><?= $value->duration ?></p>
                <p><?= $value->height_difference ?></p>
                </form>
                <form class="" action="delete.php" method="post">
                  <input hidden type="number" name="id" value="<?= $value->id?>">
                  <input type="submit" value="supprimer">
                </form>
                <form class="" action="update.php" method="post">
                  <input hidden type="number" name="id" value="<?= $value->id ?>">
                  <input type="submit" value="edit">
                </form>
                  <hr>
              <?php
              }

              ?>
          <!-- // echo '<a href="update.php"><p>Nom : '.$value->name.'</p></a><p>Difficulté : '.$value->difficulty.'</p><p>Distance : '.$value->distance.'km</p><p>Durée : '.$value->duration.'</p><p>Dénivelé : '.$value->height_difference.'</p><hr>'; -->


    </table>
  </body>
</html>
