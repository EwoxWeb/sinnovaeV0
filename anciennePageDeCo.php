<!DOCTYPE html>
<html>
<?php
include('style.php');
include('bliblioBDD.php');
session_start();
if (isset($_SESSION['connecte'])) {
    $connecte = $_SESSION['connecte'];
} else {
    $connecte = false;
}
?>

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" />
    <script src="JS/script.js"></script>
    <link rel="shortcut icon" href="Images/shortcutIcon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=sitepkm;charset=UTF8', 'Enzo', 'Enzo-BDdweb/pkm*85');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$requete = "SELECT pseudoUtilisateurs, mailUtilisateurs, mdpUtilisateurs FROM utilisateurs";
$reponseRequete = $bdd->query($requete);
while ($uneLigne = $reponseRequete->fetch())
?>
<nav>
    <?php
if ($connecte == true) {
    include('nav-co.php');
} else {
    include('nav.php');
}
    ?>
</nav>
<?php
connexion($bdd);
?>

<body id="body">
    <center>
        <br /><a class="accueil" href="index.php" title="accueil">⬅️ Retour à l'accueil</a><br /><br />
        <?php
        if ($connecte == true) {
            echo "Vous etes déjà connecté";
        } else {
        ?>
            <form action="connexion.php" method="post">
                Pseudo: <input type="text" name="pseudo" />
                <br /><br />
                Mot de passe: <input type="password" name="mdp" />
                <br /><br />
                <input type="submit" name="connexion" value="Connexion" /><br />
            </form><br />
            <a class="inscription" href="Inscription.php" title="Inscription">Inscription</a><br />
            <a class="mdpoublie" href="mdpoublie.php" title="mdpoublie">Mot de passe oublié</a>
        <?php
        }
        ?>
    </center>
</body>

</html>