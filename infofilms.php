<!--INFO FILM-->

<?php include ('connect.php'); 

$id=$_GET['id'];

$req = $bdd -> prepare("SELECT duree, note, date_de_sortie FROM film WHERE ID_film=$id");
$req->execute();

$donnees = $req->fetch();

?>


<div class="rond-titre">Résumé</div>

<h3 class="info-film"></h3>

<div class="ronds-info">

    <div class="ronds-bis">
        <div class="ronds-ronds">
        <p><?php echo $donnees['duree']; ?></p>
        </div>
        Durée
    </div>


    <div class="ronds-bis">
        <div class="ronds-ronds">
        <p><?php echo $donnees['note']; ?></p>
        </div>
        Note
    </div>


    <div class="ronds-bis">
        <div class="ronds-ronds">
        <p><?php echo $donnees['date_de_sortie']; ?></p>
        </div>
        Date de sortie
    </div>


</div>
