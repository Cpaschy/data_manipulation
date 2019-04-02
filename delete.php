<?php
//connection bd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=onet;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['upNom']) && isset($_POST['upPrenom']) && isset($_POST['upTelephone'])
    && isset($_POST['upId'])) {

    $req = $bdd->prepare('DELETE FROM personnel WHERE id= :upid ');
    $req->execute(array(
        'upid' => $_POST['upId']
    ));
}

header('location:affichage.php');

?>