<html>
<img src="images/boutique.gif"	alt="Boutique" title="Boutique" style="margin-left:38%;margin-top:2%;"/>
<link href="CodeContextualiser.css" rel="stylesheet" type="text/css">

<Center>
<TABLE BORDER="1"> 
  <TR> 
 <TH> Login </TH> 
 <TH> message </TH> 
 <TH> date </TH> 
</center>
<?php 
include ('connexionBDD.php');
/**
*recupere dans la variable $date1 le post de date1
*/
$date1=$_POST['date1'];
/**
*recupere dans la variable $date2 le post de date2
*/
$date2=$_POST['date2'];
/**
*recupere toute les information de message entre'$date1' et '$date2' et classer par idMessage
*/
$requete="select* FROM message where heurDateCreation BETWEEN '$date1' and '$date2'  ORDER BY idMessage";
/**
*execute la requete
*/
	$res = mysql_query($requete);
	echo "<tr>";
	while ($lecture = mysql_fetch_assoc($res)) 
			{	echo "<td>".$lecture["pseudo"]."</td>";
				echo "<td>".$lecture["message"]."</td>";
				echo "<td>".$lecture["heurDateCreation"]."</td>";
			echo "</tr>";
			}
?>
</TABLE> 
</html>