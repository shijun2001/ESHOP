<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            <i class="fa fa-fw fa-users"></i>すべてのユーザー 
        </h1>
        <h4 class="bg-success"><?php display_message_success(); ?></h4> 
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>イメージ</th>
                    <th>ニックネーム</th>
                    <th>氏名</th>
                    <th>メール</th>
                    <th>電話</th>
                    <th>生年月日</th>
                    <th>性別</th>
                    <th>削除</th>
                </tr>
            </thead>
            <tbody>
                <?php display_users(); ?>
            </tbody>
        </table> <!--End of Table-->
        <!-- <a href="index.php?add_user" class="btn btn-primary">追加</a> -->
    </div>
</div><!-- col-md-12 -->