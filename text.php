<?php
	include('./DealMySql.class.php');

	$connect = new DealMySql('test', 'localhost', 'root', 'root');
	$result = $connect->MySqlQuery('select * from user');
	while($row = mysql_fetch_assoc($result)) {
		echo $row['name'];
		echo $row['pwd'];
	}
?>
