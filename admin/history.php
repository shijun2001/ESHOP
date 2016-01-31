<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            <i class="fa fa-fw fa-calculator"></i>購入履歴
        </h1>
        <h4 class="bg-success"><?php display_message(); ?></h4>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品ID</th>
                    <th>注文ID</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>数量</th>
                    <th>合计金額</th>            
                    <th>注文日</th>
                    <th>注文時間</th>
                </tr>
            </thead>
            <tbody>
                <?php display_history(); ?>
            </tbody>
        </table>
    </div>
</div><!-- col-md-12 -->