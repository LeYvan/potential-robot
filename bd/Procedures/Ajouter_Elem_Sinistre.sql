CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Ajouter_Element_Sinistre`(IN sinistreId INT,
										IN typeFichier Enum('Image','Video'),
                                        IN fichier VARCHAR(255),
                                        OUT resultat INT)
    COMMENT 'Ajoute un élément au sinistre. Retourne un nombre positif si OK, un chiffre négatif si ERREUR.'
BEGIN

	#Erreur générale non définie
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
		set resultat = -99;
    
    IF fichier is null OR fichier = '' THEN 
		set resultat = -4;
	END IF;
    
    IF typeFichier is null OR typeFichier = '' THEN 
		set resultat = -3;
	END IF;
    
    IF sinistreId is null OR sinistreId = 0 THEN 
		set resultat = -2;
	ELSEIF (SELECT COUNT(*) FROM Sinistres WHERE id = sinistreId) = 0 THEN
		set resultat = -1;
	END IF;
    
    IF resultat is null THEN
		INSERT INTO ElementSinistres (idEvenement,Type,Fichier)
		VALUES (sinistreId,typeFichier,fichier);
		set resultat = 1;
	END IF;
END