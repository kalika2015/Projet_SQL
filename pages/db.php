<?php
/**
 * Created by PhpStorm.
 * User: kalidou
 * Date: 11/10/2018
 * Time: 12:26
 */



try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $pdo = new PDO('mysql:host=localhost;dbname=kalika;charset=utf8', 'root', '',$pdo_options);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}