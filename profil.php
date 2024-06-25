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

<body id="body">
    <center>
        <h1>Bienvenue sur ton profil <?php echo $Pseudo?></h1>
    <p>
        <div class="divProfil">
            <img src="Images/editprofiln.png" class="editprofil" onclick="location.href ='editprofil.php'" onmouseover="this.src='Images/editprofilb.png';" onmouseout="this.src='Images/editprofiln.png';" width=10%> </img>
        </div>
    </p>
    </center></body>

</html>