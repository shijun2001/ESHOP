<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>

<?php
if(isset($_POST['review']) && isset($_GET['id'])){		
		$rename		=	escape_string($_POST['review-name']);
		$reemail	=	escape_string($_POST['review-email']);
		$restar		=	escape_string($_POST['range']);
		$remsg		=	escape_string($_POST['review-msg']);
		$reproid 	=	$_GET['id'];
		$datetime 	=	date("Y-m-d H:i:s");
		$insert_re = query("INSERT INTO reviews VALUES('', '{$rename}', '{$reemail}', '{$restar}', '{$remsg}', '{$reproid}', '{$datetime}') ");
		confirm($insert_re);
		redirect("item.php?id={$reproid}");
	}

?>

<!-- Page Content -->
<div class="container">
		<!-- Side Navigation -->
    <?php include("./front/side_nav_item.php"); ?>

    <?php    	
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
        confirm($query);
        $id = escape_string($_GET['id']);
        while($row = fetch_array($query)):
    ?>

	<div class="col-md-9">
		<!-- Row for Image and Short Description-->
		<div class="row">
			<div class="col-md-7">
					<img width="350" class="img-responsive" src="<?php echo display_image($row['product_image']); ?>" alt="">
			</div>
			<div class="col-md-5">
				<div class="thumbnail"> 
					<div class="caption-full">
						<br>
				        <h3>
					        <b><?php echo $row['product_title']; ?></b>
				        </h3>
				        <hr>
				        <h4 class="">&nbsp;
				        	<?php echo "価格: &yen;".number_format($row['product_price']); ?>
				        </h4>
				    	<div class="ratings">     
					        <p>
					        	<?php
									$reviews = query("SELECT AVG(restar) AS avgstar FROM reviews WHERE review_product_id = {$id}");
									confirm($reviews);
									$starrow = fetch_array($reviews);
									$star = $starrow[0];

									$line = query("SELECT restar FROM reviews WHERE review_product_id = {$id}");
									confirm($line);
									$line = mysqli_num_rows($line);

									if($line == 0){
										echo '<span>※今までのレビューがない※</span>';
									}else{						
										stars($star);
									}
								?>					            
					        </p>
					    </div>          
						<p class="item-des"><?php echo $row['short_desc']; ?></p>   
					    <form method="post">
					        <div class="form-group">
						        <?php
							        if($row['product_quantity'] == 0){
										$display_button = "<a href='#' class='btn btn-danger disabled'>売り切れ</a> <a href='javascript:history.go(-1);' class='btn btn-default'>戻る</a>";		                            ;
									}elseif($row['product_quantity'] < 0){
										$display_button = "<a href='#' class='btn btn-warning disabled'>未発売</a> <a href='javascript:history.go(-1);' class='btn btn-default'>戻る</a>";
									}else{
										$display_button = "<a href='./common/cart.php?add={$row['product_id']}' class='btn btn-primary'>カートに入れる</a> <a href='javascript:history.go(-1);' class='btn btn-default'>戻る</a>";
									}
									echo $display_button;
									
								?>					        	
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
						<br>
						<p>							 
							<?php 
								echo "商品番号: " . $row['product_id'] . "&nbsp;&nbsp;&nbsp;&nbsp;" . "商品名: " . $row['product_title']; 
							?>
						</p>           
					    <p class="item-des"><?php echo nl2br($row['product_description']); ?></p>
					</div>

					
					<div role="tabpanel" class="tab-pane" id="profile">
						<div class="col-md-6">
					    	<h4>最も参考になったカスタマーレビュー</h4>
					        <hr>
					        <div class="row" id="reviews">
					        	<ul>
					        		<?php 
										
									$reviews = query("SELECT * FROM reviews WHERE review_product_id ={$id} ORDER BY review_datetime DESC LIMIT 8");
									confirm($reviews);

									if(mysqli_num_rows($reviews) == 0){
										echo "<h4>&nbsp;&nbsp;&nbsp;※今までのレビューがない※</h4>";
									}else{									
					
				        			while($row = mysqli_fetch_assoc($reviews)): ?>
									<li>
										<div class="col-md-12">
											<?php
												$star = $row['restar'];
												stars($star);
											?>							                
							                <span><?php echo $row['rename']; ?></span>	
							                <span class="pull-right">
							                	<?php echo $row['review_datetime']; ?>
							                </span>
							                <p><?php echo $row['review']; ?></p>
							            </div>
							        </li>
						            <?php 
						            	endwhile; 
						            }
						            ?>
						        </ul>
					        </div>
					        <hr>					   
					    </div>
						<div class="col-md-6">							
    						<h3><i class="fa fa-fw fa-edit"></i> レビュー</h3>
							<form class="form-inline" method="post">
							<?php
								if(isset($_SESSION['nickname'])){
                            		$nickname = $_SESSION['nickname'];
                            		$query = query("SELECT email FROM users WHERE nickname = '{$nickname}'");
		                            confirm($query);
		                            $email = fetch_array($query)[0];
		                            echo "
								<div class='form-group addreview bottom-space'>
						            <label for='review-name'>名&nbsp;前&nbsp;:</label>
						            <input type='text' class='form-control' name='review-name' placeholder='お名前' id='review-name' value='{$nickname}' readonly>
						        </div>
						        <div class='form-group addreview bottom-space'>
						            <label for='review-email'>メール:</label>
						            <input type='email' class='form-control' name='review-email' placeholder='メールアドレス' id='review-email' value='{$email}' readonly>
						        </div>";
						    	}else{
						    	echo '
								<div class="form-group addreview bottom-space">
						            <label for="review-name">名&nbsp;前&nbsp;:</label>
						            <input type="text" class="form-control" name="review-name" placeholder="お名前" id="review-name" required data-validation-required-message="名前を入力してください。">
						        </div>
						        <div class="form-group addreview bottom-space">
						            <label for="review-email">メール:</label>
						            <input type="email" class="form-control" name="review-email" placeholder="メールアドレス" id="review-email" required data-validation-required-message="メールアドレスを入力してください。">
						        </div>';
						    }
						    ?>
						        <br>
						        <div class="form-group">
						            <h3><i class="fa fa-star-half-o"></i> 評価</h3>
									<div class="range range-success">
							            <input type="range" name="range" min="1" max="5" value="5" onchange="rangeSuccess.value=value">
							            <output id="rangeSuccess">5</output>
							        </div>
						        </div>
    							<br>        
					            <div class="form-group">
					            	<textarea name="review-msg" id="review-msg" cols="60" rows="10" class="form-control"  placeholder="メッセージ" required data-validation-required-message="メッセージを入力してください。"></textarea>
					            </div>
    							<br><br>
					            <div class="form-group">
					                <input type="submit" name="review" id="review" class="btn btn-primary" value="送 信">
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