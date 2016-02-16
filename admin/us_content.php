
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <i class="fa fa-fw fa-dashboard"></i>ダッシュボード
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-money fa-fw"></i> 統計の概要
            </li>
        </ol>
    </div>
</div><!-- .row -->

<!-- FIRST ROW WITH PANELS -->

<div class="row">
    <div class="col-lg-4 col-md-4">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php 
                                if(isset($_SESSION['item_quantity'])){
                                    echo $_SESSION['item_quantity']; 
                                }else{
                                    echo 0;
                                }                                
                            ?>
                        </div>
                        <div>カート</div>
                    </div>
                </div>
            </div>
            <a href="../checkout.php">
                <div class="panel-footer">
                    <span class="pull-left">カートに行く</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-calculator fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php conut_db_user("reports"); ?></div>
                        <div>新規購入</div>
                    </div>
                </div>
            </div>
            <a href="index.php?history&p=0">
                <div class="panel-footer">
                    <span class="pull-left">詳細を見る</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-leaf fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $_SESSION['nickname']; ?></div>
                        <div>個人情報</div>
                    </div>
                </div>
            </div>
            <a href="index.php?personal">
                <div class="panel-footer">
                    <span class="pull-left">更新をする</span>
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
                <h3 class="panel-title"><i class="fa fa-fw fa-bar-chart-o"></i> 注文パネル</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>注文ID</th>
                                <th>商品名</th>
                                <th>価格(JPY)</th>
                                <th>注文日</th>
                                <th>注文時間</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php display_dashboard_user(); ?>                    
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?history&p=0">すべてのトランザクションを見る<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- .row -->