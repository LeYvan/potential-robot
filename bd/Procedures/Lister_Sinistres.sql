CREATE DEFINER=`root`@`localhost` PROCEDURE `Lister_Evenement`()
BEGIN
	SELECT * FROM evenement; 
END