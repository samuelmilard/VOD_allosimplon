<?php include ('connect.php'); 

$id=$_GET['id'];

$req = $bdd->prepare("SELECT titre, affiche, synopsis FROM film WHERE ID_film= $id");
$req ->execute();

$donnees = $req->fetch();


?>
<h2 class="page-film"><?php echo $donnees['titre']; ?></h2>

    <!--SYNOPSIS-->

    <div class="img-resume">

        <img class="img-film" src=<?php echo $donnees['affiche']; ?> alt="">

        <div class="synop">
                <p class="synop-title">Synopsis</p>
                <p><?php echo $donnees['synopsis']; ?></p>
        </div>
    </div>

