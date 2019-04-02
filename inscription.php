<?php
/**
 * Created by PhpStorm.
 * User: versa
 * Date: 25/03/2019
 * Time: 14:21
 */
try {
    $bdd = new PDO('mysql:host=localhost;dbname=onet;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//insertion du message à l'aide d'une requete
$req = $bdd->prepare('INSERT INTO personnel (nom, prenom, telephone, poste ) VALUES(? , ? , ? , ?)');
$req->execute(array($_POST['inputNom'], $_POST['inputPrenom'], $_POST['inputTelephone'], $_POST['inputPoste']));

//redirection du visiteur vers la page de tchat
header('location:index.php');

?>
