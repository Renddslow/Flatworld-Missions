 <?php 

function get_list_view_html($missionary) {
	
	$output = "";

	$output = $output . "<li>";
    $output = $output . '<a href="/missionary/' . $missionary["mid"] . '/">';
    $output = $output . '<img src="' . $missionary["img_path"] . '" alt="' . $missionary["alt"] . '">';
  	$output = $output . '</a>';
    $output = $output . '</li>'; 
	
	return $output;
}

function get_missionaries_all() {
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

	foreach ($missionaries as $missionary_id => $missionary) {
		$missionaries[$missionary_id]["mid"] = $missionary_id;
	}

	return $missionaries;
}


?> 
