 <?php /*

function get_missionaries_all() {

try {
	$db = new PDO("mysql:host=localhost;dbname=vitorioa_missionary","vitorioa_matt","Livis100%sexy");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}

try {
	$results = $db->query("SELECT first_names, last_name, country, region, paragraph, img_path, alt, email FROM missionaries ORDER BY num ASC");
	echo "Our query ran succesfully.";
} catch (Exception $e) {
	echo "Data could not be retrieved from the database.";
	exit;
}

$missionaries = ($results->fetchAll(PDO::FETCH_ASSOC));

return $missionaries;

}

*/?>