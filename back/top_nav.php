 <!-- Top item -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">トグルナビゲーション</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><i class="fa fa-fw fa-desktop"></i>アドミン</a>
    <a class="navbar-brand" href="../index.php"><i class="fa fa-fw fa-home"></i>ホームページ</a>
    <a class="navbar-brand" href="../shop.php"><i class="fa fa-fw fa-archive"></i>ショップ</a>
    <a class="navbar-brand" href="../checkout.php"><i class="fa fa-fw fa-shopping-cart"></i>チェックアウト</a>
    <a class="navbar-brand" href="../contact.php"><i class="fa fa-fw fa-comments-o"></i>コンタクト</a>
</div>

<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> 
            <?php echo $_SESSION['nickname']; ?> 
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">           
            <li class="divider"></li>
            <li>
                <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>ログアウト</a>
            </li>
        </ul>
    </li>
</ul>