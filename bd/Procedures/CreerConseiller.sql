CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CreerConseiller`(
										IN login varchar(45),
                                        IN pass varchar(45),
                                        OUT resultat INT)
    COMMENT 'Créer un conseiller. Retourne un nombre positif si OK, un chiffre négatif si ERREUR.'
BEGIN

	#Erreur de données dupliquée
	#Généralement levée lors de l'ajout d'un conseiller qui existe déjà.
 	DECLARE EXIT HANDLER FOR 1062 
		set resultat = -1062;

	#Erreur générale non définie
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
		set resultat = -99;

    IF login IS NULL THEN 
		set resultat = -2;
	END IF;

    IF pass IS NULL THEN 
		set resultat = -3;
	END IF;

    IF resultat IS NULL THEN
		INSERT INTO Conseillers (Login, MotDePasse)
		VALUES (Login, SHA1(pass));
		set resultat = 1;
	END IF;
    
END