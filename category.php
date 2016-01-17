<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>
		

<!-- Page Content -->
<div class="container">

    <!-- Header -->
    <header class="jumbotron hero-spacer">
        <h1>いらっしゃいませ！</h1>
        <p>イーソン・チャン（陳奕迅、Eason Chan，1974年7月27日－）は、中華圏で絶大な人気を誇る香港出身の歌手、俳優。</p>
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