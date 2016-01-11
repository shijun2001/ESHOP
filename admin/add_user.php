<?php add_user(); ?>
<h1 class="page-header">
    ユーザーの追加
</h1>

<div class="col-md-6 user_image_box">
    <span id="user_admin" class='fa fa-user fa-4x'></span>
</div>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <input type="file" name="file">
        </div>

        <div class="form-group">
            <label for="username">ユーザー名</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Eメール</label>
            <input type="text" name="email" class="form-control">
        </div>

        

        <div class="form-group">
            <label for="password">パスワード</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <a id="user-id" class="btn btn-danger" href="">追加</a>
            <input type="submit" name="add_user" class="btn btn-primary pull-right" value="追加">
        </div>
    </div>

</form>