<?php

$upload_directory = "uploads";

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

function display_message_success(){
	if(isset($_SESSION['message'])){
		echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '</div>';
		unset($_SESSION['message']);
	}
}

function display_message_warning(){
	if(isset($_SESSION['message'])){
		echo '<div class="alert alert-warning" role="alert">' . $_SESSION['message'] . '</div>';
		unset($_SESSION['message']);
	}
}

function display_message_danger(){
	if(isset($_SESSION['message'])){
		echo '<div class="alert alert-danger" role="alert">' . $_SESSION['message'] . '</div>';
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
	$pagesize = 11;
	$query = query("SELECT * FROM products WHERE product_quantity > 0 ORDER BY add_datetime desc LIMIT " . $pagesize);
	confirm($query);
	$price = 0;

	while($row = fetch_array($query)){
		$price = number_format($row['product_price']);
		$product_image = display_image($row['product_image']);
		$str_len = 80;

		if(strlen($row['short_desc']) > $str_len){
			$short_desc = mb_strcut($row['short_desc'], 0, $str_len, 'utf-8') . "...";
		}else{
			$short_desc = $row['short_desc'];
		}

		$product = <<<DELIMETER
					<div class="col-sm-6 col-lg-4 col-md-6">
	                    <div class="thumbnail">
	                        <a href="item.php?id={$row['product_id']}"><img src="{$product_image}" alt=""></a>
	                        <div class="caption">
	                            <h4 class="pull-right">&yen;{$price}</h4>
	                            <h4><b><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></b></h4>
	                            <p>{$short_desc}</p>
	                        	<a class="btn btn-primary" href="./common/cart.php?add={$row['product_id']}">カートに入れる</a>
	                        	<a href="item.php?id={$row['product_id']}" class="btn btn-default">すべて見る</a>
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
	$query = query("SELECT * FROM categories ");
	confirm($query);

	while($row = fetch_array($query)){
		$pro_query = query("SELECT COUNT(*) FROM products WHERE product_category_id = {$row['cat_id']}");
		confirm($pro_query);
		$count = fetch_array($pro_query)[0];
		$category = <<<DELIMETER
					<a href='category.php?id={$row['cat_id']}' class='list-group-item'><span class="badge">{$count}</span><i class="fa fa-bookmark-o"></i>&nbsp;&nbsp;{$row['cat_title']}</a>
DELIMETER;
		
		echo $category;
	}
	mysqli_free_result($query);
}

/******** Get sold ********/
function get_sold(){	
	$soldsize = 10;
	$query = query("SELECT product_id,product_title,SUM(product_quantity) AS 'TOTLE' FROM reports GROUP BY product_id ORDER BY TOTLE desc LIMIT " . $soldsize);
	confirm($query);	

	while($row = fetch_array($query)){
		$imagequery = query("SELECT * FROM products WHERE product_id = {$row['product_id']}");
		confirm($imagequery);
		$row = fetch_array($imagequery);
		$product_image = display_image($row['product_image']);

		$category = <<<DELIMETER
					<a href='item.php?id={$row['product_id']}' class='list-group-item'>
						<img width="40" src="./{$product_image}" alt="">
						 {$row['product_title']}
					</a>
DELIMETER;
		
		echo $category;
	}
	mysqli_free_result($query);
}

/******** Get ninnkis ********/
function get_ninki(){	
	$ninkisize = 10;
	$query = query("SELECT product_id,product_title,COUNT(product_id) AS 'TOTLE' FROM reports GROUP BY product_id ORDER BY TOTLE desc LIMIT " . $ninkisize);
	confirm($query);	

	while($row = fetch_array($query)){
		$imagequery = query("SELECT * FROM products WHERE product_id = {$row['product_id']}");
		confirm($imagequery);
		$row = fetch_array($imagequery);
		$product_image = display_image($row['product_image']);

		$category = <<<DELIMETER
					<a href='item.php?id={$row['product_id']}' class='list-group-item'>
						<img width="40" src="./{$product_image}" alt="">
						 {$row['product_title']}
					</a>
DELIMETER;
		
		echo $category;
	}
	mysqli_free_result($query);
}

/******** Get item ********/
function get_item(){	
	$itemsize = 5;
	$product_query = query("SELECT product_category_id FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
	confirm($product_query);
	$pro_cat_id = fetch_array($product_query)[0];

	$query = query("SELECT product_id,product_title,COUNT(product_id) AS 'TOTLE' FROM reports WHERE category_id = {$pro_cat_id} GROUP BY product_id ORDER BY TOTLE desc LIMIT " . $itemsize);
	confirm($query);	

	while($row = fetch_array($query)){
		$imagequery = query("SELECT * FROM products WHERE product_id = {$row['product_id']}");
		confirm($imagequery);
		$row = fetch_array($imagequery);
		$product_image = display_image($row['product_image']);

		$category = <<<DELIMETER
					<a href='item.php?id={$row['product_id']}' class='list-group-item'>
						<img width="40" src="./{$product_image}" alt="">
						 {$row['product_title']}
					</a>
DELIMETER;
		
		echo $category;
	}
	mysqli_free_result($query);
}


/******** Get Products in Category Page ********/
function get_products_in_cat_page(){
	$query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ORDER BY add_datetime desc");
	confirm($query);
	$price = 0;

	while($row = fetch_array($query)){
		$price = number_format($row['product_price']);
		$product_image = display_image($row['product_image']);
		$str_len = 80;

		if(strlen($row['short_desc']) > $str_len){
			$short_desc = mb_strcut($row['short_desc'], 0, $str_len, 'utf-8') . "...";
		}else{
			$short_desc = $row['short_desc'];
		}

		if($row['product_quantity'] == 0){
			$display_button = "<a href='#' class='btn btn-danger disabled'>売り切れ</a>";
		}else if($row['product_quantity'] < 0){
			$display_button = "<a href='#' class='btn btn-warning disabled'>未発売</a>";
		}else{
			$display_button = "<a href='./common/cart.php?add={$row['product_id']}' class='btn btn-primary'>カートに入れる</a>
		                            <a href='item.php?id={$row['product_id']}' class='btn btn-default'>すべて見る</a>";
		}


		$reviews = query("SELECT AVG(restar) AS avgstar FROM reviews WHERE review_product_id ={$row['product_id']}");
		confirm($reviews);
		$starrow = fetch_array($reviews);
		$star = $starrow[0];

		$line = query("SELECT restar FROM reviews WHERE review_product_id = {$row['product_id']}" );
		confirm($line);
		$line = mysqli_num_rows($line);

		$ss = '';
		if($line == 0){
			$ss = '<span>※レビューがない※</span>';
		}else{			
							
			for($i = 1;$star - $i >= -0.5 ;$i++){
				$ss .= '<span class="glyphicon glyphicon-star"></span>';
			}
			for($j = 1;$j < 5.5 - $star;$j++){
				$ss .= '<span class="glyphicon glyphicon-star-empty"></span>';
			}
		}			

		$product = <<<DELIMETER
					<div class="col-md-4 col-sm-6 col-lg-3 hero-feature">
		                <div class="thumbnail">
		                    <a href="item.php?id={$row['product_id']}"><img src="{$product_image}" alt=""></a>
		                    <div class="caption">
		                        <h3><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
		                        <p class="text-left ratings"><b>&yen;{$price}</b>&nbsp;&nbsp;&nbsp;{$ss}</p>
		                        <p>{$short_desc}</p>
		                        <p>
		                            {$display_button}
		                        </p>
		                    </div>
		                </div>
		            </div>
DELIMETER;
		
		echo $product;
	}
	db_free_close($query);
}

/******** Search in all page ********/
function search(){	
	if(isset($_POST['search'])){
		$search = escape_string($_POST['search']);
		$_SESSION['search'] = $search;
		if(strtolower($_SERVER['REQUEST_URI']) <> "/eshop/shop.php"){	
			redirect("shop.php");
		}
	}
}

/******** Get Products in Shop Page ********/
function get_products_in_shop_page(){
	if(isset($_SESSION['search'])){
	$search = escape_string($_SESSION['search']);

	$query = query("SELECT * FROM products WHERE product_id LIKE '%{$search}%' OR product_title LIKE '%{$search}%' OR short_desc LIKE '%{$search}%' ORDER BY add_datetime desc");
	confirm($query);
	$price = 0;

	while($row = fetch_array($query)){
		$price = number_format($row['product_price']);
		$product_image = display_image($row['product_image']);
		$str_len = 80;

		if(strlen($row['short_desc']) > $str_len){
			$short_desc = mb_strcut($row['short_desc'], 0, $str_len, 'utf-8') . "...";
		}else{
			$short_desc = $row['short_desc'];
		}

		if($row['product_quantity'] == 0){
			$display_button = "<a href='#' class='btn btn-danger disabled'>売り切れ</a>";
		}else if($row['product_quantity'] < 0){
			$display_button = "<a href='#' class='btn btn-warning disabled'>未発売</a>";
		}else{
			$display_button = "<a href='./common/cart.php?add={$row['product_id']}' class='btn btn-primary'>カートに入れる</a>
		                            <a href='item.php?id={$row['product_id']}' class='btn btn-default'>すべて見る</a>";
		}

		$reviews = query("SELECT AVG(restar) AS avgstar FROM reviews WHERE review_product_id ={$row['product_id']}");
		confirm($reviews);
		$starrow = fetch_array($reviews);
		$star = $starrow[0];

		$line = query("SELECT restar FROM reviews WHERE review_product_id = {$row['product_id']}" );
		confirm($line);
		$line = mysqli_num_rows($line);

		$ss = '';
		if($line == 0){
			$ss = '<span>※レビューがない※</span>';
		}else{			
							
			for($i = 1;$star - $i >= -0.5 ;$i++){
				$ss .= '<span class="glyphicon glyphicon-star"></span>';
			}
			for($j = 1;$j < 5.5 - $star;$j++){
				$ss .= '<span class="glyphicon glyphicon-star-empty"></span>';
			}
		}	

		$product = <<<DELIMETER
					<div class="col-md-4 col-sm-6 col-lg-3 hero-feature">
		                <div class="thumbnail">
		                    <a href="item.php?id={$row['product_id']}"><img src="{$product_image}" alt=""></a>
		                    <div class="caption">
		                        <h3><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
		                        <p class="text-left ratings"><b>&yen;{$price}</b>&nbsp;&nbsp;&nbsp;{$ss}</p>
		                        <p>{$short_desc}</p>
		                        <p>
		                            {$display_button}
		                        </p>
		                    </div>
		                </div>
		            </div>
DELIMETER;
			
		echo $product;
	}
	db_free_close($query);	
	unset($_SESSION['search']); 
	}else{
		$query = query("SELECT * FROM products ORDER BY add_datetime desc");
		confirm($query);
		$price = 0;

		while($row = fetch_array($query)){
			$price = number_format($row['product_price']);
			$product_image = display_image($row['product_image']);
			$str_len = 80;

			if(strlen($row['short_desc']) > $str_len){
				$short_desc = mb_strcut($row['short_desc'], 0, $str_len, 'utf-8') . "...";
			}else{
				$short_desc = $row['short_desc'];
			}

			if($row['product_quantity'] == 0){
				$display_button = "<a href='#' class='btn btn-danger disabled'>売り切れ</a>";
			}else if($row['product_quantity'] < 0){
				$display_button = "<a href='#' class='btn btn-warning disabled'>未発売</a>";
			}else{
				$display_button = "<a href='./common/cart.php?add={$row['product_id']}' class='btn btn-primary'>カートに入れる</a>
			                            <a href='item.php?id={$row['product_id']}' class='btn btn-default'>すべて見る</a>";
			}

			$reviews = query("SELECT AVG(restar) AS avgstar FROM reviews WHERE review_product_id ={$row['product_id']}");
			confirm($reviews);
			$starrow = fetch_array($reviews);
			$star = $starrow[0];

			$line = query("SELECT restar FROM reviews WHERE review_product_id = {$row['product_id']}" );
			confirm($line);
			$line = mysqli_num_rows($line);

			$ss = '';
			if($line == 0){
				$ss = '<span>※レビューがない※</span>';
			}else{			
								
				for($i = 1;$star - $i >= -0.5 ;$i++){
					$ss .= '<span class="glyphicon glyphicon-star"></span>';
				}
				for($j = 1;$j < 5.5 - $star;$j++){
					$ss .= '<span class="glyphicon glyphicon-star-empty"></span>';
				}
			}	

			$product = <<<DELIMETER
						<div class="col-md-4 col-sm-6 col-lg-3 hero-feature">
			                <div class="thumbnail">
			                    <a href="item.php?id={$row['product_id']}"><img src="{$product_image}" alt=""></a>
			                    <div class="caption">
			                        <h3><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></h3>
			                        <p class="text-left ratings"><b>&yen;{$price}</b>&nbsp;&nbsp;&nbsp;{$ss}</p>
			                        <p>{$short_desc}</p>
			                        <p>
			                            {$display_button}
			                        </p>
			                    </div>
			                </div>
			            </div>
DELIMETER;
			
			echo $product;
		}
		db_free_close($query);	
	}
	
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
	if(isset($_POST['send-mail'])){
		$to			=	"murenkakashu@yahoo.co.jp";
		$from_name	=	$_POST['name'];
		$email		=	$_POST['email'];
		$subject	=	$_POST['subject'];
		$message	=	$_POST['message'];

		$headers = "From: {$from_name} {$email}";

		$result = mail($to, $subject, $message, $headers);

		if(!$result){
			set_message("メッセージの送信に失敗しました!");
			redirect("contact.php");
		}else{
			set_message("メッセージが送信されました!");
			redirect("contact.php");
		}
	}
}

/******** Review Stars ********/
function stars($star){
	for($i = 1;$star - $i >= -0.5 ;$i++){
		echo '<span class="glyphicon glyphicon-star"></span>';
	}
	for($j = 1;$j < 5.5 - $star;$j++){
		echo '<span class="glyphicon glyphicon-star-empty"></span>';
	}
}
  


//---------------- Back end Functions ------------------//
/******** Change Pages ********/
function pages($page,$pagesize,$db,$total_query,$command){
		$prev = $page - 1;
		$next = $page + 1;		
		$showpage = 5;

		/* Totle page */
		/*$total_query = query("SELECT COUNT(*) FROM " . $command . " ");*/
		$total_result = fetch_array($total_query);
		$total = $total_result[0];
		$total_pages = ceil($total/$pagesize);
		$last = $total_pages - 1;

		/* Show pages */
		$pageoffset = ($showpage-1)/2;
		$start = 1;
		$end = $total_pages;		
		
		$pagebanner = 	'<nav>
		           			<ul class="pagination">';

		if($page > 0){
			$pagebanner .= "    
								<li>
									<a href='{$_SERVER["PHP_SELF"]}?{$command}&p=0'>最初</a>
								</li>
				                <li>
				                	<a href='{$_SERVER["PHP_SELF"]}?{$command}&p={$prev}' aria-label='Previous'>
				                        <span aria-hidden='true'>&laquo;</span>
				                    </a>
				                </li>
							";
		}

		if($total_pages > $showpage){
			if($page > $pageoffset + 1){
				$pagebanner .= "<li><a>...</a></li>";
			}
			if($page > $pageoffset){
				$start = $page - $pageoffset;
				$end = $total_pages > $page + $pageoffset ? $page + $pageoffset : $total_pages;
			}else{
				$strat = 1;
				$end = $total_pages > $showpage ? $showpage : $total_pages;
			}
			if($page + $pageoffset > $total_pages){
				$start = $start - ($page + $pageoffset - $end);
			}
		}

		for($i = $start;$i <= $end;$i++){
			$j = $i - 1;
			$pagebanner .= "<li><a href='{$_SERVER["PHP_SELF"]}?{$command}&p={$j}'>{$i}</a></li>";			
		}

		if($total_pages > $showpage && $total_pages > $page + $pageoffset){
			$pagebanner .= "<li><a>...</a></li>";
		}

		if($page < $total_pages - 1){
			$pagebanner .= "    
				                <li>
				                	<a href='{$_SERVER["PHP_SELF"]}?{$command}&p={$next}' aria-label='Next'>
				                        <span aria-hidden='true'>&raquo;</span>
				                    </a>
				                </li>
				                <li>
									<a href='{$_SERVER["PHP_SELF"]}?{$command}&p={$last}'>最終</a>
								</li>
							";
		}

		$pagebanner .= "
								<li><a href='#' class='btn disabled'>共{$total_pages}頁</a></li>
				                <li><a href='#' class='btn disabled'>第{$next}頁</a></li>	
		                	</ul>
				        </nav>";

		echo $pagebanner;
		db_free_close($total_query);
}


/******** Orders in Admin ********/
function display_orders(){
	$page = $_GET['p'];
	$pagesize = 5;
	$db = $command = "orders";
	$total_query = query("SELECT COUNT(*) FROM " . $db . " ");

	$query = query("SELECT * FROM orders LIMIT " . $page*$pagesize . "," . $pagesize);
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
                    <td>
                    	<a class="btn btn-danger" href="delete_order.php?id={$row['order_id']}">
                    	<span class='glyphicon glyphicon-remove'></span></a>
                    </td>
                </tr>
DELIMETER;
		
		echo $orders;
	}
	pages($page,$pagesize,$db,$total_query,$command);
}


/******** Products in Admin ********/
function display_image($picture){	
	global $upload_directory;
	return $upload_directory . DS . $picture;
}

function display_products(){
	$page = $_GET['p'];
	$pagesize = 5;
	$db = $command = "products";
	$total_query = query("SELECT COUNT(*) FROM " . $db . " ");

	$query = query("SELECT * FROM products LIMIT " . $page*$pagesize . "," . $pagesize);
	confirm($query);
	$price = 0;

	while($row = fetch_array($query)){

		$category = show_product_category_title($row['product_category_id']);
		$product_image = display_image($row['product_image']);
		$price = number_format($row['product_price']);

		$product = <<<DELIMETER
					<tr>
			            <td>{$row['product_id']}</td>
			            <td>{$row['product_title']}</td>
			            <td>
			            	<a href="index.php?edit_product&id={$row['product_id']}">
			                <img width="50" src="../{$product_image}" alt=""></a>
			            </td>
			            <td>{$category}</td>
			            <td>&yen;{$price}</td>
			            <td>{$row['product_quantity']}</td>
			            <td>
			            	<a class="btn btn-danger" href="delete_product.php?id={$row['product_id']}">
			            	<span class='glyphicon glyphicon-remove'></span></a>
			            </td>
			        </tr>
DELIMETER;
		echo $product;
	}
	pages($page,$pagesize,$db,$total_query,$command);
}

function show_product_category_title($product_category_id){

	$query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
	confirm($query);

	while($category_row = fetch_array($query)){
		return $category_row['cat_title'];
	}
}

/******** Add Products in Admin ********/
function add_products(){
	if(isset($_POST['publish'])){
		global $upload_directory;

		$product_title			=	escape_string($_POST['product_title']);
		$product_category_id	=	escape_string($_POST['product_category_id']);
		$product_price			=	escape_string($_POST['product_price']);
		$product_description	=	escape_string($_POST['product_description']);
		$short_desc				=	escape_string($_POST['short_desc']);
		$product_quantity		=	escape_string($_POST['product_quantity']);
		$product_image			=	escape_string($_FILES['file']['name']);
		$image_temp_location	=	stripslashes(escape_string($_FILES['file']['tmp_name']));
		$add_datetime    =   date("Y-m-d H:i:s");

		/*if (!move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $product_image)){			
			echo "エラー：".$_FILES['file']['error']."<br>";
			exit;
		}else{
			echo "ファイル".$_FILES['file']['name']."アップロードされました.";
		}*/

		move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $product_image);

		$query = query("INSERT INTO products(
										product_title,
										product_category_id, 
										product_price, 
										product_description, 
										short_desc, 
										product_quantity, 
										product_image,
										add_datetime
									) 
							  VALUES(
										'{$product_title}',
										'{$product_category_id}', 
										'{$product_price}', 
										'{$product_description}', 
										'{$short_desc}', 
										'{$product_quantity}', 
										'{$product_image}',
										'{$add_datetime}'
									)"
						);
		$last_id = last_id();
		confirm($query);
		
		set_message("{$last_id} 番の新商品 {$product_title}　を追加しました!");
		redirect("index.php?products&p=0");
	}
	/*print_r($_FILES);*/
}

