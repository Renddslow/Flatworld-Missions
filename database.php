<?php

try {
$db = new PDO("mysql:host=localhost;dbname=vitorioa_missionary","vitorioa_matt","Livis100%sexy");
var_dump($db);
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}

echo "Woo-hoo!";