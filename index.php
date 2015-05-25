<?php require_once("inc/config.php"); ?>
<?php require_once("inc/missionaries.php"); 
$missionaries = get_missionaries_all();

?>


<?php 

$pageTitle = "Flatworld";
include('inc/header_main.php'); ?>

<?php 

if (isset($_GET["region"]) && $_GET["region"] == "eurasia") { /* EURASIA */ ?>
  <ul id="gallery">
    <?php foreach($missionaries as $missionary) {
      echo get_missionaries_eurasia($missionary);
    } ?>
  </ul>

<?php } elseif (isset($_GET["region"]) && $_GET["region"] == "africa") { /* AFRICA */ ?>
  <ul id="gallery">
    <?php foreach($missionaries as $missionary) {
      echo get_missionaries_africa($missionary);
    } ?>
  </ul>

<?php } elseif (isset($_GET["region"]) && $_GET["region"] == "asia") { /* ASIA */ ?>
  <ul id="gallery">
    <?php foreach($missionaries as $missionary) {
      echo get_missionaries_asia($missionary);
    } ?>
  </ul>

<?php } elseif (isset($_GET["region"]) && $_GET["region"] == "europe") { /* EUROPE */ ?>
  <ul id="gallery">
    <?php foreach($missionaries as $missionary) {
      echo get_missionaries_europe($missionary);
    } ?>
  </ul>

<?php } elseif (isset($_GET["region"]) && $_GET["region"] == "latin-america") { /* Latin America */ ?>
  <ul id="gallery">
    <?php foreach($missionaries as $missionary) {
      echo get_missionaries_latin_america($missionary);
    } ?>
  </ul>

<?php } elseif (isset($_GET["region"]) && $_GET["region"] == "north-america") { /* North America */ ?>
  <ul id="gallery">
    <?php foreach($missionaries as $missionary) {
      echo get_missionaries_north_america($missionary);
    } ?>
  </ul>

<?php } elseif (isset($_GET["region"]) && $_GET["region"] == "northern-asia") { /* Northern Asia */ ?>
  <ul id="gallery">
    <?php foreach($missionaries as $missionary) {
      echo get_missionaries_northern_asia($missionary);
    } ?>
  </ul>

<?php 


} else { ?>

<!-- Section -->
    
  <section>
    <ul id="gallery">
     <?php foreach($missionaries as $missionary) {
          echo get_list_view_html($missionary);
        } ?>
    </ul>
    <?php } ?>
  </section>
  <footer>
  </footer>
  </body>
</html>

