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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Shi Jun<b class="caret"></b></a>
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


                    <h1 class="page-header">
                        すべての商品
                    </h1>


                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>商品ID</th>
                                <th>商品名</th>
                                <th>カテゴリー</th>
                                <th>価格</th>
                                <th>数量</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><br>
                                    <a href=""><img width="100" src="#" alt=""></a>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a class="btn btn-danger" href="#"><span class='glyphicon glyphicon-remove'></span></a></td>
                            </tr>
                        </tbody>
                    </table>


                </div><!-- .container-fluid -->

            </div><!-- #page-wrapper -->

        </div><!-- #wrapper -->

        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
    </body>

</html>