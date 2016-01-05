<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>
		

<!-- Page Content -->
<div class="container">

    <!-- Header -->
    <header class="jumbotron hero-spacer">
        <h1>いらっしゃいませ！</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <p><a class="btn btn-primary btn-large">アクション!</a>
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
</div><!-- .container -->


<?php include("./front/footer.php"); ?>