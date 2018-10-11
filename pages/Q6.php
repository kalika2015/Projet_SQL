<?php
require('db.php');
global $pdo;
$reponse=$pdo->query("SELECT COUNT(gender) AS nbrHomme FROM information WHERE gender='Male'") or die(print_r($pdo->errorInfo()));
$reponse2=$pdo->query("SELECT COUNT(gender) AS nbrFemme FROM information WHERE gender='Female'") or die(print_r($pdo->errorInfo()));
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php include("menu.php"); ?>
    <div class="row">
        <section class="col-sm-12">
            <div class="panel panel-primary">
                <table class="table table-striped table-condensed">
                    <div class="panel-heading">
                        <h3 class="panel-title">Affichage Nombre d'Homme</h3>
                    </div>
                    <thead>
                    <tr>
                        <th>Nombre d'homme</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($donnees=$reponse->fetch())
                    {
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($donnees['nbrHomme']);?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <!-- affichage Nobre de femme -->
    <div class="row">
        <section class="col-sm-12">
            <div class="panel panel-primary">
                <table class="table table-striped table-condensed">
                    <div class="panel-heading">
                        <h3 class="panel-title">Affichage Nombre de femme</h3>
                    </div>
                    <thead>
                    <tr>
                        <th>Nombre de femme</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($donnees=$reponse2->fetch())
                    {
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($donnees['nbrFemme']);?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
<script src="../js/jQuery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>