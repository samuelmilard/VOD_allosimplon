<!--Liste acteurs-->
<div class="acteurs-titre">Acteurs</div>

<section class="liste-acteurs">

<?php include ('include/connect.php'); 

$id=$_GET['id'];

$req = $bdd->prepare("SELECT f.ID_film, a.ID_acteur, a.nom, a.prenom, a.photo_acteur, j.ID_film, j.ID_acteur
                FROM film f, acteur a, jouer j
                WHERE j.ID_film = f.ID_film
                AND j.ID_acteur = a.ID_acteur
                AND f.ID_film = $id ");

$req->execute();
while($donnees = $req->fetch()){




?>


    <div class="acteur">
        <img class="img-acteur" src=<?php echo $donnees['photo_acteur']; ?> alt="">
        <div><p><?php echo $donnees['nom']."   ". $donnees['prenom']; ?> </p></div>
    </div>
    <?php } ?>
</section>