/******** Update Products in Admin ********/
function update_products(){
	if(isset($_POST['update'])){
		global $upload_directory;

		$product_title			=	escape_string($_POST['product_title']);
		$product_category_id	=	escape_string($_POST['product_category_id']);
		$product_price			=	escape_string($_POST['product_price']);
		$product_description	=	escape_string($_POST['product_description']);
		$short_desc				=	escape_string($_POST['short_desc']);
		$product_quantity		=	escape_string($_POST['product_quantity']);
		$product_image			=	escape_string($_FILES['file']['name']);
		$image_temp_location	=	stripslashes(escape_string($_FILES['file']['tmp_name']));
		$add_datetime    =   date("Y-m-d H:i:s");

		if(empty($product_image)){
			$get_pic_query = query("SELECT product_image FROM products WHERE product_id=" . escape_string($_GET['id']) ." ");
			confirm($get_pic_query);

			while($pic = fetch_array($get_pic_query)){
				$product_image = $pic['product_image'];
			}
		}

		move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $product_image);

		$send_update_query 	= query("UPDATE products SET 
					product_title='{$product_title}',
					product_category_id='{$product_category_id}',
					product_price='{$product_price}',
					product_description='{$product_description}',
					short_desc='{$short_desc}',
					product_quantity='{$product_quantity}',
					product_image='{$product_image}' ,
					add_datetime='{$add_datetime}'
					WHERE product_id=" . escape_string($_GET['id']) ." ");		
		confirm($send_update_query);
		
		set_message("商品が更新されました!");
		redirect("index.php?products&p=0");
	}	
}

