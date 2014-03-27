<?php
session_start();
/**
*recupere le pseudo
*/
$pseudo = $_POST["pseudo"];
/**
*recupere le mdp
*/
$mdp = $_POST["mdp"];
include("connexionBDD.php");
//$requete2="select pseudo from utilistateur where pseudo='$pseudo'";
//$res = mysql_query($requete2);
//if(!$requete2)
/**
*integre dans utilisateur les valeur recyperer $pseudo', '$mdp
*/
$requete="INSERT INTO `utilisateur` (`pseudo`, `password`) VALUES ('$pseudo', '$mdp')";
/**
*Execute la requete
*/
$res = mysql_query($requete);
/** 
*si inscription a marcher retourne  inscription ok sinon erreur
*/
if($res)
{
		echo "inscription ok";
}
else
	echo "erreur";
?>