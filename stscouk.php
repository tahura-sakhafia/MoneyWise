<?php
$key=" WIZV5CWN0SFH53QG";
$url="https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=TSCO.LON&outputsize=full&apikey=demo".$key;
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);
if(isset($result['Time Series (Daily)'])){
	echo "<table  id='customers' border='1'><tr><th>Date</th><th>Open</th><th>High</th><th>Low</th></tr>";
	foreach($result['Time Series (Daily)'] as $key=>$val){
		echo "<tr><td>$key</td><td>".$val['1. open']."</td><td>".$val['2. high']."</td><td>".$val['3. low']."</td></tr>";
	}
	echo "</table>";
}else{
	echo "Something went wrong";
}
?>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>