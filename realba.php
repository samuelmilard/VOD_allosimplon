 <!--REAL BA-->

<?php include('connect.php'); ?>

 <div class="real-real">Réalisateur</div>

<div class="real-ba">


    

    <div class="real">

<?php 

$id=$_GET['id'];

$req = $bdd->prepare("SELECT f.ID_film, f.bande_annonce, r.ID_realisateur, r.nom, r.prenom, r.photo_realisateur, r.info_realisateur, t.ID_film, t.ID_realisateur 
                      FROM film f, realisateur r, realiser t
                      WHERE t.ID_film = f.ID_film
                      AND t.ID_realisateur = r.ID_realisateur
                      AND t.ID_film = $id");

$req->execute();
while($donnees = $req->fetch()){


?>

        <div class="img-real">
            <img src="<?php echo $donnees['photo_realisateur']; ?>"alt="">
            <div><p> <?php echo $donnees['nom']."   ". $donnees['prenom']; ?> </p></div>
        </div>
        <div class="text-real">
            <p> <?php echo $donnees['info_realisateur']; ?></p>
        </div>
    </div>

    <div class="ba-yt">
     <?php echo $donnees['bande_annonce']; ?>
            
    </div>
        <?php } ?>
</div>
