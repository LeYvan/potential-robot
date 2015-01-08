<?php
	// Paramètres de connexion à la BD.
	require("include/params.inc");

	public class BD
	{
		private $connBD = NULL

		public connexion
		{
			if ($this->$connBD == NULL)
			{
				// Création d'une connexion à la BD.
				try 
				{
					$connBD = new PDO("mysql:host=$dbHote; dbname=$dbNom", $dbUtilisateur, $dbMotPasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					
					// Pour lancer les exceptions lorsqu'il y des erreurs PDO.
					$connBD -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				}
				catch (PDOException $e) 
				{
					exit( "Erreur lors de la connexion à la BD :<br />\n" .  $e->getMessage() );
				}
			}
			else
			{
				$this->$connBD = $connBD
			}

			return $connBD			
		}

	}
?>