<?php require_once("./common/config.php"); ?>
<?php include("./front/header.php"); ?>

		
<!-- Page Content -->
<div class="container">

	<!-- row --> 
	<div class="row">
		<h1>チェックアウト</h1>
		<h4 class="text-center bg-danger"><?php display_message(); ?></h4>
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="charset" value="utf-8">
			<input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="business" value="murenkakashu@yahoo.co.jp">
            <input type="hidden" name="currency_code" value="JPY">
		    <table class="table table-striped">
		        <thead>
		        	<tr>
						<th>商品名</th>
						<th>価格</th>
						<th>購入数量</th>
						<th>合計金額</th>		     
		        	</tr>
		        </thead>
		        <tbody>
		            <?php cart(); ?>
		        </tbody>
		    </table>
		    <?php echo show_paypal(); ?>
		</form>

		<!--  ***********CART TOTALS*************-->		            
		<div class="col-xs-4 pull-right ">
			<h2>カートの小計</h2>

			<table class="table table-bordered" cellspacing="0">
				<tr class="cart-subtotal">
					<th>商品:</th>
					<td>
						<span class="amount">
							<?php
	                            echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION ['item_quantity'] = "0";
	                        ?>
                        </span>
                    </td>
				</tr>
				<tr class="shipping">
					<th>送料および手数料:</th>
					<td>無料で</td>
				</tr>
				<tr class="order-total">
					<th>ご注文合計:</th>
					<td>
						<strong><span class="amount">&yen;<?php
	                            echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION ['item_total'] = "0";
	                        ?>
                        </span></strong>
                    </td>
				</tr>
			</table>
			<p>
				<a href="thank_you.php?tx=000000001&amt=1&st=JPA&cc=Completed">&nbsp;&nbsp;test1&nbsp;&nbsp;</a>
				<a href="thank_you.php?tx=000000002&amt=2&st=USA&cc=Completed">&nbsp;&nbsp;test2&nbsp;&nbsp;</a>
				<a href="thank_you.php?tx=000000003&amt=3&st=CHS&cc=Completed">&nbsp;&nbsp;test3&nbsp;&nbsp;</a>
				<a href="thank_you.php?tx=000000004&amt=4&st=JPA&cc=Completed">&nbsp;&nbsp;test4&nbsp;&nbsp;</a>
				<a href="thank_you.php?tx=000000005&amt=5&st=USA&cc=Completed">&nbsp;&nbsp;test5&nbsp;&nbsp;</a>
				<a href="thank_you.php?tx=000000006&amt=6&st=CHS&cc=Completed">&nbsp;&nbsp;test6&nbsp;&nbsp;</a>
			</p>
		</div><!-- CART TOTALS-->
	</div><!-- .row-->
</div><!-- .container-->


<?php include("./front/footer.php"); ?>