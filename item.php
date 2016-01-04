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
	                <a class="navbar-brand" href="index.html">XXX Eショップ</a>
	            </div>
	            <!-- Top navagation -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav">
	                    <li>
	                        <a href="shop.html">ショップ</a>
	                    </li>
	                    <li>
	                        <a href="login.html">ログイン</a>
	                    </li>
	                    <li>
	                        <a href="admin.html">アドミン</a>
	                    </li>
	                     <li>
	                        <a href="checkout.html">チェックアウト</a>
	                    </li>
	                    <li>
	                        <a href="contact.html">コンタクト</a>
	                    </li>
	                </ul>
	            </div><!-- .collapse -->
			</div><!-- .container -->
		</nav>
		

		<!-- Page Content -->
		<div class="container">
       		<!-- Side Navigation -->
            <div class="col-md-3">
                <p class="lead">カテゴリー</p>
                <div class="list-group">
                    <a href="category.html" class="list-group-item">カテゴリー 1</a>
					<a href="category.html" class="list-group-item">カテゴリー 2</a>
					<a href="category.html" class="list-group-item">カテゴリー 3</a>
                </div>
            </div>

			<div class="col-md-9">
				<!-- Row for Image and Short Description-->
				<div class="row">
    				<div class="col-md-7">
       					<img class="img-responsive" src="http://placehold.it/700x600" alt="">
    				</div>
    				<div class="col-md-5">
        				<div class="thumbnail"> 
    						<div class="caption-full">
						        <h4><a href="#">商品 1</a></h4>
						        <hr>
						        <h4 class="">&yen;100</h4>
						    	<div class="ratings">     
							        <p>
							            <span class="glyphicon glyphicon-star"></span>
							            <span class="glyphicon glyphicon-star"></span>
							            <span class="glyphicon glyphicon-star"></span>
							            <span class="glyphicon glyphicon-star"></span>
							            <span class="glyphicon glyphicon-star-empty"></span>
							        </p>
							    </div>          
        						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>   
							    <form action="">
							        <div class="form-group">
							            <input type="submit" class="btn btn-primary" value="カートに入れる">
							        </div>
							    </form>
							</div>
						</div>
					</div>
				</div><!--.row -->
        		<hr>

				<!--Row for Tab Panel-->
				<div class="row">
					<div role="tabpanel">
					<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">ディスクリプション</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">レビュー</a></li>
						</ul>

  						<!-- Tab panes -->
						<div class="tab-content">
    						<div role="tabpanel" class="tab-pane active" id="home">
								<p>商品 1</p>           
							    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
							    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    						</div>
	    					<div role="tabpanel" class="tab-pane" id="profile">
	  							<div class="col-md-6">
							    	<h3>最も参考になったカスタマーレビュー</h3>
							        <hr>
							        <div class="row">
							            <div class="col-md-12">
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star-empty"></span>
							                匿名
							                <span class="pull-right">2015/12/31</span>
							                <p>持ち運ぶのに全く苦労しない軽さ。そして価格が安かったので購入しました。</p>
							            </div>
							        </div>
							        <hr>

							        <div class="row">
							            <div class="col-md-12">
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star"></span>
							                <span class="glyphicon glyphicon-star-empty"></span>
							                匿名
							                <span class="pull-right">2015/12/11</span>
							                <p>初心者に充分な性能!</p>
							            </div>
							        </div>
							        <hr>
							    </div>

	    						<div class="col-md-6">
	        						<h3>レビュー</h3>
									<form action="" class="form-inline">
	    								<div class="form-group addreview">
								            <label for="">&nbsp;名&nbsp;&nbsp;&nbsp;前&nbsp;&nbsp;:</label>
								            <input type="text" class="form-control" >
								        </div>
								        <div class="form-group addreview">
								            <label for="">Eメール:</label>
								            <input type="test" class="form-control">
								        </div>
								        <div>
								            <h3>評価</h3>
								            <span class="glyphicon glyphicon-star"></span>
								            <span class="glyphicon glyphicon-star"></span>
								            <span class="glyphicon glyphicon-star"></span>
								            <span class="glyphicon glyphicon-star"></span>
								        </div>
	        							<br>            
							            <div class="form-group">
							            	<textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
							            </div>
	        							<br><br>
							            <div class="form-group">
							                <input type="submit" class="btn btn-primary" value="送 信">
							            </div>
	    							</form>
	    						</div>
							</div><!-- .tab-pane -->
						</div><!-- .tab-content -->
					</div><!-- tabpanel -->
				</div><!--Row for Tab Panel-->
			</div><!-- .col-md-9 -->
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


		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
	</body>

</html>