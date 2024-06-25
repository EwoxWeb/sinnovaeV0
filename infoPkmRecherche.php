<!DOCTYPE html>
<html lang="fr">
<?php
include('style.php');
include('bliblioBDD.php');
session_start();
if (isset($_SESSION['connecte']))
{
    $connecte=$_SESSION['connecte'];
}
else{
    $connecte=false;
}
?>
<head>
    <?php
    include('header.php');
    ?>
    <title>Pokemon's Info</title>
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
    ?>
    <center>
        <h1>Chercher un Pokemon</h1><br/>
        <form action="infoPkm.php" method="GET">
            <input type="search" id="site-search" name="recherchePKM">
            <input type="submit" name="submit" value="Rechercher" />
        </form>
    </center>
</body>

</html>