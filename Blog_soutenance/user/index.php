﻿<?php
// Inclure le fichier header.php
include("includes/header.php");
// Inclure le fichier sidebar.php
include("includes/sidebar.php");

?>
<div class="grid_10">

  <div class="box round first grid">
    <h2> Dashboard</h2>
    <div class="block">
      Bonjour <?php echo $_SESSION["username"]; ?>
    </div>
  </div>
</div>

<?php
// Inclure le fichier footer.php
include("includes/footer.php");


?>