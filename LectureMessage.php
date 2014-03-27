<?php
session_start();
include("connexionBDD.php");
/**
*prend tout de la table message et lorganise par idMessage
*/
$requete="SELECT * FROM message ORDER BY idMessage";
//echo $requete;
/**
*execute la requette
*/
$res = mysql_query($requete);
/**
*on defini une variable retour vide
*/
$retour="";
/**
*quand la lecture mesage et = au $res affiche retour incrementé
*/
while ($lecture = mysql_fetch_assoc($res)) 
			{	
			
			$retour = $retour.nl2br($lecture["pseudo"].">".$lecture["message"]."\n");
			$retour = str_replace('<br />', '', $retour);
				
}
echo $retour;
?>