/******** Show categories title ********/
function show_categories_add_product_page(){
	$query = query("SELECT * FROM categories");
	confirm($query);

	while($row = fetch_array($query)){
		$categories_options = <<<DELIMETER
					<option value="{$row['cat_id']}">{$row['cat_title']}</option>  
DELIMETER;
		
		echo $categories_options;
	}
	db_free_close($query);
}

/******** Categories in Admin ********/
function display_categories(){
	$page = $_GET['p'];
	$pagesize = 5;
	$db = $command = "categories";
	$total_query = query("SELECT COUNT(*) FROM " . $db . " ");

	$query = query("SELECT * FROM categories LIMIT " . $page*$pagesize . "," . $pagesize);
	confirm($query);

	while($row = fetch_array($query)){
		$cat_id = $row['cat_id'];
		$cat_title = $row['cat_title'];
		$cat_desc = $row['cat_desc'];

		$category = <<<DELIMETER
					<tr>
                		<td>{$cat_id}</td>
               			<td>{$cat_title}</td>
               			<td id="cat_dis" >{$cat_desc}</td>
               			<td><a class="btn btn-danger" href="delete_category.php?id={$row['cat_id']}">
               				<span class='glyphicon glyphicon-remove'></span></a>
               			</td>
            		</tr>
DELIMETER;
		echo $category;
	}
	pages($page,$pagesize,$db,$total_query,$command);
}

