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
    <?php
    $bdd = seConnecter();
    $pkmrechercher= $_GET["recherchePKM"];
    $infoPKM = infoPKM($bdd,$pkmrechercher);
    $numPkmChercher = numPKMInfo($bdd,$pkmrechercher);
    echo $numPkmChercher["numPKM"];
    ?>
    <div id="centreinfo">
    <center>
    <h1 class="nomPKM"><?php echo $pkmrechercher; echo " #001"; ?> </h1><br/><br/>
    <img class="card" src="Images/card/<?php echo $pkmrechercher;?>">
    <table class="tabInfo">
        <tr class="titreTR">
            <th class="titrecelluleinfo">Version</th>
            <th class="titrecelluleinfo">Localisation</th>
            <th class="titrecelluleinfo">Méthode</th>
            <th class="titrecelluleinfo">Rareté</th>
            <th class="titrecelluleinfo">Taux</th>
            <th class="titrecelluleinfo">A Savoir</th>
        </tr>
    <?php
    foreach ($infoPKM as $infoPKM) {
        $nomPKM = $infoPKM['nomPKM'];
        $nomVersion = $infoPKM['NomVersion'];
        $taux = $infoPKM['taux'];
        $tauxApparition = $infoPKM['tauxApparition'];
        $nomRegion = $infoPKM['NomRegion'];
        $nomVille = $infoPKM['nomVille'];
        $nomMethode = $infoPKM['nomMethode'];
        $infoPlus = $infoPKM['Starter'];

        ?><br/>
        <tr class="infoTR">
            <td class="infocellule"><?php echo $nomVersion; ?></td>
            <td class="infocellule"><?php echo $nomVille; ?></td>
            <td class="infocellule"><?php echo $nomMethode; ?></td>
            <td class="infocellule"><?php echo $tauxApparition; ?> %</td>
            <td class="infocellule"><?php echo $taux; ?></td>
            <td class="infocellule"><?php echo $infoPlus; ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    </center>
    </div>
</body>

</html>