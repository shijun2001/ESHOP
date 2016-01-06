<?php define('REN',true); ?>
<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>



<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">コンタクト</h2>
            <h3 class="section-subheading">
                <?php display_message(); ?>
            </h3> 
        </div>
    </div>
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
                            <textarea name="message" class="form-control" placeholder="メッセージ" id="message" required data-validation-required-message="メッセージを入力してください。"></textarea>                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" name="submit"　class="btn btn-default">&nbsp;送 信&nbsp;</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- .row -->
</div><!-- .container -->


<?php include("./front/footer.php"); ?>