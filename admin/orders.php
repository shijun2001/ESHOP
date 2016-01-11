<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
           <i class="fa fa-fw fa-credit-card"></i>すべての注文
        </h1>
        <h4 class="bg-success"><?php display_message(); ?></h4>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>注文ID</th>
                    <th>注文量</th>
                    <th>トランザクション</th>
                    <th>通貨</th>
                    <th>状態</th>
                    <th>注文日</th>
                    <th>注文時間</th>
                </tr>
            </thead>
            <tbody>                
                <?php display_orders(); ?>                
            </tbody>
        </table>        
    </div>
</div><!-- col-md-12 -->