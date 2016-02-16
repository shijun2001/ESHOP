<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>


<!-- Page Content -->
<div class="container">
	<header>
        <h1 class="text-center">ログイン</h1>
        <div class="front-logo">                                
            <span class='fa fa-user fa-5x'></span>
        </div>
        <h4 class="text-center bg-warning"><?php display_message_warning(); ?></h4>
    	<div class="col-sm-6 col-sm-offset-3">         
        	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <?php login_user(); ?>
            	<div class="form-group bottom-space">
            		<label for="email" class="col-sm-3 control-label">会員ID:</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" class="form-control" placeholder="メールアドレス">
                    </div>
            	</div>
            	<div class="form-group bottom-space">
            		<label for="password" class="col-sm-3 control-label">パスワード:</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control">   
                    </div>             	
            	</div>

            	<div class="form-group bottom-space">
                    <div class="col-xs-3 col-xs-offset-3">
                        <input type="submit" name="submit" value="サインイン" class="btn btn-primary">
            		</div>
                    <div class="col-xs-3">
                        <a href="entry.php" class="btn"><u>新規登録</u></a>
                    </div>
            	</div>
        	</form>
    	</div>
	</header>
</div><!-- .container -->

<?php include("./front/footer.php"); ?>