<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            <i class="fa fa-fw fa-table"></i>すべての商品
        </h1>
        <h4 class="bg-success"><?php display_message(); ?></h4>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>商品ID</th>
                    <th>商品名</th>
                    <th>イメージ</th>
                    <th>カテゴリー</th>
                    <th>売価</th>
                    <th>在庫数量</th>
                </tr>
            </thead>
            <tbody>
                <?php display_products(); ?>
            </tbody>
        </table>
    </div>
</div><!-- col-md-12 -->