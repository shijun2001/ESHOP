<?php define('REN',true); ?>
<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>


<!-- Page Content -->
<div class="container">
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

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <h4><a href="#">このウェブサイトが好き?</a>
                    </h4>
                    <p>このウェブサイトが好きの場合, 私のgihubページに<a target="_blank" href="https://github.com/shijun2001">このソースコード</a>をチェックアウトすることができます！</p>
                    <a class="btn btn-primary" target="_blank" href="https://github.com/shijun2001">Githubへ</a>
                </div>
        	</div>
    	</div><!-- .col-md-9 -->
	</div><!-- .row -->
</div><!-- .container -->

<!-- Page change Code-->
<!-- <nav>
	<ul class="pagination">
		<li>
			<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li>
			<a href="#" aria-label="Next">
		    	<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav> -->

<?php include("./front/footer.php"); ?>