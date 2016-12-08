<?php include 'templates/header.php';?>
<div class="row">
  <h2 class="ttl cyan darken-4">Sign in and buy ! </h2>
  <form id="signin" action="action.php" method="POST" class="col s6">
    <label for="name"> Username</label>
    <input type="text" name="name">
    <label for="passw">Password</label>
    <input type="password" name="passw">
    <button type="submit" name="button" class="btn">Sign in</button>
  </form>
  <div id="list" class="col s6">
    <h3 title="Some robots you might be interested">Some robots you might be interested:</h3>
    <?php
      $scan = scandir("products/");
      foreach($scan as $products){
        echo '<ul><li><img src="img/robot_icon.png">'.substr($products, 0, -5).'</li></ul>';
      }

    ?>
  </div>
</div>
<?php include 'templates/footer.php';?>
