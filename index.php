<?php include("inc/missionaries.php"); ?>
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