/******** Add Categories in Admin ********/
function add_category(){
	if(isset($_POST['add_category'])){
		$cat_title = escape_string($_POST['cat_title']);
		$cat_desc = escape_string($_POST['cat_desc']);

		if(empty($cat_title) || $cat_title == " "){
			echo "<p class='bg-danger'>これは空にすることはできません!</p>";
		}else{
			$insert_cat = query("INSERT INTO categories(cat_title, cat_desc) VALUES('{$cat_title}', '{$cat_desc}') ");
			confirm($insert_cat);
			set_message("カテゴリーを追加しました!");
		}
	}
}

/******** Users in Admin ********/
function display_users(){
	$page = $_GET['p'];
	$pagesize = 5;
	$db = $command = "users";
	$total_query = query("SELECT COUNT(*) FROM " . $db . " ");

	$user_query = query("SELECT * FROM users LIMIT " . $page*$pagesize . "," . $pagesize);
	confirm($user_query);

	while($row = fetch_array($user_query)){
		$user_id 		= 	$row['user_id'];
		$nickname       =   $row['nickname'];
        $password       =   $row['password'];
        $username_shi   =   $row['username_shi'];
        $username_mei   =   $row['username_mei'];
        $email          =   $row['email'];
        $adr            =   $row['adr'];
        $tel            =   $row['tel'];
        $birth_year     =   $row['birth_year'];
        $birth_mon      =   $row['birth_mon'];
        $birth_day      =   $row['birth_day'];
        $sex            =   $row['sex']; 

        $shimei = $username_shi . " " . $username_mei;
        $birth = $birth_year . "-" . $birth_mon . "-" . $birth_day; 
		$user_photo = display_image($row['user_photo']);

		/*<a href="index.php?edit_user&id={$row['user_id']}">*/
		$user = <<<DELIMETER
					<tr>
                		<td>{$user_id}</td>
               			<td><img width="30" src="../{$user_photo}" alt=""></td>
               			<td>{$nickname}</td>
               			<td>{$shimei}</td>
               			<td>{$email }</td>               			
               			<td>{$tel}</td>
               			<td>{$birth}</td>
               			<td>{$sex}</td>
               			<td><a class="btn btn-danger" href="delete_user.php?id={$row['user_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
            		</tr>
DELIMETER;
		
		echo $user;
	}
	pages($page,$pagesize,$db,$total_query,$command);
}


