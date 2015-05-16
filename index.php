<?php 

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
?> 
<?php 

$pageTitle = "Flatworld";
include('inc/header_main.php'); ?>

<!-- Section -->
    
  <section>
    <ul id="gallery">
     <?php foreach($missionaries as $missionary_id => $missionary) {
        echo "<li>";
          echo '<a href="/missionary.php?id=101">';
            echo '<img src="' . $missionary["img_path"] . '" alt="' . $missionary["alt"] . '">';
          echo '</a>';
        echo '</li>'; } ?>
    </ul>
  </section>
  <footer>
  </footer>
  </body>
</html> 