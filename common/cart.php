<?php require_once("config.php"); ?>

<?php

	if(isset($_GET['add'])){
		$query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']). " ");
		confirm($query);

		while($row = fetch_array($query)){

			if($row['product_quantity'] <> $_SESSION['product_' . $_GET['add']]){
				$_SESSION['product_' . $_GET['add']]+=1;
				redirect("../checkout.php");
			}else{
				set_message("申し訳ありませんが、" . "{$row['product_title']}" . "の在庫数は現在 " . $row['product_quantity'] . "しかありません!");
				redirect("../checkout.php");
			}
		}
		/*$_SESSION['product_' . $_GET['add']]+=1;
		redirect("index.php");*/
	}


	if(isset($_GET['remove'])){		
		$_SESSION['product_' . $_GET['remove']]--;
		if($_SESSION['product_' . $_GET['remove']] < 1){
			unset($_SESSION['item_total']);
			unset($_SESSION['item_quantity']);
			redirect("../checkout.php");
		}else{
			redirect("../checkout.php"); //--------------------------------------Any where---------------------//
		}
	}


	if(isset($_GET['delete'])){	
		$_SESSION['product_' . $_GET['delete']] = '0';
		unset($_SESSION['item_total']);
		unset($_SESSION['item_quantity']);
		redirect("../checkout.php");
	}

function cart(){
	$total = 0;
	$item_quantity = 0;
	$price = 0;
	$product_sub = 0;

	$item_name = 1;
	$item_number = 1;
	$amount = 1;
	$quantity = 1;

	foreach($_SESSION as $name => $value){
		if($value > 0){
			if(substr($name, 0, 8) == "product_"){

				$length = strlen($name - 8);

				$id = substr($name, 8, $length);

				$query = query("SELECT * FROM products WHERE product_id=" . escape_string($id) . " ");
				confirm($query);

				while($row = fetch_array($query)){
					$product_price = $row['product_price'];
					$price = number_format($product_price);
					$product_sub = $row['product_price'] * $value;
					$sub = number_format($product_sub);

					$item_quantity += $value;


					$product = <<<DELIMETER
								<tr>
			                        <td>{$row['product_title']}<br>
			                        </td>
			                        <td>&yen;{$price}</td>
			                        <td>{$value}</td>
			                        <td>&yen;{$sub}</td>
			                        <td>
			                        	<a class="btn btn-warning" href="./common/cart.php?remove={$row['product_id']}">
			                        		<span class='glyphicon glyphicon-minus'></span>
			                        	</a>
			                        	<a class="btn btn-success" href="./common/cart.php?add={$row['product_id']}">
			                        		<span class='glyphicon glyphicon-plus'></span>
			                        	</a>
			                        	<a class="btn btn-danger" href="./common/cart.php?delete={$row['product_id']}">
			                        		<span class='glyphicon glyphicon-remove'></span>
			                        	</a>
			                        </td>
			                    </tr>
			                    <input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
								<input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
								<input type="hidden" name="amount_{$amount}" value="{$price}">
								<input type="hidden" name="quantity_{$quantity}" value="{$value}">
DELIMETER;

				echo $product;

				$item_name ++;
				$item_number ++;
				$amount ++;
				$quantity ++;

				}

				$_SESSION['item_total'] = number_format($total += $product_sub);
				$_SESSION['item_quantity'] = $item_quantity;
			}
		}		
	}
}

function show_paypal(){

	if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1){

		$paypal_button = <<<DELIMETER
		            <input type="image" name="upload" border="0"
	                    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
	                    alt="PayPal - The safer, easier way to pay online">

DELIMETER;

		return $paypal_button;
	}
}

function process_transaction(){

	global $conn;

	if(isset($_GET['tx'])){
		$amount = $_GET['amt'];
		$currency = $_GET['cc'];
		$transaction = $_GET['tx'];
		$status = $_GET['st'];	


		$total = 0;
		$item_quantity = 0;
		$price = 0;

		$query = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) 
										VALUES ('{$amount}','{$transaction}','{$status}','{$currency}')");
		confirm($query);

		session_destroy();
	}else{
		redirect("../index.php");
	}
}



?>