CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Lister_Cat`()
    COMMENT 'Liste les catégories de sinistre.'
BEGIN
	SELECT CategorieSinistre.*, COUNT(Sinistres.id) AS nbSinistres FROM CategorieSinistre
		LEFT JOIN Sinistres ON CategorieSinistre.id = Sinistres.Categorie
        GROUP BY CategorieSinistre.id, CategorieSinistre.Nom;
END