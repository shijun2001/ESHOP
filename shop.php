<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>


<!-- Page Content -->
<div class="container">
    <!-- Header -->
    <header>
        <h1><i class="fa fa-fw fa-archive fa-2x"></i>ショップ</h1>
    </header>
    <hr>

    <!-- Page Features -->
    <div class="row text-center">
        <?php get_products_in_shop_page(); ?>        
    </div><!-- row -->
</div><!-- container -->


<?php include("./front/footer.php"); ?>