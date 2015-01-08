<?php

	class Sinistre
	{
		// Attribus
		private $id;
		private $titre;
		private $Categorie;
		private $Description;
		private $GeoPosX;
		private $GeoPosY;
		private $afficher;
		private $date;

		// Un array qui contient les éléments de sinistres
		private $elements = array();

		// Remplir les attribus du sinistre spécifié
		public function __construct($id, $titre, $Categorie, $Description,
									$GeoPosX, $GeoPosY, $afficher, $date)
		{
			$this->id = $id;
			$this->titre = $titre;
			$this->Categorie = $Categorie;
			$this->Description = $Description;
			$this->GeoPosX = $GeoPosX;
			$this->GeoPosY = $GeoPosY;
			$this->afficher = $afficher;
			$this->date = $date;
			
			$BD = new BD;
			$connexionBD = $BD->connexion;
			try
			{
				$requete = $connexion->prepare('CALL Lister_elements_sinistre()');
				$requete->execute();
				while($donnees = $requete->fetch())
				{
					$elementSinistre = new ElementsSinistre(htmlspecialchars($donnees['id']),
															htmlspecialchars($donnees['idEvenement'])
															htmlspecialchars($donnees['Type'])
															htmlspecialchars($donnees['Fichier']));
					array_push($elements, $elementSinistre);
				}
			} 
			catch (PDOException $e) {
				exit( "Erreur lors de l'exécution de la requête StoredProc :<br />\n" .  $e -> getMessage() . "<br />\n StoredProc Lister_Element_Sinistre");
			}
			$requete->closeCursor();
        	$connexionBD = null;
		}

		public static function nouveauSinistre($titre, $Categorie, $Description, $GeoPosX,
											   $GeoPosY, $date, $arrayElementS)
		{
			if($titre == NULL Or $titre == "")
			{
				Return "Erreur :Le Titre ne doit pas etre vide";
			}
			if($Categorie == NULL Or $Categorie == "")
			{
				Return "Erreur :La Categorie ne doit pas etre vide";
			}
			if($Description == NULL Or $Description == "")
			{
				Return "Erreur :La Description ne doit pas etre vide";
			}
			if($GeoPosX == NULL)
			{
				Return "Erreur :La position X ne doit pas etre vide";
			}
			if($GeoPosY == NULL)
			{
				Return "Erreur :La position Y ne doit pas etre vide";
			}
			if($date == NULL)
			{
				Return "Erreur :La Date ne doit pas etre vide";
			}

			$objetBD = new BD;
			$connexion = $objetBD->connexion;
			try
			{
				$req = $connexion->prepare('CALL Ajouter_Sinistres(:titre, :Categorie, :Description, :GeoPosX, :GeoPosY)');
				$req->execute(array('titre' => $titre,
									'Categorie' => $Categorie,
									'Description' => $Description,
									'GeoPosX' => $GeoPosX,
									'GeoPosY' => $GeoPosY));
			} 
			catch (PDOException $e) {
				exit( "Erreur lors de l'exécution de la StoredProc :<br />\n" .  $e -> getMessage() . "<br />\n StoredProc Lister_Sinistres");
			}
			$req->closeCursor();
        	$connexion = null;

        	// Enregistre les Elements du sinistre
        	foreach ($arrayElementS as $Element){
        		nouveauElementSinistre($Element->idEvenement, $Element->Type, $Element->Fichier);
        	}
		}

		public static function supprimerSinistre($id)
		{
			$objetBD = new BD;
			$connexion = $objetBD->connexion;
			try
			{
				$req = $connexion->prepare('CALL Changer_Afficher_Sinistre(:id, :afficher)');
				$req->execute(array('id' => $id,
									'afficher' => true));
			} 
			catch (PDOException $e) {
				exit( "Erreur lors de l'exécution de la StoredProc :<br />\n" .  $e -> getMessage() . "<br />\n StoredProc Changer_Afficher_Sinistre");
			}
			$req->closeCursor();
        	$connexion = null;
		}
		public static function afficherSinistre($id)
		{
			$objetBD = new BD;
			$connexion = $objetBD->connexion;
			try
			{
				$req = $connexion->prepare('CALL Changer_Afficher_Sinistre(:id, :afficher)');
				$req->execute(array('id' => $id,
									'afficher' => false));
			} 
			catch (PDOException $e) {
				exit( "Erreur lors de l'exécution de la StoredProc :<br />\n" .  $e -> getMessage() . "<br />\n StoredProc Changer_Afficher_Sinistre");
			}
			$req->closeCursor();
        	$connexion = null;
		}
	}

	class Sinistres
	{
		private $liste = array();

		public function __construct($limite)
		{
			$objetBD = new BD;
			$connexion = $objetBD->connexion;
			try
			{
				$req = $connexion->prepare('CALL Lister_Sinistres()');
				$req->execute();
				// Pour cree une limite de sinistres a retourner
				$i = 0
				while($donnees = $req->fetch() OR $i = $limite)
				{
					$i = $i + 1;
					$sinistre = new Sinistre(htmlspecialchars($donnees['id']),
											 htmlspecialchars($donnees['Titre']),
											 htmlspecialchars($donnees['Categorie']),
											 htmlspecialchars($donnees['Description']),
											 htmlspecialchars($donnees['GeoPosX']),
											 htmlspecialchars($donnees['GeoPosY']),
											 htmlspecialchars($donnees['afficher']),
											 htmlspecialchars($donnees['date']));
					array_push($liste, $sinistre);
				}
			} 
			catch (PDOException $e) {
				exit( "Erreur lors de l'exécution de la StoredProc :<br />\n" .  $e -> getMessage() . "<br />\n StoredProc Lister_Sinistres");
			}
			$req->closeCursor();
        	$connexion = null;
		}

		public function getAll()
		{
			return $this->liste;
		}
	}
?>