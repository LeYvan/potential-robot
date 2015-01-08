CREATE DEFINER=`root`@`localhost` PROCEDURE `Ajouter_Elements_Sinistre`(IN idEvenement_ES INT,
											  IN Type_ES enum('Image', 'Video'),
                                              IN Fichier_ES varchar(255),
                                              OUT Resultat INT)
BEGIN
	#Erreur générale non définie
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
		set resultat = -99;
        
	IF idEvenement_ES IS NULL then
		SET Resultat = -1;
	End IF;
    
	IF type_ES != "Video" AND type_ES != "Image" THEN
		Set Resultat = -2;
    END IF;
    
    IF type_ES IS NULL THEN
		SET Resultat = -3;
	END IF;
    
    IF Fichier_ES IS NULL THEN
		SET Resultat = -4;
	END IF;
    
    IF Resultat IS NULL THEN
		INSERT INTO elementsinistres (idEvenement, Type, Fichier)
		VALUES (idEvenement_ES, Type_ES, Fichier_ES);
		set resultat = 1;
    END IF;
END