<?php require_once("../common/config.php"); ?>
<?php include("../back/header.php"); ?>


<?php
    /*if(!isset($_SESSION['nickname'])){
        set_message("ログインしてください!");
        redirect("../login.php");
    }*/
?>


<div id="page-wrapper">
    <div class="container-fluid">
        

		<?php

				/*Under Chrome the root is 'Eshop', but under Firefox it's 'eshop'.*/                               
                if(strtolower($_SERVER['REQUEST_URI']) == "/eshop/admin/" || strtolower($_SERVER['REQUEST_URI']) == "/eshop/admin/index.php"){
                    include("../back/admin_content.php");
                }
                
                if(isset($_GET['orders'])){
                    include("orders.php");
                }

                if(isset($_GET['products'])){
                    include("products.php");
                }

                if(isset($_GET['add_product'])){
                    include("add_product.php");
                }

                if(isset($_GET['edit_product'])){
                    include("edit_product.php");
                }

                if(isset($_GET['categories'])){
                    include("categories.php");
                }

                if(isset($_GET['users'])){
                    include("users.php");
                }

                if(isset($_GET['add_user'])){
                    include("add_user.php");
                }

                if(isset($_GET['edit_user'])){
                    include("edit_user.php");
                }

                if(isset($_GET['reports'])){
                    include("reports.php");
                }


		?>
        

    </div><!-- .container-fluid -->

</div><!-- #page-wrapper -->

<?php include("../back/footer.php"); ?>