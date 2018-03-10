<?php
$dbuser = 'usernameGoesHere';
$dbpassword = 'passwordGoesHere';
$dbName = 'stellarWipeout_data';
$dbhost = 'localhost';
$dbport = 3306;

try {
	$db = new PDO("mysql:host=$dbhost;dbname=$dbName", $dbuser, $dbpassword);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage() . "<br>";
	die();
}

$name = ($_POST['name']);
$score = ($_POST['score']);

$stmt = $db->prepare("INSERT INTO sw_highscores(name, score) VALUES (:name, :score)");
$stmt->bindParam(":name", $name, PDO::PARAM_STR);
$stmt->bindParam(":score", $score, PDO::PARAM_INT);
$stmt->execute();

$scores = 'SELECT * FROM sw_highscores ORDER BY score DESC LIMIT 20';
foreach ($db->query($scores) as $row) {
	echo $row['name'] . "||" . $row['score'] . "||";
}

$db = null;
?>