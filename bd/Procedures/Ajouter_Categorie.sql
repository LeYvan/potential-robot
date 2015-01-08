CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Ajouter_Cat_Sinistre`(IN nomCat VARCHAR(255),
                                        OUT resultat INT)
    COMMENT 'Ajoute une catégorie de sinistre. Retourne un nombre positif si OK, un chiffre négatif si ERREUR.'
BEGIN

	#Erreur de données dupliquée
	#Généralement levée lors de l'ajout d'une catégorie qui existe déjà.
 	DECLARE EXIT HANDLER FOR 1062 
		set resultat = -1;

	#Erreur générale non définie
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
		set resultat = -99;
    
    IF nomCat is null OR nomCat = '' THEN 
		set resultat = -2;
	END IF;
    
    IF resultat is null THEN
		INSERT INTO CategorieSinistre (Nom)
		VALUES (nomCat);
		set resultat = 1;
	END IF;
END