
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <i class="fa fa-fw fa-dashboard"></i>ダッシュボード <small>統計の概要</small>
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
                        <div class="huge"><?php conut_db("reports"); ?></div>
                        <div>新規受注</div>
                    </div>
                </div>
            </div>
            <a href="index.php?orders&p=0">
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
                        <div class="huge"><?php conut_db("products"); ?></div>
                        <div>商品</div>
                    </div>
                </div>
            </div>
            <a href="index.php?products&p=0">
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
                        <div class="huge"><?php conut_db("categories"); ?></div>
                        <div>カテゴリー</div>
                    </div>
                </div>
            </div>
            <a href="index.php?categories&p=0">
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
                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> 注文パネル</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>注文ID</th>
                                <th>商品名</th>
                                <th>売上高(JPY)</th>
                                <th>注文日</th>
                                <th>注文時間</th>
                                <th>注文者</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php display_dashboard(); ?>                    
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="index.php?reports&p=0">すべてのトランザクションを見る<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- .row -->