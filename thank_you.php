<?php require_once("./common/config.php"); ?>
<?php require_once("./common/cart.php"); ?>
<?php include("./front/header.php"); ?>


<?php process_transaction(); ?>

<!-- Page Content -->
<div class="container">
	<h1 class="text-center">ありがとうございました！</h1>
</div><!-- container -->

<?php include("./front/footer.php"); ?>