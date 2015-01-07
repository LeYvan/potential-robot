CREATE PROCEDURE `Ajouter_Sinistres` (
		IN  Titre_Sinistre          varchar(255),
		IN  Categorie_Sinistre      INT,
		IN  Description_Sinistre    varchar(255),
		IN  GeoPosX_Sinistre        float,
		IN  GeoPosY_Sinistre        float,
		OUT resultat  		        INT)
BEGIN
	DECLARE countCatergorie INT;
    
	SELECT COUNT(id) into countCatergorie FROM categorieSinistres WHERE id = Categorie_Sinistre;
    
    if countCatergorie != 0 then
		INSERT INTO evenement(
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