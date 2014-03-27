<?php
session_start();
if (!isset($_SESSION["speudo"]))
		header("location:index.php");
?>
<html>
<img src="images/boutique.gif"	alt="Boutique" title="Boutique" style="margin-left:38%;margin-top:2%;"/>
<head>
<script src = "jquery-1.3.1.min.js"></script>
<link href="CodeContextualiser.css" rel="stylesheet" type="text/css">
<script>
function deconnexion()
{		
$.ajax({
			url : "deconnexion.php", 
			type : "POST", 
			success : function (dataR) 
			{
			document.getElementById('statut').innerHTML=data;
			}
		});
}
function utilisateurConnectes()
{
$.ajax({
		url : "utilisateurConnectes.php",
		type : "POST",
		//data :"statut=" + document.getElementById("statut2").value,
		success : function (data)
		{
		document.getElementById('statut').innerHTML=data;
		}
	});
}

function insertMessage()
{
$.ajax({
		url : "insertMessage.php", 
		type : "POST", 
		data : "message=" +  document.getElementById("contenuMessage").value,
		success : function (data)
		{
					if (data != "messageok")
						alert("erreur,messagefail");
						else 
						document.getElementById("contenuMessage").value="";
		}
	});
}
function lectureMessage()
{
	$.ajax({
		url : "lectureMessage.php", 
		success : function (dataRecup)
		{
			if (dataRecup == "lecturefail")
						alert("erreur,lecturefail");
			else
			{
				document.getElementById("message").value = dataRecup;
			}
			
		}
	});
}	
setInterval('statut();',1000);
window.setInterval('lectureMessage();' , 3000); 
window.setInterval('utilisateurConnectes()' ,10000); 
</script>
</head>

<body onLoad="javascript:lectureMessage();utilisateurConnectes()">

<h2 style="margin-left: 30%;margin-right:29%;"><marquee>ConseilInfo Bienvenue</marquee></h2>
<form>

<textarea rows = "8" cols = "50" id = "message" style="margin-TOP: 0%; margin-left:30%;"></textarea>
<textarea rows = "8" cols = "12" id = "statut" ></textarea>
<br>
<textarea rows = "1" cols = "66" id= "contenuMessage" style="margin-left: 30%;margin-right: 30%;" ></textarea><br>
<input type="button" value="Envoyer" onclick="javascript:insertMessage()" style="margin-left: 30%;"/>
<input type ="button" value="Historique" onclick="document.location.href='historique.php'"/>
<input type ="button" value="Supprimer" onclick="document.location.href='messageAdmin.php'"/>
<input type ="button" value="Deconnexion" onclick="document.location.href='deconnexion.php'" />

</body>

</html>
