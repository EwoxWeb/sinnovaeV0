<!DOCTYPE html>
<html>
<?php
include('stylelivingdex.php');
include('bliblioBDD.php');
include('style.php');
session_start();
if (isset($_SESSION['connecte'])) {
   $connecte = $_SESSION['connecte'];
} else {
   $connecte = false;
}
function save()
{
   $bdd = seConnecter();
   $requeteUpdate = 'UPDATE utilisateurs SET shnum='.$_GET['issave'].' WHERE pseudoUtilisateurs="'.$_SESSION['pseudo'].'"';
   $reponseUpdate = $bdd->query($requeteUpdate);
}
if(!empty($_GET['issave']))
{
   save();
}
?>
<script>
   var imgnum=[];
   function changeColor1(mid){ 
      if(!imgnum[mid])document.getElementById("color"+mid).style.backgroundColor = "#ffc800";
      else document.getElementById("color"+mid).style.backgroundColor = "#333333";
      imgnum[mid] = !imgnum[mid];
   }
   
   function sauverList(){
      alert(imgnum);
   }
</script>

<head>
    <?php
    include('header.php');
    ?>
    <title>ShinyCard</title>
</head>
<nav>
    <?php
    if ($connecte==true)
    {
        include('nav-co.php');
    }
    else{
        include('nav.php');
    }
    ?>
</nav>

<body id="body">
   <?php
   $bdd = seConnecter();
   $pkm = getPKM5G($bdd);
   ?>
   <center>
   <h1>
      Shiny Card
   </h1>
   <br />
      <?php
      if ($connecte == true) {
      ?>
         <button onclick="sauverList()">Save</button>
      <?php
      } else {
         echo "Connectez-vous ou inscrivez-vous pour sauvegarder votre Living Dex";
      }
      ?><br /><br />
      <?php
      include('navGenerationShinyCard.php');
      ?>
      <div id="pokedex">
      <div class="container-fluid">
         <div class="row">
            <?php
            foreach ($pkm as $pkm) {
               $nom = $pkm['nomPKM'];
               $id = $pkm['idPKM'];
               $image = $pkm['imagePKM'];
               $numPoke = $pkm['numPKM'];
            ?>
                  <div class="col-lg-2 col-md-2 col-sm-3">
                     <p id="color<?php echo $id; ?>" onclick="changeColor1(<?php echo $id; ?>);" style="width:100%; background-color:#333333"><img src="Images/shiny/<?php echo $image;?>" WIDTH=80% border="0"><br /><B><?php echo $nom; echo " "; echo $numPoke ?></B></p>
                  </div>
            <?php } ?>
         </div>
      </div>
      </div>
   </center>

</body>

</html>