<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>

<!-- Page Content -->
<div class="container side-float">
	<div class="row">

		<?php include("./front/side_nav.php"); ?>

		<div class="col-md-9">
			<div class="row carousel-holder">
				<div class="col-md-12">
					<?php include("./front/slider.php"); ?>
				</div><!-- .col-md-12 -->
			</div><!-- .row carousel-holder -->

			<div class="row">
				<?php get_products(); ?> 
                <div class="col-sm-6 col-lg-4 col-md-6">
                    <h4><a href="#">このウェブサイトが好き?</a>
                    </h4>
                    <p>このウェブサイトが好きの場合, 私のGihubページに<a target="_blank" href="https://github.com/shijun2001">このソースコード</a>をチェックアウトすることができます！</p>
                    <a class="btn btn-primary" target="_blank" href="https://github.com/shijun2001">Githubへ</a>                    
                </div>
        	</div>
    	</div><!-- .col-md-9 -->
	</div><!-- .row -->
</div><!-- .container -->


<?php include("./front/footer.php"); ?>