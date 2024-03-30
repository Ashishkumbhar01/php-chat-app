<?php pageAdd("include/header.php");?>
<?php pageAdd("include/navbar.php");?>
<div class="mt-3">
<h2 class="text-center"> Home Page </h2>
<?php
if(isset($_SESSION['user'])){
?>
<p>Hello <b><?php echo $_SESSION['user']; ?></b></p>
<?php } ?>
</div>
<?php pageAdd("include/footer.php");?>
