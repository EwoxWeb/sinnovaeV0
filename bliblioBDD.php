<?php

function seConnecter()
{
   $serveur = 'mysql:host=localhost;port=3306';
   $bdd = 'dbname=sinnovae';
   $user = 'root';
   $mdp = '';
   try {
      $pdo = new PDO($serveur . ';' . $bdd . ';charset=UTF8', $user, $mdp);
   } catch (PDOException $e) {
      echo ('Erreur : ' . $e->getMessage());
   }
   return $pdo;
};

function getPKM1G($bdd)
{
   $req = "SELECT * from pokemon where idPKM<=151";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};
function getPKM2G($bdd)
{
   $req = "SELECT * from pokemon where idPKM>151 and idPKM<=251";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};
function getPKM3G($bdd)
{
   $req = "SELECT * from pokemon where idPKM>251 and idPKM<=386";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};
function getPKM4G($bdd)
{
   $req = "SELECT * from pokemon where idPKM>386 and idPKM<=493";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};
function getPKM5G($bdd)
{
   $req = "SELECT * from pokemon where idPKM>493 and idPKM<=649";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};
function getPKM6G($bdd)
{
   $req = "SELECT * from pokemon where idPKM>649 and idPKM<=721";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};
function getPKM7G($bdd)
{
   $req = "SELECT * from pokemon where idPKM>721 and idPKM<=809";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};
function getPKM8G($bdd)
{
   $req = "SELECT * from pokemon where idPKM>809 and idPKM<=905";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
};

function infoPKM($bdd,$pkmrechercher)
{
   $req = "SELECT * FROM pokemon WHERE pokemon.nomPKM='$pkmrechercher'";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
}
function numPKMInfo($bdd,$pkmrechercher)
{
   $req = "SELECT numPKM from pokemon WHERE pokemon.nomPKM='$pkmrechercher'";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
}

function deconnexion()
{
   if (isset($_POST['deco'])) {
      $_SESSION['connecte']=false;
      echo "Vous etes déconnecté";
  }
}
function connexion($bdd)
{
if(session_id() == '') {
      session_start();
  }
$connecte=false;
if (isset($_POST['connexion'])) {
   if (empty($_POST['pseudo'])) {
      echo "Le champ Pseudo est vide.";
   } else {
      if (empty($_POST['mdp'])) {
         echo "Le champ Mot de passe est vide.";
      } else {
         $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "UTF-8");
         $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "UTF-8");
         $MotDePasse = md5($MotDePasse);
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
         if (!$mysqli) {
            echo "Erreur de connexion à la base de données.";
         } else {
            $Requete = mysqli_query($mysqli, "SELECT * FROM utilisateurs WHERE pseudoUtilisateurs = '" . $Pseudo . "' AND mdpUtilisateurs = '" . $MotDePasse . "'");
            if (mysqli_num_rows($Requete) == 0) {
               echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
            } else {

               $rep = mysqli_fetch_assoc($Requete);

               $_SESSION['pseudo'] = $rep['pseudoUtilisateurs'];
               $_SESSION['connecte']=true;
               $_SESSION['shnum']=$rep['shnum'];

               
               ?> <center> <?php echo "Vous êtes à présent connecté";?> </center> <?php
            }
         }
      }
   }
}
}

function getNumShiny($bdd)
{
   $req = "SELECT * from shinydex";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
}

function getprofil($bdd)
{
   $req = "SELECT * from utilisateurs";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
}

function supprimerC($bdd)
{
   $req = "DELETE from utilisateurs where pseudoUtilisateurs='$_SESSION[pseudo]'";
   $res = $bdd->query($req);
}

function updateC($bdd,$newpseudo,$age,$genre,$pays)
{
   $req = "UPDATE utilisateurs set pseudoUtilisateurs='$newpseudo',ageUtilisateur='$age',genreUtilisateur='$genre',paysUtilisateur='$pays' where pseudoUtilisateurs='$_SESSION[pseudo]'";
   $res = $bdd->query($req);
}

function getNum1pkm2G($bdd)
{
   $req = "SELECT idPKM from pokemon where idPKM=152";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;
}
?>