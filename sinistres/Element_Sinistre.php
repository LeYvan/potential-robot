<?php
	class ElementsSinistre
	{
		// Attribus
		private $id;
		private $idEvenement;
		private $Type;
		private $Fichier;

		public function __construct($id, $idEvenement, $Type, $Fichier)
		{
			$this->id = $id;
			$this->idEvenement = $idEvenement;
			$this->Type = $Type;
			$this->Fichier = $Fichier;
		}
		public static function nouveauElementSinistre($idEvenement, $Type, $Fichier)
		{
			if($idEvenement == NULL)
			{
				Return "Erreur :L'identifiant de l'evenment ne doit pas etre vide";
			}
			if($Type != "Image" Or $Type != "Video")
			{
				Return "Erreur :Le type doit etre une Image ou un Video";
			}
			if($Fichier == NULL Or $Fichier == "")
			{
				Return "Erreur :Le Fichier ne doit pas etre vide";
			}

			$objetBD = new BD;
			$connexion = $objetBD->connexion;
			try
			{
				$req = $connexion->prepare('CALL Ajouter_Elements_Sinistre(:idEvenement, :Type, :Fichier)');
				$req->execute(array('idEvenement' => $idEvenement,
									'Type' => $Type,
									'Fichier' => $Fichier));
			} 
			catch (PDOException $e) {
				exit( "Erreur lors de l'exécution de la StoredProc :<br />\n" .  $e -> getMessage() . "<br />\n StoredProc Lister_Sinistres");
			}
			$req->closeCursor();
        	$connexion = null;
		}
	}
?>