/******** Reports in Admin ********/
function display_reports(){
	$page = $_GET['p'];
	$pagesize = 5;
	$db = $command = "reports";
	$total_query = query("SELECT COUNT(*) FROM " . $db . " ");

	$query = query("SELECT * FROM reports LIMIT " . $page*$pagesize . "," . $pagesize);
	confirm($query);

	while($row = fetch_array($query)){
		$amount = number_format($row['product_price'] * $row['product_quantity']);
		$price = number_format($row['product_price']);
		$report = <<<DELIMETER
					<tr>
			            <td>{$row['report_id']}</td>
			            <td>{$row['product_id']}</td>
			            <td>{$row['order_id']}</td>
			            <td>{$row['product_title']}</td>
			            <td>&yen;{$price}</td>
			            <td>{$row['product_quantity']}</td>
			            <td>&yen;{$amount}</td>
			            <td>{$row['report_date']}</td>		            
			            <td>{$row['report_time']}</td>		            
			            <td>
				            <a class="btn btn-danger" href="delete_report.php?id={$row['report_id']}">
				            <span class='glyphicon glyphicon-remove'></span></a>
			            </td>
			        </tr>
DELIMETER;
		echo $report;
	}
	pages($page,$pagesize,$db,$total_query,$command);
}

/******** Dashboard in Admin ********/
function conut_db($result){
	$query = query("SELECT * FROM ". $result ." ");
	confirm($query);
	$rows = mysqli_num_rows($query);
	echo $rows;
}

