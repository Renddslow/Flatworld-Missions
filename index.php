<?php require_once("inc/config.php"); ?>
<?php require_once("inc/missionaries.php"); 
$missionaries = get_missionaries_all();
?>


<?php 

$pageTitle = "Flatworld";
include('inc/header_main.php'); ?>

<!-- Section -->
    
  <section>
    <ul id="gallery">
     <?php foreach($missionaries as $missionary) {
          echo get_list_view_html($missionary);
        } ?>
    </ul>
  </section>
  <footer>
  </footer>
  </body>
</html> 