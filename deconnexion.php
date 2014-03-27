<?php
session_start();
/**
*recupere la session pseudo
*/
$pseudo=$_SESSION["speudo"];
echo $pseudo;
include("connexionBDD.php");
/**
*passe le statut utilisateur a 0 quand le pseudo = a la variable $pseudo qui est enfaite la $_SESSION["speudo"]
*/
$res =mysql_query("Update utilisateur set statut = 0 where pseudo='$pseudo'"); 
if ($res){
	$_SESSION['pseudo']="";
	}
header('location:index.php');

?>