 <?php 

function get_list_view_html($missionary_id, $missionary) {
	
	$output = "";

	$output = $output . "<li>";
    $output = $output . '<a href="/missionary.php?id=' . $missionary_id . '">';
    $output = $output . '<img src="' . $missionary["img_path"] . '" alt="' . $missionary["alt"] . '">';
  	$output = $output . '</a>';
    $output = $output . '</li>'; 
	
	return $output;
}


$missionaries = array();
$missionaries[101] = array(
  "first_names" => "Andy & Nancy",
  "last_name" => "Raatz",
  "country" => "Russia",
  "region" => "Eurasia",
  "paragraph" => "Andy and Nancy Raatz are the parents of three beautiful girls. They previously served as missionaries to the country of Moldova. Andy loves photography.",
  "img_path" => "/img/people/raatz.jpeg",
  "alt" => "Raatz Family",
  "email" => "andy.raatz@agmd.org"
  );

$missionaries[102] = array(
	"first_names" => "Jim & Pam",
	"last_name" => "Halpert",
	"country" => "America",
	"region" => "North America",
	"paragraph" => "Jim and Pam Halpert are the parents of two beautiful children. They currently serve as missionaries to Scranton, PA. Jim and Pam mutually love paper.",
	"img_path" => "/img/people/halpert.jpg",
	"alt" => "Halpert Family",
	"email" => "mubatt@wyopub.com"
	);

?> 

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