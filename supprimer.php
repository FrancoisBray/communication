<?php 
include ('connexionBDD.php');
	/**
*recupere idMessage
*/
$idMessage= $_POST['idMessage'];
//echo "DELETE FROM message WHERE idMessage=".$idMessage[0];
//mysql_query("DELETE FROM message WHERE idMessage=".$idMessage[0]);
for ($i=0; $i<=count($idMessage);$i++)
	/**
*supprime de la table message l'id N°
*/
	mysql_query("DELETE FROM message WHERE idMessage=".$idMessage[$i]);

 header('Location: messageAdmin.php');
?>