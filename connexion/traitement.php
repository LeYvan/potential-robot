<?php

	$base = "../";
	$titre = "Connexion";

	require_once($base."include/header.php");

	global $sessionCourrante;

	if (isset($_POST[txtLogin]) && isset($_POST[txtPass]))
	{
		if (Conseiller::connecter($_POST[txtLogin],$_POST[txtPass]))
		{
			$sessionCourrante->enregistrer($_POST[txtLogin]);
			print("<div class=\"well\">Succes!</div>");
		}
	} 
	else 
	{
		print("<div class=\"well\">Mauvaise combinaison de login et de mot de passe!</div>");
	}

	require_once($base."include/footer.php");

?>