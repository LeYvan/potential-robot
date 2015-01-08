<?php

	class Sinistre
	{
		// Attribus
		private $id;
		private $titre; // etc.

		// Un array qui contient les éléments de sinistres
		private $elements;

		// Remplir les attribus du sinistre spécifié
		public function __construct($id)
		{
			// Remplir les attribus de la classe du sinistre
			// Aller checher les éléments du sinistre
		}

		public static function nouveau(/* tout les attribus d'un sinistre */, 
									   /* array d'élément de sinistre */)
		{
			// Validation des attribus
			// Enrgistrement du sinistre
			// Enregistrement des éléments de sinistre
		}

		public static function supprimer($id)
		{
			// Switcher le flag afficher dans le sinistre correspondant
		}
	}

	class Sinistres
	{
		private $liste;

		public function __construct($limite)
		{
			// remplir liste
		}

		public function getAll()
		{
			return $this->liste;
		}
	}
?>