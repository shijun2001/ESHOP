<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>
		

<!-- Page Content -->
<div class="container">
		<!-- Side Navigation -->
    <?php include("./front/side_nav.php"); ?>

    <?php
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
        confirm($query);
        while($row = fetch_array($query)):
    ?>

	<div class="col-md-9">
		<!-- Row for Image and Short Description-->
		<div class="row">
			<div class="col-md-7">
					<img class="img-responsive" src="<?php echo display_image($row['product_image']); ?>" alt="">
			</div>
			<div class="col-md-5">
				<div class="thumbnail"> 
					<div class="caption-full">
				        <h4><a href="#"><?php echo $row['product_title']; ?></a></h4>
				        <hr>
				        <h4 class=""><?php echo "&yen;".number_format($row['product_price']); ?></h4>
				    	<div class="ratings">     
					        <p>
					            <span class="glyphicon glyphicon-star"></span>
					            <span class="glyphicon glyphicon-star"></span>
					            <span class="glyphicon glyphicon-star"></span>
					            <span class="glyphicon glyphicon-star"></span>
					            <span class="glyphicon glyphicon-star-empty"></span>
					        </p>
					    </div>          
						<p><?php echo $row['short_desc']; ?></p>   
					    <form action="">
					        <div class="form-group">
					        	<a href="./common/cart.php?add=<?php echo $row['product_id']; ?>" class="btn btn-primary">カートに入れる</a>
					        </div>
					    </form>
					</div>
				</div>
			</div>
		</div><!--.row -->
		<hr>

		<!--Row for Tab Panel-->
		<div class="row">
			<div role="tabpanel">
			<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">ディスクリプション</a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">レビュー</a></li>
				</ul>

					<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<p><?php echo $row['product_title']; ?></p>           
					    <p><?php echo $row['product_description']; ?></p>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
							<div class="col-md-6">
					    	<h4>最も参考になったカスタマーレビュー</h4>
					        <hr>
					        <div class="row">
					            <div class="col-md-12">
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star-empty"></span>
					                匿名
					                <span class="pull-right">2015/12/31</span>
					                <p>持ち運ぶのに全く苦労しない軽さ。そして価格が安かったので購入しました。</p>
					            </div>
					        </div>
					        <hr>

					        <div class="row">
					            <div class="col-md-12">
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star"></span>
					                <span class="glyphicon glyphicon-star-empty"></span>
					                匿名
					                <span class="pull-right">2015/12/11</span>
					                <p>初心者に充分な性能!</p>
					            </div>
					        </div>
					        <hr>
					    </div>

						<div class="col-md-6">
    						<h3>レビュー</h3>
							<form action="" class="form-inline">
								<div class="form-group addreview bottom-space">
						            <label for="">&nbsp;名&nbsp;&nbsp;&nbsp;前&nbsp;&nbsp;:</label>
						            <input type="text" class="form-control" >
						        </div>
						        <div class="form-group addreview bottom-space">
						            <label for="">Eメール:</label>
						            <input type="test" class="form-control">
						        </div>
						        <div>
						            <h3>評価</h3>
						            <span class="glyphicon glyphicon-star"></span>
						            <span class="glyphicon glyphicon-star"></span>
						            <span class="glyphicon glyphicon-star"></span>
						            <span class="glyphicon glyphicon-star"></span>
						        </div>
    							<br>            
					            <div class="form-group">
					            	<textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
					            </div>
    							<br><br>
					            <div class="form-group">
					                <input type="submit" class="btn btn-primary" value="送 信">
					            </div>
							</form>
						</div>
					</div><!-- .tab-pane -->
				</div><!-- .tab-content -->
			</div><!-- tabpanel -->
		</div><!--Row for Tab Panel-->
	</div><!-- .col-md-9 -->

	<?php endwhile; ?>

</div><!-- .container -->

<?php include("./front/footer.php"); ?>