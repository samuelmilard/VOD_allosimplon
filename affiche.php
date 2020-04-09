 <!--AFFICHE-->

<?php include ('connect.php'); ?>

 <div class="title-dada-affiche">
    <h2>A l'affiche</h2>
</div>

<div class="center slider">

<?php 
//Requête permettant la recherche de films

$req = $bdd->prepare("SELECT affiche, ID_film FROM film");
$req->execute();

//Boucle pour afficher tous les résultats
while($donnees = $req->fetch()) { ?>

    <a class="link-poster" href="parasite.php?id=<?php echo $donnees['ID_film']; ?>"><img src="<?php echo $donnees['affiche']; ?>" alt=""></a> 

<?php } ?>

 </div>



