<?php
  session_start();
  $conex = false;
  if (isset ($_SESSION["conexion"]) && !empty($_SESSION["conexion"])) {
      $conex = $_SESSION["conexion"];
  }
?>
<?php include '../templates/header.php';
    if ($conex === true):?>
    <h2 title="Connected" class="green darken-1 ttl">Welcome you are connected</h2>
    <?php include '../templates/content.php';?>
<?php else: ?>
    <h3 title="not connected" class="red darken-1 ttl">Oops all something went wrong !!</h3>
    <a href="../" class="btn waves-effect waves-light">Try again !!</a>
<?php endif; include '../templates/footer.php'; ?>
