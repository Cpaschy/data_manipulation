<?php
//connection bd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=onet;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['upNom']) && isset($_POST['upPrenom']) && isset($_POST['upTelephone'])
    && isset($_POST['upPoste']) && isset($_POST['upId'])) {

    $req = $bdd->prepare('UPDATE personnel SET nom = :upNom, prenom = :upPrenom
,telephone = :upTel, poste = :upPoste WHERE id= :upId ');

    $req->execute(array(
        'upNom' => $_POST['upNom'],
        'upPrenom' => $_POST['upPrenom'],
        'upTel' => $_POST['upTelephone'],
        'upPoste' => $_POST['upPoste'],
        'upId' => $_POST['upId']
    ));
}
header('location:affichage.php');
?>



