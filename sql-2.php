<?php
mysql_query(
"SELECT DISTINCT 
	`Table1`.`Col1` AS `Table1Col1`,
	`Table1`.`Col2` AS `Table1Col2`,
	`Table1`.`Col3` AS `Table1Col3`,
	`Table1`.`Col4` AS `Table1Col4`,
	`Table2`.`Col1` AS `Table2Col1`,
	`Table2`.`Col2` AS `Table2Col2`,
	`Table2`.`Col3` AS `Table2Col3`,
	`Table2`.`Col4` AS `Table2Col4`

FROM `Table2`

	LEFT OUTER JOIN `Table1` AS `Table1Temp1` ON 
	`Table1Temp1`.`Col1` = `Table2`.`Col1`
	
	LEFT OUTER JOIN `Table1` AS `Table1Temp2` ON 
	`Table1Temp2`.`Col1` = `Table2`.`Col2`
	
	LEFT OUTER JOIN `Table1` AS `Table1Temp3` ON 
	`Table1Temp3`.`Col2` = `Table2`.`Col3`

WHERE 
	(
		`Table1Temp1`.`Id` IS NULL OR
		`Table1Temp2`.`Id` IS NULL OR
		`Table1Temp3`.`Id` IS NULL
	)
	AND `Table2`.`Date`	>= '2015-06-01' 
	AND `Table2`.`Date` <= '2015-07-01'
ORDER BY `Table2`.`Date` DESC");

/*

SELECT DISTINCT 
	`Table1Temp1`.`Col1` AS `Table1Col1`,
	`Table1Temp1`.`Col2` AS `Table1Col2`,
	`Table1Temp1`.`Col3` AS `Table1Col3`,
	`Table1Temp1`.`Col4` AS `Table1Col4`,
	`Table2`.`Col1` AS `Table2Col1`,
	`Table2`.`Col2` AS `Table2Col2`,
	`Table2`.`Col3` AS `Table2Col3`,
	`Table2`.`Col4` AS `Table2Col4`

FROM `Table2`

	LEFT OUTER JOIN `Table1` AS `Table1Temp1` ON 
	`Table1Temp1`.`Col1` = `Table2`.`Col1`
	
	LEFT OUTER JOIN `Table1` AS `Table1Temp2` ON 
	`Table1Temp2`.`Col1` = `Table2`.`Col2`
	
	LEFT OUTER JOIN `Table1` AS `Table1Temp3` ON 
	`Table1Temp3`.`Col2` = `Table2`.`Col3`

WHERE 
	(
		`Table1Temp1`.`Id` IS NULL OR
		`Table1Temp2`.`Id` IS NULL OR
		`Table1Temp3`.`Id` IS NULL
	)

 * /

/*

SELECT DISTINCT 

	`Table1`.`Col1` AS `Table1Col1`,
	`Table1`.`Col2` AS `Table1Col2`,
	`Table1`.`Col3` AS `Table1Col3`,
	`Table1`.`Col4` AS `Table1Col4`,
	`Table2`.`Col1` AS `Table2Col1`,
	`Table2`.`Col2` AS `Table2Col2`,
	`Table2`.`Col3` AS `Table2Col3`,
	`Table2`.`Col4` AS `Table2Col4`

FROM Table1 RIGHT JOIN Table2 ON Table1.Col1 = Table2.Col2
	AND `Table2`.`Date`	>= '2015-06-01' 
	AND `Table2`.`Date` <= '2015-07-01'
ORDER BY `Table2`.`Date` DESC

 * */
