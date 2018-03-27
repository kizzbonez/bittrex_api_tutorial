<?php

$pageresult = file_get_contents('https://bittrex.com/api/v1.1/public/getcurrencies');
$jresult =json_decode($pageresult,true);


echo '<table border="1">';
echo '<thead>
      <th>Currency</th>
	  <th>Value</th>
     </thead>';
foreach($jresult['result'] as $value)
{
	echo '<tr>';
	echo  '<td>'.$value['Currency'].'</td><td>'.$value['CurrencyLong'].'</td>';
	echo '</tr>';
	
}
echo '</table>';












?>