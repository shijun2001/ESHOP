<div class="container">
	<!-- For mobile display -->
	<div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">トグルナビゲーション</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">XXX Eショップ</a>        
    </div>


    <!-- Top navagation -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="shop.php">ショップ</a>
            </li>
            <li>
                <a href="login.php">ログイン</a>
            </li>
            <li>
                <a href="admin">アドミン</a>
            </li>
             <li>
                <a href="checkout.php">チェックアウト</a>
            </li>
            <li>
                <a href="contact.php">コンタクト</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
                    <?php 
                        if(isset($_SESSION['nickname'])){
                            echo $_SESSION['nickname']; 
                        }else{
                            echo "匿名";
                        }
                    ?> 
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">           
                    <li class="divider"></li>
                    <li>
                        <?php
                            if(isset($_SESSION['nickname'])){
                                echo '<a href="admin/logout.php">';
                                echo '<i class="fa fa-fw fa-power-off"></i>';
                                echo 'ログアウト</a>';
                            }else{
                                echo '<a href="login.php">';
                                echo '<i class="fa fa-fw fa-sign-in"></i>';
                                echo 'ログイン</a>';
                            }    
                        ?>
                    </li>
                </ul>
            </li>
        </ul>
        
    </div><!-- .collapse -->

</div><!-- .container -->