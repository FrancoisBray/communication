<?php
session_start();
	/**
*recupere le pseudo
*/
$pseudo=$_SESSION["speudo"];
include("connexionBDD.php");
	/**
*cree une variable retour vide
*/
$retour="";
	/**
*recupere le statut pour le pseudo dans la table utilisateur quand le statut et = a 1
*/
$requete=mysql_query("select statut,pseudo from utilisateur where statut='1'");
if ($requete){

while($ligne=mysql_fetch_assoc($requete)){
$retour = $retour.nl2br($ligne["pseudo"]."\n");
			$retour = str_replace('<br />', '', $retour);
echo $ligne['pseudo']."\n";

}
}
?>