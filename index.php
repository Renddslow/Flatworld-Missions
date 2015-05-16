<?php include("/inc/missionaries.php"); ?>
<?php 

$pageTitle = "Flatworld";

include("/inc/header_main.php"); 
?>


<!-- Section -->
    
  <section>
    <ul id="gallery">
      <?php foreach($missionaries as $missionary_id => $missionary) {
        echo "<li>";
        echo '<a href="/missionary.php?id=' . $missionary_id . '">';
        echo '<img src="' . $missionaries["img_path"] . '" alt="' . $missionaries["last_name"] . '">'; 
        </a>
      </li>
    </ul>
  </section>
  <footer>
    <p>&copy;<?php echo date('Y'); ?> @Renddslow</p>
  </footer>
  </body>
</html>