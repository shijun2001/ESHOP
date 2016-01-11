
<h1 class="page-header">
    すべてのユーザー 
</h1>
<h4 class="bg-success"><?php display_message(); ?></h4> 



<div class="col-md-12">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ユーザーID</th>
                <th>ニックネーム</th>
                <th>氏名</th>
                <th>メール</th>
                <th>電話</th>
                <th>生年月日</th>
                <th>性別</th>
            </tr>
        </thead>
        <tbody>
            <?php display_users(); ?>
        </tbody>
    </table> <!--End of Table-->
    <!-- <a href="index.php?add_user" class="btn btn-primary">追加</a> -->
</div>
