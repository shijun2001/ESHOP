<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title>アドミン</title>
		<!-- 新 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="css/style.css">	

		<!-- Admin CSS -->
    	<link rel="stylesheet" type="text/css" href="css/admin.css">	

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
	
		<div id="wrapper">

	        <!-- Navigation -->
	        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	            <!-- Brand and toggle get grouped for better mobile display -->

	            <!-- Top item -->
	            <div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				        <span class="sr-only">トグルナビゲーション</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="index.php">Eショップ アドミン</a>
				    <a class="navbar-brand" href="../index.php">ホームページ</a>
				</div>

				<!-- Top Menu Items -->
				<ul class="nav navbar-right top-nav">
					<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Sirine<b class="caret"></b></a>
				        <ul class="dropdown-menu">           
				            <li class="divider"></li>
				            <li>
				                <a href="#"><i class="fa fa-fw fa-power-off"></i>ログアウト</a>
				            </li>
				        </ul>
				    </li>
				</ul>

	            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
				    <ul class="nav navbar-nav side-nav">
				        <li class="active">
				            <a href="#"><i class="fa fa-fw fa-dashboard"></i> ダッシュボード</a>
				        </li>
				        <li>
				            <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> オーダー</a>
				        </li>
				        <li>
				            <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> レポート</a>
				        </li>
				        <li>
				            <a href="#"><i class="fa fa-fw fa-table"></i> 商品</a>
				        </li>
				        <li>
				            <a href="#"><i class="fa fa-fw fa-wrench"></i> 商品を追加</a>
				        </li>        
				        <li>
				            <a href="#"><i class="fa fa-fw fa-desktop"></i> カテゴリー</a>
				        </li>
				        <li>
				            <a href="#"><i class="fa fa-fw fa-wrench"></i> ユーザー</a>
				        </li>			    
				    </ul>
				</div><!-- navbar-collapse -->
	        </nav>

	        <div id="page-wrapper">
	            <div class="container-fluid">
	                <!-- Page Heading -->
	                <div class="row">
	                    <div class="col-lg-12">
	                        <h1 class="page-header">
	                            ダッシュボード <small>統計の概要</small>
	                        </h1>
	                        <ol class="breadcrumb">
	                            <li class="active">
	                                <i class="fa fa-dashboard"></i> ダッシュボード
	                            </li>
	                        </ol>
	                    </div>
	                </div><!-- .row -->

	                <!-- FIRST ROW WITH PANELS -->

	                <div class="row">
	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-yellow">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-shopping-cart fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">124</div>
	                                        <div>新規受注!</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="#">
	                                <div class="panel-footer">
	                                    <span class="pull-left">詳細を見る</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-red">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-support fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">13</div>
	                                        <div>商品!</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="#">
	                                <div class="panel-footer">
	                                    <span class="pull-left">詳細を見る</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>

	                    <div class="col-lg-4 col-md-6">
	                        <div class="panel panel-green">
	                            <div class="panel-heading">
	                                <div class="row">
	                                    <div class="col-xs-3">
	                                        <i class="fa fa-tasks fa-5x"></i>
	                                    </div>
	                                    <div class="col-xs-9 text-right">
	                                        <div class="huge">12</div>
	                                        <div>カテゴリー!</div>
	                                    </div>
	                                </div>
	                            </div>
	                            <a href="#">
	                                <div class="panel-footer">
	                                    <span class="pull-left">詳細を見る</span>
	                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                                    <div class="clearfix"></div>
	                                </div>
	                            </a>
	                        </div>
	                    </div>            
	              
	                </div><!-- .row -->


	                <!-- SECOND ROW WITH TABLES-->

	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="panel panel-default">
	                            <div class="panel-heading">
	                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>トランザクションパネル</h3>
	                            </div>
	                            <div class="panel-body">
	                                <div class="table-responsive">
	                                    <table class="table table-bordered table-hover table-striped">
	                                        <thead>
	                                            <tr>
	                                                <th>注文 #</th>
	                                                <th>注文日</th>
	                                                <th>注文時間</th>
	                                                <th>金額 (JPY)</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                            <tr>
	                                                <td>3326</td>
	                                                <td>10/21/2013</td>
	                                                <td>3:29 PM</td>
	                                                <td>&yen;321</td>
	                                            </tr>
	                                            <tr>
	                                                <td>3325</td>
	                                                <td>10/21/2013</td>
	                                                <td>3:20 PM</td>
	                                                <td>&yen;234</td>
	                                            </tr>
	                                            <tr>
	                                                <td>3324</td>
	                                                <td>10/21/2013</td>
	                                                <td>3:03 PM</td>
	                                                <td>&yen;724</td>
	                                            </tr>
	                                            <tr>
	                                                <td>3323</td>
	                                                <td>10/21/2013</td>
	                                                <td>3:00 PM</td>
	                                                <td>&yen;23</td>
	                                            </tr>
	                                            <tr>
	                                                <td>3322</td>
	                                                <td>10/21/2013</td>
	                                                <td>2:49 PM</td>
	                                                <td>&yen;8345</td>
	                                            </tr>
	                                            <tr>
	                                                <td>3321</td>
	                                                <td>10/21/2013</td>
	                                                <td>2:23 PM</td>
	                                                <td>&yen;245</td>
	                                            </tr>
	                                            <tr>
	                                                <td>3320</td>
	                                                <td>10/21/2013</td>
	                                                <td>2:15 PM</td>
	                                                <td>&yen;5663</td>
	                                            </tr>
	                                            <tr>
	                                                <td>3319</td>
	                                                <td>10/21/2013</td>
	                                                <td>2:13 PM</td>
	                                                <td>&yen;943</td>
	                                            </tr>
	                                        </tbody>
	                                    </table>
	                                </div>
	                                <div class="text-right">
	                                    <a href="#">すべてのトランザクションを見る<i class="fa fa-arrow-circle-right"></i></a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div><!-- .row -->

	            </div><!-- .container-fluid -->

	        </div><!-- #page-wrapper -->

	    </div><!-- #wrapper -->

		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
	</body>

</html>