CREATE DEFINER=`root`@`localhost` PROCEDURE `Ajouter_Sinistres`(
		IN  Titre_Sinistre          varchar(255),
		IN  Categorie_Sinistre      INT(11),
		IN  Description_Sinistre    varchar(255),
		IN  GeoPosX_Sinistre        float,
		IN  GeoPosY_Sinistre        float,
		OUT resultat  		        INT(1))
BEGIN
	DECLARE countCatergorie INT;
    
	SELECT COUNT(id) into countCatergorie FROM categoriesinistre WHERE id = Categorie_Sinistre;
    
    if countCatergorie then
		INSERT INTO sinistres(
			Titre,
			Categorie,
			Description,
			GeoPosX,
			GeoPosY) 
		values(
			Titre_Sinistre,
			Categorie_Sinistre,
			Description_Sinistre,
			GeoPosX_Sinistre,
			GeoPosY_Sinistre);
		SET resultat = 1;
	else
		SET resultat = -1;
	end if;
end