<?php
require('db.php');
global $pdo;
$reponse=$pdo->query("SELECT country_code, COUNT(*) as nbr FROM information GROUP BY country_code ORDER by nbr") or die(print_r($pdo->errorInfo()));
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
                        <h3 class="panel-title">Repartition des Etats dans L'ordre Croissant</h3>
                    </div>
                    <thead>
                    <tr>
                        <th>Nombre de personne</th>
                        <th>Country Code</th>
                        <th> </th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($donnees=$reponse->fetch())
                    {
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($donnees['nbr']);?></td>
                            <td><?php echo htmlspecialchars($donnees['country_code']);?></td>
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