<?php

//---------------- Custom Functions ------------------//

function query($sql){
	global $conn;
	return mysqli_query($conn, $sql);
}

function confirm($result){
	global $conn;
	if(!$result){
		die("SQLの送信に失敗しました。" . mysqli_error($conn));
	}
}

function escape_string($string){
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function fetch_array($result){
	return mysqli_fetch_array($result);
}

/*function db_free($result){
	mysqli_free_result($result);
}*/

function db_free_close($result){
	global $conn;
	mysqli_free_result($result);
	return mysqli_close($conn) or die("MySQL切断に失敗しました。");
}

function redirect($location){
	header("Location: $location");
}

function set_message($msg){
	if(!empty($msg)){
		$_SESSION['message'] = $msg;
	}else{
		$msg = "";
	}
}

function display_message(){
	if(isset($_SESSION['message'])){
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function last_id(){
	global $conn;
	return mysqli_insert_id($conn);
}




//---------------- Front end Functions ------------------//

/******** Get Products ********/

function get_products(){
	$query = query("SELECT * FROM products");
	confirm($query);
	$price = 0;

	while($row = fetch_array($query)){
		$price = number_format($row['product_price']);

		$product = <<<DELIMETER
					<div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
	                        <div class="caption">
	                            <h4 class="pull-right">&yen;{$price}</h4>
	                            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h4>
	                            <p>
	                            	<a target="_blank" href="https://www.amazon.co.jp">Amazon- https://www.amazon.co.jp</a>
	                            	でこのオンラインストアのアイテムのように多くの情報を参照してください。
	                            </p>
	                        	<a class="btn btn-primary" target="_blank" href="./common/cart.php?add={$row['product_id']}">カートに入れる</a>
	                        </div>

	                        
	                    </div>
	                </div>
DELIMETER;
		
		echo $product;
	}
	db_free_close($query);
}

/******** Get Categories ********/

function get_categories(){	
	$query = query("SELECT * FROM categories");
	confirm($query);

	while($row = fetch_array($query)){
		$category = <<<DELIMETER
					<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
DELIMETER;
		
		echo $category;
	}
	mysqli_free_result($query);
}

/******** Get Products in Category Page ********/

function get_products_in_cat_page(){
	$query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ");
	confirm($query);

	while($row = fetch_array($query)){

		$product = <<<DELIMETER
					<div class="col-md-3 col-sm-6 hero-feature">
		                <div class="thumbnail">
		                    <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
		                    <div class="caption">
		                        <h3><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		                        <p>
		                            <a href="./common/cart.php?add={$row['product_id']}" class="btn btn-primary">カートに入れる</a>
		                            <a href="item.php?id={$row['product_id']}" class="btn btn-default">すべて見る</a>
		                        </p>
		                    </div>
		                </div>
		            </div>
DELIMETER;
		
		echo $product;
	}
	db_free_close($query);
}

/******** Get Products in Shop Page ********/

function get_products_in_shop_page(){
	$query = query("SELECT * FROM products");
	confirm($query);

	while($row = fetch_array($query)){

		$product = <<<DELIMETER
					<div class="col-md-3 col-sm-6 hero-feature">
		                <div class="thumbnail">
		                    <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
		                    <div class="caption">
		                        <h3><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		                        <p>
		                            <a href="./common/cart.php?add={$row['product_id']}" class="btn btn-primary">カートに入れる</a>
		                            <a href="item.php?id={$row['product_id']}" class="btn btn-default">すべて見る</a>
		                        </p>
		                    </div>
		                </div>
		            </div>
DELIMETER;
		
		echo $product;
	}
	db_free_close($query);
}

/******** User Login ********/

function login_user(){
	if(isset($_POST['submit'])){
		$email = escape_string($_POST['email']);
		$password = escape_string($_POST['password']);

		$query = query("SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}' ");
		confirm($query);

		if(mysqli_num_rows($query) == 0){
			set_message("認証できませんでした!");
			redirect("login.php");
		}else{
			$row = fetch_array($query);
			$nickname = $row['nickname'];
			$_SESSION['nickname'] = $nickname;
			redirect("admin");
		}
		db_free_close($query);
	}	
}

/******** Contact Send Message ********/

function send_message(){
	if(isset($_POST['submit'])){

		$to			=	"murenkakashu@yahoo.co.jp";
		$from_name	=	$_POST['name'];
		$email		=	$_POST['email'];
		$subject	=	$_POST['subject'];
		$message	=	$_POST['message'];

		$headers = "From: {$from_name} {$email}";

		$result = mail($to, $subject, $message, $headers);

		if(!$result){
			set_message("メッセージの送信に失敗しました。");
			redirect("contact.php");
		}else{
			set_message("メッセージが送信されました。");
			redirect("contact.php");
		}
	}
}






//---------------- Back end Functions ------------------//

/******** Display orders in Admin ********/

function display_orders(){
	$query = query("SELECT * FROM orders");
	confirm($query);

	while($row = fetch_array($query)){
		$orders = <<<DELIMETER
				<tr>
                    <td>{$row['order_id']}</td>
                    <td>{$row['order_amount']}</td>
                    <td>{$row['order_transaction']}</td>
                    <td>{$row['order_status']}</td>
                    <td>{$row['order_currency']}</td>
                    <td>{$row['order_date']}</td>
                    <td>{$row['order_time']}</td>
                    <td><a class="btn btn-danger" href="delete_order.php?id={$row['order_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
                </tr>
DELIMETER;
		
		echo $orders;
	}
	db_free_close($query);
}




?>