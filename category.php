<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>
		

<!-- Page Content -->
<div class="container">

    <?php
        $query = query("SELECT * FROM categories WHERE cat_id = " . escape_string($_GET['id']) . " ");
        confirm($query);
        while($row = fetch_array($query)):
    ?>

    <!-- Header -->
    <header class="jumbotron hero-spacer">
        <h1>いらっしゃいませ！</h1>
        <p id="cat-intro"><?php echo $row['cat_desc']; ?></p>
        <p>
            <a href='javascript:history.go(-1);' class='btn btn-primary'>こちらで前のページに戻る</a>
        </p>
    </header>
    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>最新の商品</h3>
        </div>
    </div><!-- .row -->

    <!-- Page Features -->
    <div class="row text-center">
        <?php get_products_in_cat_page(); ?>
    </div><!-- .row -->
	<hr>

    <?php endwhile; ?>
</div><!-- .container -->


<?php include("./front/footer.php"); ?>