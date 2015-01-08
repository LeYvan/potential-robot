CREATE DEFINER=`root`@`localhost` PROCEDURE `Lister_Sinistres`()

BEGIN
	
	SELECT * FROM sinistres ORDER BY date DESC; 

END