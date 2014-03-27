<?php
session_start();
	/**
*recupere le speudo
*/
$pseudo = $_POST["pseudo"];
	/**
*recupere le mdp
*/
$mdp = $_POST["mdp"];
include("connexionBDD.php");
	/**
*recupere tou le la table utilisateur quand le pseudo et =$pseudo et que le mdp = $mdp
*/
$requete="select * FROM utilisateur where pseudo = '$pseudo' and password = '$mdp'";
//echo $requete;
$res = mysql_query($requete);
	/**
*fai une mise a jour dans la table utilisateur passe le statut a 1
*/
	$res2 =mysql_query("Update utilisateur set statut = '1' where pseudo='$pseudo'");
	$ligne = mysql_fetch_assoc($res);
if($res)
{
	if($ligne['topAdmin']=="1")
	{
		$_SESSION["speudo"] = $_POST["pseudo"];
		echo "okadmin";
		}
	else if($ligne)
	{
		$_SESSION["speudo"] = $_POST["pseudo"];
		echo "ok";
		}
	else
		echo "erreur1";
}
else
	echo "erreur2";
?>