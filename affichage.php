<?php
/**
 * Created by PhpStorm.
 * User: versa
 * Date: 25/03/2019
 * Time: 14:36
 */

include('header.php');
?>
<p class="card-text">Affiche des donnees stocké en base de données</br>
    <a href="inscription.php">Pour retourner sur le page d'inscrition cliquez ici</a>
</p>

<form method="post" action="modifier.php">
    <div class="form-row">
        <div class="col-sm-4">
            <label for="upId">ID</label>
            <input type="number" class="form-control" name="upId" placeholder="Id">
        </div>
        <div class="col">
            <label for="upNom">Nom</label>
            <input type="text" class="form-control" name="upNom" placeholder="Nom">
        </div>
        <div class="col">
            <label for="upPrenom">Prenom</label>
            <input type="text" class="form-control" name="upPrenom" placeholder="Prenom">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="upTelephone">Téléphone</label>
            <input type="tel" class="form-control" name="upTelephone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="Format: 07-85-96-25-15">
        </div>
        <div class="form-group-md-6">
            <label for="upPoste">Poste</label>
            <select class="form-control" id="upPoste" name="upPoste">
                <option>Cariste</option>
                <option>Manutentionnaire</option>
                <option>Administratif</option>
            </select>
        </div>
    </div>
    <div>
        <a href="delete.php"> <input class="btn btn-danger" type="submit" value="Supprimer"> </a>
        <input class="btn btn-success" type="submit" value="Modifier">
    </div>
</form>

<?php


//connection bd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=onet;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT id, nom ,prenom, telephone, poste FROM personnel');

while ($donnees = $reponse->fetch()) {

    echo '<p><strong>' . $donnees['id'] . ' ' . htmlspecialchars($donnees['nom']) . ' ' . htmlspecialchars($donnees['prenom'])
        . ' ' . htmlspecialchars($donnees['telephone']) . ' ' . htmlspecialchars($donnees['poste']) . '</p>';
    if ($donnees['poste'] == 'Cariste') {
        echo '<img src="img/cariste.jpg">';
    } elseif ($donnees['poste'] == 'Manutentionnaire') {
        echo  '<img src="img/manu.jpg">';
    } elseif ($donnees['poste'] == 'Administratif') {
        echo  '<img src="img/admin.jpg">';
    }

}

$reponse->closeCursor();
?>
<div class="card-footer text-muted">
    <h5>ONET</h5>
</div>