function display_dashboard(){
	$pagesize = 10;
	$query = query("SELECT * FROM reports ORDER BY report_id desc LIMIT " . $pagesize);
	confirm($query);

	while($row = fetch_array($query)){		
		$amount = $row['product_price'] * $row['product_quantity'];
		$price = number_format($amount);
		$report = <<<DELIMETER
					<tr>
			            <td>{$row['order_id']}</td>
			            <td>{$row['product_title']}</td>
			            <td>&yen;{$price}</td>
			            <td>{$row['report_date']}</td>		            
			            <td>{$row['report_time']}</td>
			            <td>{$row['buyer_name']}</td>			            
			        </tr>
DELIMETER;
		echo $report;
	}
}

/******** Dashboard in User ********/
function conut_db_user($result){
	$nickname = $_SESSION['nickname'];
	$query = query("SELECT * FROM {$result} WHERE buyer_name = '{$nickname}'");
	confirm($query);
	$rows = mysqli_num_rows($query);
	echo $rows;
}

function display_dashboard_user(){
	$pagesize = 5;
	$nickname = $_SESSION['nickname'];
	$query = query("SELECT * FROM reports WHERE buyer_name = '{$nickname}' ORDER BY report_id desc LIMIT " . $pagesize);
	confirm($query);

	while($row = fetch_array($query)){		
		$amount = $row['product_price'] * $row['product_quantity'];
		$price = number_format($amount);
		$report = <<<DELIMETER
					<tr>
			            <td>{$row['order_id']}</td>
			            <td>{$row['product_title']}</td>
			            <td>&yen;{$price}</td>
			            <td>{$row['report_date']}</td>		            
			            <td>{$row['report_time']}</td>
			        </tr>
DELIMETER;
		echo $report;
	}
}

