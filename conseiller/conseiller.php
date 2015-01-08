<?php
	require("bd/bd.php");

	public class Conseiller
	{
		// Instance de bd pour utiliser la connexion
		$bd = new BD();
		$connexion = $bd->connexion;

		// Liste des attributs
		private $id;
		private $login;
		private $mdp;
		
		// Créer un conseiller
		public function nouveau($newLog, $newMdp)
		{
			$resultat;
			$this->login = $newLog;
			$this->mdp = SHA1($newMdp);

			try
			{
				$req = 'CALL CreerConseiller(:login, :mdp, :resultat)';

				$ajout = $connexion->prepare($req);
				$ajout->bindParam(':login',$this->login);
				$ajout->bindParam(':mdp',$this->mdp);

				$ajout->bindParam(':resultat',$resultat, PDO::PARAM_INT);

				$ajout->execute();
				$ajout->closeCursor();
			}
			catch(PDOException $e)
			{
				exit ("Erreur lors de l'exécution de la requête SQL :<br />\n" .  $e -> getMessage());
			}
		}

		// Vérifier le login
		public function connecter($login, $mdp)
		{
			$resultat;
			$this->login = $login;
			$this->mdp = SHA1($mdp);
			
			try
			{
				$req = 'CALL Connexion_Conseiller(:login, :mdp, :resultat)';

				$connecte = $connexion->prepare($req);
				$connecte->bindParam(':login',$login);
				$connecte->bindParam(':mdp',$mdp);

				$ajout->bindParam(':resultat',$resultat, PDO::PARAM_INT);

				$connecte->execute();
				$connecte->closeCursor();

			}
			catch(PDOException $e)
			{
				exit ("Erreur lors de l'exécution de la requête SQL :<br />\n" .  $e -> getMessage());
			}
		}

		// Fermeture de la connexion
		$connexion = null;
	}
?>