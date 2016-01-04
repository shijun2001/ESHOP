<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title>Eショップ</title>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="css/style.css">		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- For mobile display -->
				<div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">トグルナビゲーション</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="index.php">XXX Eショップ</a>
	            </div>
	            <!-- Top navagation -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav">
	                    <li>
	                        <a href="shop.php">ショップ</a>
	                    </li>
	                    <li>
	                        <a href="login.php">ログイン</a>
	                    </li>
	                    <li>
	                        <a href="admin.php">アドミン</a>
	                    </li>
	                     <li>
	                        <a href="checkout.php">チェックアウト</a>
	                    </li>
	                    <li>
	                        <a href="contact.php">コンタクト</a>
	                    </li>
	                </ul>
	            </div><!-- .collapse -->
			</div><!-- .container -->
		</nav>


		<!-- Page Content -->
    	<div class="container">
        	<div class="row">
				<div class="col-md-3">
					<p class="lead">カテゴリー</p>
					<div class="list-group">
						<a href="category.php" class="list-group-item">カテゴリー 1</a>
						<a href="category.php" class="list-group-item">カテゴリー 2</a>
						<a href="category.php" class="list-group-item">カテゴリー 3</a>
					</div>
				</div>

				<div class="col-md-9">
					<div class="row carousel-holder">
						<div class="col-md-12">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img class="slide-image" src="http://placehold.it/800x300" alt="">
									</div>
									<div class="item">
										<img class="slide-image" src="http://placehold.it/800x300" alt="">
									</div>
									<div class="item">
										<img class="slide-image" src="http://placehold.it/800x300" alt="">
									</div>
								</div><!-- .carousel-inner -->
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div><!-- .carousel slide -->
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


    	<div class="container">
        	<hr>
	        <!-- Footer -->
	        <footer>
	            <div class="row">
	                <div class="col-lg-12">
	                    <p>&copy; 2015 By Shi Jun. <a><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>&nbsp; All Rights Reserved.</p>
	                </div>
	            </div>
	        </footer>
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

		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
	</body>

</html>