/******** Reports in Admin ********/
function display_history(){
	$nickname = $_SESSION['nickname'];
	$page = $_GET['p'];
	$pagesize = 5;
	$db = "reports";
	$command = "history";
	$total_query = query("SELECT COUNT(*) FROM {$db} WHERE buyer_name = '{$nickname}'");

	$query = query("SELECT * FROM reports WHERE buyer_name = '{$nickname}' ORDER BY report_id desc LIMIT " . $page*$pagesize . "," . $pagesize);
	confirm($query);

	while($row = fetch_array($query)){
		$amount = number_format($row['product_price'] * $row['product_quantity']);
		$price = number_format($row['product_price']);
		$report = <<<DELIMETER
					<tr>
			            <td>{$row['report_id']}</td>
			            <td>{$row['product_id']}</td>
			            <td>{$row['order_id']}</td>
			            <td>{$row['product_title']}</td>
			            <td>&yen;{$price}</td>
			            <td>{$row['product_quantity']}</td>
			            <td>&yen;{$amount}</td>
			            <td>{$row['report_date']}</td>		            
			            <td>{$row['report_time']}</td> 
			        </tr>
DELIMETER;
		echo $report;
	}
	pages($page,$pagesize,$db,$total_query,$command);
}

/******** Update Users in User ********/
function update_users(){
	if(isset($_POST['update_user'])){
		global $upload_directory;
		$error = "";
		$nickname		=	$_SESSION['nickname'];

        $password       =   escape_string($_POST['password']);
        $username_shi   =   escape_string($_POST['username_shi']);
        $username_mei   =   escape_string($_POST['username_mei']);
        $adr            =   escape_string($_POST['adr']);
        $tel            =   escape_string($_POST['tel']);
        $birth_year     =   escape_string($_POST['birth_year']);
        $birth_mon      =   escape_string($_POST['birth_mon']);
        $birth_day      =   escape_string($_POST['birth_day']);
        $sex            =   escape_string($_POST['sex']);
        $user_photo             =   escape_string($_FILES['file']['name']);
        $image_temp_location    =   stripslashes(escape_string($_FILES['file']['tmp_name']));

		if(empty($user_photo)){
			$get_pic_query = query("SELECT user_photo FROM users WHERE nickname = '{$nickname}'");
			confirm($get_pic_query);

			while($pic = fetch_array($get_pic_query)){
				$user_photo = $pic['user_photo'];
			}
		}

		move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY . DS . $user_photo);

        // パスワードチェック----------------------------------------------------------
        // ①半角英数記号
        if(!mb_ereg_match('^[!-z]+$', $password)){
            $error .= "パスワードは半角英数記号で入力してください<br>";
        } else {
            // ②長さが8～16文字
            if(mb_strlen($password) < 8 || mb_strlen($password) > 16){
                $error .= "パスワードは半角8～16文字で入力してください<br>";
            }
        }               

        // 氏チェック------------------------------------------------------------
        $wk_fname = mb_ereg_replace("　","", $username_shi);         // 全角ブランク削除
        $wk_fname = mb_ereg_replace(" ","", $wk_fname);             // 半角ブランク削除
        if($wk_fname == ""){
            $error .= "氏を入力してください<br>";
        }

        // 名チェック------------------------------------------------------------
        $wk_lname = mb_ereg_replace("　","", $username_mei);         // 全角ブランク削除
        $wk_lname = mb_ereg_replace(" ","", $wk_lname);             // 半角ブランク削除
        if($wk_lname == ""){
            $error .= "名を入力してください<br>";
        }        

        // 住所チェック----------------------------------------------------------
        $wk_adr = mb_ereg_replace("　","", $adr);                    // 全角ブランク削除
        if($wk_adr == ""){
            $error .= "住所を入力してください<br>";
        }

        // 電話チェック----------------------------------------------------------
        // ①半角数字
        if(!mb_ereg_match('^[0-9]+$', $tel)){
            $error .= "電話は半角数字で入力してください（ハイフン不要）<br>";
        } else {
            // ②長さが9～11文字
            if(mb_strlen($tel) < 9 || mb_strlen($tel) > 11){
                $error .= "電話は半角数字9～11文字で入力してください<br>";
            }
        }

        // 生年月日チェック-------------------------------------------------------
        if(!mb_ereg_match('^[0-9]+$', $birth_year) || !mb_ereg_match('^[0-9]+$', $birth_mon) || !mb_ereg_match('^[0-9]+$', $birth_day)){
            $error .= "生年月日を入力してください<br><br>";
        }

        // 性別チェック----------------------------------------------------------
        $wk_sex = array("","");
        $en_sex = "";
        if(!isset($sex)){
            $error .= "性別を指定してください<br>";
        } else {
            if($sex == "1"){
                $wk_sex[0] = "checked";
                $en_sex = "男";            
            }
            if($sex == "2"){
                $wk_sex[1] = "checked";
                $en_sex = "女"; 
            }
        }

        set_message($error);

        if($error == ""){
			$send_update_query 	= query("UPDATE users SET 
						password='{$password}',
						username_shi='{$username_shi}',
						username_mei='{$username_mei}',
						adr='{$adr}',
						tel='{$tel}',
						birth_year='{$birth_year}',
						birth_mon='{$birth_mon}',
						birth_day='{$birth_day}',
						sex='{$en_sex}',
						user_photo='{$user_photo}' WHERE nickname = '{$nickname}'");		
			confirm($send_update_query);
			
			set_message("個人情報が更新されました!");
			/*redirect("index.php?personal");*/
		}
	}
}





?>