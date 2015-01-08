CREATE DEFINER=`root`@`localhost` PROCEDURE `Lister_elements_sinistre`(IN id_s INT)
BEGIN
	Select * FROM elementsinistres WHERE idEvenement = id_s;
END