<?php
/**
*recupere les variable de connection de la db
*/
	$cnx = mysql_connect('localhost', 'root', '');
	mysql_select_db('utilisateur', $cnx);
?>