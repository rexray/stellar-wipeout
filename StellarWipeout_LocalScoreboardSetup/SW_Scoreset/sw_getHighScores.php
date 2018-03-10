<?php
$dbuser = 'usernameGoesHere';
$dbpassword = 'passwordGoesHere';
$dbName = 'stellarWipeout_data';
$dbhost = 'localhost';
$dbport = 3306;

try {
	$db = new PDO("mysql:host=$dbhost;dbname=$dbName", $dbuser, $dbpassword);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$scores = 'SELECT * FROM sw_highscores ORDER BY score DESC LIMIT 20';
	foreach ($db->query($scores) as $row) {
		echo $row['name'] . "||" . $row['score'] . "||";
	}
} catch (PDOException $e) {
	echo $e->getMessage() . "<br>";
	die();
}

$db = null;
?>