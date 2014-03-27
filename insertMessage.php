<?php
session_start();
/**
*recupere la date
*/
$date = date("d-m-Y");
/**
*recupere la date
*/
$heurDateCreation =$date;
/**
*recupere le message ecrit
*/
$message = mysql_real_escape_string($_POST["message"]);
/**
*recupere le pseudo
*/
$pseudo = $_SESSION["speudo"];
include("connexionBDD.php");
/**
*inset dans message le message sa date de creation et le pseudo
*/
$requete="INSERT INTO `message` (`message`, `heurDateCreation`,`pseudo`) VALUES ('$message','$heurDateCreation','$pseudo')";
//echo $requete;
/**
*Execute la requete
*/
$res = mysql_query($requete);
if($res)

		echo "messageok";
		/**
*si sa ne marche pas ecrit messagefail
*/
else
	echo "messagefail";
?>