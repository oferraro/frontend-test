<?php

$exchangeRates = array(
'USD' => 1.2,
'GBP' => 1.4,
'CAD' => 1.12,
'AUD' => 1.23,
'NOK' => 12.2,
'SEK' => 11.3,
'RUB' => 31.2);

mysql_query(
"SELECT 
	`CustomerIdentifier`,
	`GameIdentifier`,
	`Percentage`,
	LEFT(`EndingTime`,10) as `DateEnding`,
	MAX(`InGameRoundIdentifier`) AS `LastInGameRoundIdentifier`,
	SUM(`TotalAmountWon`) as `Total`,

	CASE TotalAmountWon
		WHEN UPPER(`CurrencyISO`) = 'USD' THEN ROUND((SUM(`TotalAmountWon`) / ".(isset($exchangeRates['USD']) ? $exchangeRates['USD'] : 1)."),2)
		WHEN UPPER(`CurrencyISO`) = 'GBP' THEN ROUND((SUM(`TotalAmountWon`) / ".(isset($exchangeRates['GBP']) ? $exchangeRates['GBP'] : 1)."),2)
		WHEN UPPER(`CurrencyISO`) = 'CAD' THEN ROUND((SUM(`TotalAmountWon`) / ".(isset($exchangeRates['CAD']) ? $exchangeRates['CAD'] : 1)."),2)
		WHEN UPPER(`CurrencyISO`) = 'AUD' THEN ROUND((SUM(`TotalAmountWon`) / ".(isset($exchangeRates['AUD']) ? $exchangeRates['AUD'] : 1)."),2)
		WHEN UPPER(`CurrencyISO`) = 'NOK' THEN ROUND((SUM(`TotalAmountWon`) / ".(isset($exchangeRates['NOK']) ? $exchangeRates['NOK'] : 1)."),2)
		WHEN UPPER(`CurrencyISO`) = 'SEK' THEN ROUND((SUM(`TotalAmountWon`) / ".(isset($exchangeRates['SEK']) ? $exchangeRates['SEK'] : 1)."),2)
		WHEN UPPER(`CurrencyISO`) = 'RUB' THEN ROUND((SUM(`TotalAmountWon`) / ".(isset($exchangeRates['RUB']) ? $exchangeRates['RUB'] : 1)."),2)
		ELSE ROUND(SUM(`TotalAmountWon`),2)
	END AS `totalEuro`

FROM `GameTransactions`

WHERE 
	`InGameRoundIdentifier` 	>  '54343'
	AND `EndingTime` 			>= '2015-07-01 00:00:00'
	AND `EndingTime` 			<= '2015-07-15 23:59:59'
	AND `Percentage`   			>  0

GROUP BY `CustomerIdentifier`,`GameIdentifier`,`Percentage`,`DateEnding`
HAVING `Total` > 0");

/*
It takes these fields from the Table GameTransactions:
- the CustomerIdentifier
- the GameIdentifier
- the Percentage
- the first 10 characters of the EndingDate (ie:2015-09-10) name the column DateEnding
- The sum of the InGameRoundIdentifiers grouped by CustomerIdentifier, GameIdentifier, percentage and DateEnding naming the column Total
It uses the CASE to decide which values use, depending of the CurrencyISO field and the array, for do the accounts which consists in:
Round the sum of the TotalAmountWon field, divided by the corresponding exchange rate or 1 if it doesn't exist for that case and finally uses 2 decimals for the result

All this for the values that have the InGameRoundIdentifier bigger than 54343, and the EndingTime between the 0 hours of 2015-07-01 and the last minute of the day 2015-07-15 and the percentage bigger than 0

 * */
