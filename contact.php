<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>


<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="section-heading"><i class="fa fa-fw fa-comments-o fa-2x"></i>コンタクト</h1>
            <h4 class="section-subheading">
                <?php display_message_success(); ?>
            </h4> 
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" method="post">
            	<?php send_message(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="お名前" id="name" required data-validation-required-message="お名前を入力してください。">                            
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="メールアドレス" id="email" required data-validation-required-message="メールアドレスを入力してください。">                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="件名" id="subject" required data-validation-required-message="件名を入力してください。">                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="content" class="form-control" rows="6" placeholder="メッセージ" id="message" required data-validation-required-message="メッセージを入力してください。"></textarea>                            
                        </div>
                    </div>
                    
                    <div class="col-lg-12 text-center">
                        <input type="submit" name="send-mail" value="送 信" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div><!-- .row -->
</div><!-- .container -->


<?php include("./front/footer.php"); ?>