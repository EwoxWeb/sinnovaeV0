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
    <title>Accueil</title>
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
    <h1>
        Acceuil
    </h1>
    <main>
        <article>
            <br />
            <h3>Rien à voir ici... pour l'instant.</h3><br />
        </article>
    </main>
    <aside>
        <a href="https://discord.gg/JFPrVQV">
            <img src="Images/1200px-Discord.svg.png" WIDTH=100 border="0">
            <a href=https://www.youtube.com/channel/UCfYXuvKn8WUVhSS4Os8AJtg>
                <img src="Images/logo youtube.png" WIDTH=100 border="0">
    </aside>
</body>

</html>