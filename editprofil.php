<!DOCTYPE html>
<html lang="fr">
<?php
include('style.php');
include('bliblioBDD.php');
$bdd = seConnecter();
$profil = getprofil($bdd);
$imgnum = getNumShiny($bdd);
session_start();
$Pseudo = $_SESSION['pseudo'];
if (isset($_SESSION['connecte'])) {
    $connecte = $_SESSION['connecte'];
} else {
    $connecte = false;
}
?>
<?php
foreach($imgnum as $imgnum)
{
    $nbshiny = $imgnum['imgnum'];   
}
?>
<head>
    <meta charset="UTF-8" />
    <title>Règles</title>
    <link rel="stylesheet">
    <link rel="shortcut icon" href="Images/logo en haut à gauche.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<nav>
    <?php
    if ($connecte == true) {
        include('nav-co.php');
    } else {
        include('nav.php');
    }
    ?>
</nav>
<body id="body"><center>
    <div class="divProfil">
        <h2>Personnaliser/Editer votre profil</h2>
        <form method="POST">
        Pseudo<br/>
        <input type="text" value="<?php echo $Pseudo; ?>" name="newpseudo" size="15%"><br/><br/>
        Age<br/>
        <input type="number" min="1" max="100" name="age"><br/><br/>
        Genre<br/>
        <select name="genre" id="genre" >
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="femme">Neutre</option>
        </select><br/><br/>
        Pays<br/>
        <input type="text" size="10%" name="pays"><br/>
            <br/><input type="submit" class="btn btn-primary" name="btnupdatemdp" value="Modifier votre mot de passe"/><br/>
            <br/><input type="submit" class="btn btn-success" name="btnupdateC" value="Sauvegarder"/><br/>
            <br/><input type="submit" class="btn btn-danger" name="btnsupprimerC" value="Supprimer le compte"/>
        </form><br/>
    </div>
    <?php
        if(isset($_POST['btnupdateC']))
        {
            if(empty($_POST['newpseudo']))
            {
                $newpseudo = $Pseudo;
            }
            else
            {
                $newpseudo = $_POST['newpseudo'];
            }
            if(empty($_POST['age']))
            {
                $age = 3;
            }
            else
            {
                $age = $_POST['age'];
            }
            if(empty($_POST['genre']))
            {
                $genre = " ";
            }
            else
            {
                $genre = $_POST['genre'];
            }  
            if(empty($_POST['pays']))
            {
                $pays = " ";
            }
            else
            {
                $pays = $_POST['pays'];
            }           
            updateC($bdd,$newpseudo,$age,$genre,$pays);
        }

        if(isset($_POST['btnsupprimerC']))
        {
            supprimerC($bdd);
            $_SESSION['connecte']=false;
            echo "Vous etes déconnecté";
            header('Location: index.php');
        }
    ?>
</center></body>
</html>