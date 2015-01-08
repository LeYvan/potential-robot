CREATE DEFINER=`root`@`localhost` PROCEDURE `Changer_Afficher_Sinistre`(IN Id_S INT,
											  IN afficher boolean)
BEGIN
	IF afficher THEN
		UPDATE sinistres
		SET    
			afficher = 1                    
		WHERE  
			id = Id_S;
    ELSE
		UPDATE sinistres
		SET    
			afficher = 0                    
		WHERE  
			id = Id_S;
    END IF;
END