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

		<!-- row --> 
		<div class="row">
		      <h1>チェックアウト</h1>
		<form action="">
		    <table class="table table-striped">
		        <thead>
		        	<tr>
						<th>商品名</th>
						<th>価格</th>
						<th>購入数量</th>
						<th>合計金額</th>		     
		        	</tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td>リンゴ</td>
		                <td>&yen;150</td>
		                <td>2</td>
		                <td>&yen;300</td>		              
		            </tr>
		        </tbody>
		    </table>
		</form>



		<!--  ***********CART TOTALS*************-->
		            
		<div class="col-xs-4 pull-right ">
		<h2>カートの小計</h2>

		<table class="table table-bordered" cellspacing="0">

		<tr class="cart-subtotal">
		<th>商品:</th>
		<td><span class="amount">4点</span></td>
		</tr>
		<tr class="shipping">
		<th>送料および手数料:</th>
		<td>無料で</td>
		</tr>

		<tr class="order-total">
		<th>ご注文合計:</th>
		<td><strong><span class="amount">&yen;1000</span></strong> </td>
		</tr>


		</tbody>

		</table>

		</div><!-- CART TOTALS-->


		 </div><!--Main Content-->


        <hr>


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