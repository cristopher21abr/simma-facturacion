# Historio de Servicios Reportados
# Line

SELECT CONCAT(MONTHNAME(fecha),', ',YEAR(fecha)) AS Item,COUNT(DISTINCT idmanifiesto,idgenerador,fecha) AS Cantidad
FROM manifiesto AS man INNER JOIN relgenman USING(idmanifiesto) INNER JOIN generador AS gen USING(idgenerador)
__WHR__ AND fecha <= CURDATE()
	AND fecha >= CONCAT(YEAR(ADDDATE(CURDATE(),INTERVAL -6 MONTH)),'-',IF(MONTH(ADDDATE(CURDATE(),INTERVAL -6 MONTH))<10,'0',''),MONTH(ADDDATE(CURDATE(),INTERVAL -6 MONTH)),'-01')
	AND 
		(
			(motivo IS NOT NULL AND motivo != '')
			OR idmanifiesto IN (SELECT idmanifiesto FROM relmanrec)
		)
GROUP BY CONCAT(MONTHNAME(fecha),', ',YEAR(fecha))
ORDER BY FECHA ASC