<?php include("inc/missionaries.php"); 

$missionary_id = $_GET["id"];
$missionary = $missionaries[$missionary_id];

?>
<?php
$pageTitle = "";
include('inc/header.php'); ?>
  
<!-- Section -->
      
    <section>
      <div class="profile">
      <img src="<?php echo $missionary["img_path"]; ?>" alt="<?php echo $missionary["alt"]; ?>">
        <div class="buttons">
          <ul>
            <a href="#pray"><li class="pray"></li></a>
            <a href="#give"><li class="give"></li></a>
            <a href="#go"><li class="go"></li></a>
          </ul>
        </div>
      </div>
      <div class="text">
        <h1><?php echo $missionary["first_names"]; ?> </h1>
        <h2><?php echo $missionary["last_name"]; ?></h2>
        <h3><?php echo $missionary["country"]; ?>, <?php echo $missionary["region"]; ?></h3>
        
        <span><?php echo $missionary["paragraph"]; ?></span>
      </div>
      
    </section>
      
    <footer></footer>
  </body>
</html>