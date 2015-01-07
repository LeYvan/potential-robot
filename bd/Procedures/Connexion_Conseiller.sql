CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Connexion_Conseiller`(IN login varchar(45),
										IN motDePasse char(40),
                                        OUT resultat INT)
    COMMENT 'Vérifie si le login et le mot de passe vont ensemble. Retourne un nombre positif si OK, un chiffre négatif si ERREUR.'
BEGIN
	DECLARE nbRangs Int;
    
	#Erreur générale non définie
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
		set resultat = -99;

    IF motDePasse is null OR motDePasse = '' THEN 
		set resultat = -3;
	END IF;
    
    IF login is null OR login = '' THEN 
		set resultat = -2;
	END IF;

    IF motDePasse is null OR motDePasse = '' THEN 
		set resultat = -3;
	END IF;
    
    IF resultat is null THEN
		SELECT COUNT(*) INTO nbRangs
			FROM Conseillers
            WHERE Conseillers.Login = login AND Conseillers.MotDePasse = sha1(motDePasse);
		set resultat = nbRangs;
	END IF;
    
END