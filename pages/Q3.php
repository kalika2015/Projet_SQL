<?php
require('db.php');
global $pdo;
$reponse=$pdo->query("SELECT id,first_name,last_name,country_code FROM information WHERE country_code like('N%')") or die(print_r($pdo->errorInfo()));
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
                        <h3 class="panel-title">Tout les Etats dont la lettre commence par N</h3>
                    </div>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
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
                            <td><?php echo htmlspecialchars($donnees['id']);?></td>
                            <td><?php echo htmlspecialchars($donnees['first_name']);?></td>
                            <td><?php echo htmlspecialchars($donnees['last_name']);?></td>
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