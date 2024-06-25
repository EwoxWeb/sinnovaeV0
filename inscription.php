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
    <title>Inscription</title>
    <link rel="stylesheet" />
    <script src="JS/script.js"></script>
    <link rel="shortcut icon" href="Images/shortcutIcon.png" type="image/x-icon" />
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
    <a class="accueil" href="index.php" title="accueil">⬅️ Retour à l'accueil</a><br />
    <br />
    <center>
        <h4 class="titreInscription">Inscription</h4><br />

        <?php
        $BDD = array();
        $BDD['host'] = "localhost";
        $BDD['user'] = "root";
        $BDD['pass'] = "";
        $BDD['db'] = "sinnovae";
        $mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
        if (!$mysqli) {
            echo "Connexion non établie.";
            exit;
        }
        $AfficherFormulaire = 1;
        if (isset($_POST['pseudoUtilisateurs'], $_POST['mdpUtilisateurs'])) {
            if (empty($_POST['pseudoUtilisateurs'])) {
                echo "Le champ Pseudo est vide.";
            } elseif (strlen($_POST['pseudoUtilisateurs']) > 25) {
                echo "Le pseudo est trop long, il dépasse 25 caractères.";
            } elseif (empty($_POST['mdpUtilisateurs'])) {
                echo "Le champ Mot de passe est vide.";
            } elseif (mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM utilisateurs WHERE pseudoUtilisateurs='" . $_POST['pseudoUtilisateurs'] . "'")) == 1) {
                echo "Ce pseudo est déjà utilisé.";
            } else {
                if (!mysqli_query($mysqli, "INSERT INTO utilisateurs SET pseudoUtilisateurs='" . $_POST['pseudoUtilisateurs'] . "',mdpUtilisateurs='" . md5($_POST['mdpUtilisateurs']) . "',dateCreation=current_date,shnum=1,ageUtilisateur=0,genreUtilisateur='',paysUtilisateur=''")) {
                    echo "Une erreur s'est produite: " . mysqli_error($mysqli);
                } else {
                    $iduser = mysqli_query($mysqli, "SELECT numUtilisateurs from utilisateurs where pseudoutilisateurs='" . $_POST['pseudoUtilisateurs'] . "'");
                    mysqli_query($mysqli, "INSERT INTO user_shnum (idUser,shnum1G,shnum2G,shnum3G,shnum4G,shnum5G,shnum6G,shnum7G,shnum8G,shnum9G,shnumForm) VALUES ($iduser, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0')");
                    echo "Vous êtes inscrit avec succès!";
                    $AfficherFormulaire = 0;
                }
            }
        }
        if ($AfficherFormulaire == 1) {
        ?>
            <br />
            <form method="post" action="inscription.php">
                Pseudo : <input type="text" placeholder="Votre pseudo" name="pseudoUtilisateurs">
                <br /><br />
                Mot de passe : <input type="password" placeholder="Votre mot de passe" name="mdpUtilisateurs">
                <br /><br />
                <input type="submit" value="S'inscrire">
            </form>
        <?php
        }
        ?>
        <br />
        <a class="connexion" href="connexion.php" title="connexion">Connexion</a><br />
    </center>
</body>

</html>