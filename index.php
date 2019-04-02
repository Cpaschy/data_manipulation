<?php
/**
 * Created by PhpStorm.
 * User: versa
 * Date: 25/03/2019
 * Time: 14:18
 */

include("header.php");
?>
<p class="card-text">Veuillez vous inscrire à ce formulaire</br>
</p>
<form method="post" action="inscription.php">
    <div align="center">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="inputNom">Nom</label>
                    <input type="text" class="form-control" name="inputNom" placeholder="Nom">
                </div>
                <div class="col">
                    <label for="inputPrenom">Prenom</label>
                    <input type="text" class="form-control" name="inputPrenom" placeholder="Prenom">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputTelephone">Téléphone</label>
                    <input type="tel" class="form-control" name="inputTelephone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="Format: 07-85-96-25-15">
                </div>
                <div class="form-group-md-6">
                    <label for="inputPoste">Poste</label>
                    <select class="form-control" id="inputPoste" name="inputPoste">
                        <option>Cariste</option>
                        <option>Manutentionnaire</option>
                        <option>Administratif</option>
                    </select>
                </div>
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Submit">
        </div>
</form>
<a href="affichage.php">Pour afficher les differents profils cliquez ici</a>
<div class="card-footer text-muted">
    ONET
</div>
</body>
</html>

