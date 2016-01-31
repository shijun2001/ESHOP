<?php require_once("../common/config.php"); ?>

<?php
    if(!isset($_SESSION['nickname'])){
        set_message("ログインしてください!");
        redirect("../login.php");
    }

    $nickname = $_SESSION['nickname'];
    $query = query("SELECT * FROM users WHERE nickname = '{$nickname}'");
    confirm($query);
    $row = fetch_array($query);
    if($row['competence'] == "admin"){
        include("../back/header.php");
    }else{
        include("../back/usheader.php");
    }
?>

<div id="page-wrapper">
    <div class="container-fluid">
        

		<?php

            $nickname = $_SESSION['nickname'];
            $query = query("SELECT * FROM users WHERE nickname = '{$nickname}'");
            confirm($query);
            $row = fetch_array($query);
            if($row['competence'] == "admin"){
                /*Under Chrome the root is 'Eshop', but under Firefox it's 'eshop'.*/
                if(strtolower($_SERVER['REQUEST_URI']) == "/eshop/admin/" || strtolower($_SERVER['REQUEST_URI']) == "/eshop/admin/index.php"){
                    include("admin_content.php");
                }                
            }else{
                if(strtolower($_SERVER['REQUEST_URI']) == "/eshop/admin/" || strtolower($_SERVER['REQUEST_URI']) == "/eshop/admin/index.php"){
                    include("us_content.php");
                }
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

            if(isset($_GET['history'])){
                include("history.php");
            }

            if(isset($_GET['personal'])){
                include("personal.php");
            }


		?>
        

    </div><!-- .container-fluid -->
</div><!-- #page-wrapper -->

<?php include("../back/footer.php"); ?>