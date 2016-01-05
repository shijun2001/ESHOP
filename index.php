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
				<div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">&yen;100</h4>
                            <h4><a href="item.php">商品 1</a></h4>
                            <p><a target="_blank" href="https://www.amazon.co.jp">Amazon- https://www.amazon.co.jp</a>でこのオンラインストアのアイテムのように多くの情報を参照してください。</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">(100)</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <img src="http://placehold.it/320x150" alt="">
                        <div class="caption">
                            <h4 class="pull-right">&yen;10000</h4>
                            <h4><a href="item.php">商品 2</a></h4>
                            <p><a target="_blank" href="https://www.amazon.co.jp">Amazon- https://www.amazon.co.jp</a>でこのオンラインストアのアイテムのように多くの情報を参照してください。</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">(10)</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                            </p>
                        </div>
                    </div>
                </div> 

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