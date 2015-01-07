CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CreerUtilisateur`(IN courriel varchar(63),
										IN pass varchar(45),
                                        IN telephone varchar(10),
                                        IN codePostal varchar(6),
                                        OUT resultat BOOLEAN)
BEGIN

 DECLARE EXIT HANDLER FOR 1062 
	set resultat = false;

    set resultat = true;

    IF courriel IS NULL THEN 
		set resultat = false;
	END IF;

    IF pass IS NULL THEN 
		set resultat = false;
	END IF;

    IF telephone IS NULL THEN 
		set resultat = false;
	END IF;

    IF codePostal IS NULL THEN 
		set resultat = false;
	END IF;
    
    IF resultat THEN
		INSERT INTO Inscription (CodePostal,Telephone,Courriel,motDePasse)
		VALUES (codePostal, telephone, courriel, SHA1(pass));
	END IF;
    
END