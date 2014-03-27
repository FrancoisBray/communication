<html>
<link href="CodeContextualiser.css" rel="stylesheet" type="text/css">
<img src="images/boutique.gif"	alt="Boutique" title="Boutique" style="margin-left:38%;margin-top:2%;"/>
<body>
<h2 style="margin-left: 30%;margin-right:29%;"><marquee>Bienvenue Sur Votre Panel Administrateur</marquee></h2><br>
<TABLE BORDER="1" style="margin-left:6%;margin-right:6%;"> 
  <TR> 
 <TH> Login </TH> 
 <TH> message </TH> 
 <TH> suprimer </TH> 
  </TR> 
  <TR> 
 
 <form method="post" action="supprimer.php">
 <?php 
	include("connexionBDD.php");
	/**
*select tout de la table message
*/
	$requete="select * FROM message";
	/**
*execute la requete
*/
	$res = mysql_query($requete);
	echo "<tr>";
	while ($lecture = mysql_fetch_assoc($res)) 
			{	echo "<td>".$lecture["pseudo"]."</td>";
				echo "<td>".$lecture["message"]."</td>";
				echo "<td>"."<input type='checkbox' name='idMessage[]' value=".$lecture["idMessage"].">"."</td>";
			echo "</tr>";
			}
	?> 
  </TR>
  <input type='submit' value='Supprimer' style="margin-left:6%;">
  <input type ="button" value="Retour" onclick="document.location.href='AdminMessagePage.php'"/>
</form>  
</TABLE>
</body>
</html>