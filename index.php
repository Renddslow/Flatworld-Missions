<?php include("inc/missionaries.php"); ?>
<?php 

$pageTitle = "Flatworld";
include('inc/header_main.php'); ?>

<!-- Section -->
    
  <section>
    <ul id="gallery">
     <?php foreach($missionaries as $missionary_id => $missionary) {
          echo get_list_view_html($missionary_id, $missionary);
        } ?>
    </ul>
  </section>
  <footer>
  </footer>
  </body>
</html> 