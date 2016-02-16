<div class="col-md-3 main-sider">
	<div class="navbar-header">
		<span class="lead"><i class="fa fa-fw fa-cubes"></i> <b>カテゴリー</b></span>
	    <button type="button" class="navbar-toggle front-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="glyphicon glyphicon-menu-down"></span>	        
	    </button>    
	</div>
	<div class="list-group navbar-collapse" id="bs-example-navbar-collapse-2">
		<!-- <p class="lead none"> </p> --><br/><br/>
		<?php get_categories(); ?>
	</div>

	<!-- ---------------------------------------------------- -->

	<div class="navbar-header">
		<span class="lead"><i class="fa fa-fort-awesome"></i> <b>売れ筋ランキング</b></span>
	    <button type="button" class="navbar-toggle front-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
	        <span class="sr-only">トグルナビゲーション</span>
	        <span class="glyphicon glyphicon-menu-down"></span>	        
	    </button>       
	</div>
	<div class="list-group navbar-collapse" id="bs-example-navbar-collapse-3">
		<br/><br/>
		<?php get_sold(); ?>	
	</div>

	<!-- ---------------------------------------------------- -->

	<div class="navbar-header">
		<span class="lead"><i class="fa fa-child"></i> <b>人気ランキング</b></span>
	    <button type="button" class="navbar-toggle front-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4">
	        <span class="sr-only">トグルナビゲーション</span>
	        <span class="glyphicon glyphicon-menu-down"></span>	        
	    </button>
	</div>
	<div class="list-group navbar-collapse" id="bs-example-navbar-collapse-4">
		<br/><br/>
		<?php get_ninki(); ?>
	</div>

	

</div>


