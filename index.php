<html>
<head>
<title> Ajax Tchat - Connexion </title>
<script src = "jquery-1.3.1.min.js"></script>
<img src="images/boutique.gif"	alt="Boutique" title="Boutique" style="margin-left:36.5%;margin-top:2%;"/>
<link href="CodeContextualiser.css" rel="stylesheet" type="text/css">
<script>

/**
*Pointe sur verifSpeudoMdp pour controler et redirige sur message
*/
function test(){
	if (document.getElementById("motDePasse") && document.getElementById("pseudo") )
	{
		$.ajax({
			url : "verifSpeudoMdp.php", 
			type : "POST", 
			data : "pseudo=" + document.getElementById("pseudo").value +"&mdp=" + document.getElementById("motDePasse").value, 
			success : function (dataR) {
					if (dataR =="okadmin") {
						window.location.href="AdminMessagePage.php";}
					else if (dataR =="ok"){
						window.location.href="message.php";}
					else
						alert("erreur, veuillez retaper vos identifiants");
			}
		});
	}
}	
/**
*Pointe sur inscription.php si variable = inscription ok Inscription validé vous pouvez vous connecter sinon erreur, Votre inscription a echoué
*/
function inscription(){
	{
		$.ajax({
			url : "inscription.php", 
			type : "POST", 
			data : "pseudo=" + document.getElementById("pseudo").value +"&mdp=" + document.getElementById("motDePasse").value, 
			success : function (dataR) {
					if (dataR =="inscription ok")
						alert("Inscription valid\351e vous pouvez vous connecter");
					else
						alert("erreur, Votre inscription a echoué");
			}
		});
	}
}	

</script>
</head>
<div id="acceuil">
<body>

<h2>ConseilInfo Bienvenue </h2>
<?php
/**
*is recupere une ereeur dire Identifiants de connexion incorrect, resaisir
*/
	if (isset($_GET["erreur"]))
		echo "Identifiants de connexion incorrect, resaisir";
?>

<table>

<tr><td>Pseudo : </td><td><input type = "text" id = "pseudo" /></td></tr>
<tr><td>Mot de passe : </td><td><input type ="password" id ="motDePasse" /></td></tr>
</table>
<input type ="submit" value = "Connexion" onclick="javascript:test()"/>

<input type ="submit" value = "inscription" onclick="javascript:inscription()"/>

</body>
</div>
</html>