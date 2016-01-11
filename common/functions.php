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
		$product_image = display_image($row['product_image']);

		$product = <<<DELIMETER
					<div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <a href="item.php?id={$row['product_id']}"><img src="{$product_image}" alt=""></a>
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
		$product_image = display_image($row['product_image']);

		$product = <<<DELIMETER
					<div class="col-md-3 col-sm-6 hero-feature">
		                <div class="thumbnail">
		                    <a href="item.php?id={$row['product_id']}"><img src="{$product_image}" alt=""></a>
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

		$product_image = display_image($row['product_image']);

		$product = <<<DELIMETER
					<div class="col-md-3 col-sm-6 hero-feature">
		                <div class="thumbnail">
		                    <img src="{$product_image}" alt="">
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
			set_message("メッセージの送信に失敗しました!");
			redirect("contact.php");
		}else{
			set_message("メッセージが送信されました!");
			redirect("contact.php");
		}
	}
}





//---------------- Back end Functions ------------------//
/******** Change Pages ********/
function pages($page,$pagesize,$command){
		$prev = $page - 1;
		$next = $page + 1;		
		$showpage = 5;

		/* Totle page */
		$total_query = query("SELECT COUNT(*) FROM " . $command . " ");
		$total_result = fetch_array($total_query);
		$total = $total_result[0];
		$total_pages = ceil($total/$pagesize);
		$pagebanner = 	'<nav>
		           			<ul class="pagination">';

		/* Show pages */
		$pageoffset = ($showpage-1)/2;
		$start = 1;
		$end = $total_pages;		

		if($page > 0){
			$pagebanner .= "    
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
							";
		}

		$pagebanner .= "
								<li><a href='#'>共{$total_pages}页</a></li>
				                <li><a href='#'>第{$next}页</a></li>	
		                	</ul>
				        </nav>";

		echo $pagebanner;
		db_free_close($total_query);
}


/******** Display orders in Admin ********/
function display_orders(){
	$page = $_GET['p'];
	$pagesize = 5;
	$command = "orders";	

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
                    <td><a class="btn btn-danger" href="delete_order.php?id={$row['order_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
                </tr>
DELIMETER;
		
		echo $orders;
	}
	pages($page,$pagesize,$command);
}


/******** Admin Products Page ********/
function display_image($picture){	
	global $upload_directory;
	return $upload_directory . DS . $picture;
}

function display_products(){
	$page = $_GET['p'];
	$pagesize = 5;
	$command = "products";	

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
			            <td>{$row['product_title']}<br>
			                <a href="index.php?edit_product&id={$row['product_id']}"><img width="100" src="../{$product_image}" alt=""></a>
			            </td>
			            <td>{$category}</td>
			            <td>&yen;{$price}</td>
			            <td>{$row['product_quantity']}</td>
			            <td><a class="btn btn-danger" href="delete_product.php?id={$row['product_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
			        </tr>
DELIMETER;
		echo $product;
	}
	pages($page,$pagesize,$command);
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
										product_image
									) 
							  VALUES(
										'{$product_title}',
										'{$product_category_id}', 
										'{$product_price}', 
										'{$product_description}', 
										'{$short_desc}', 
										'{$product_quantity}', 
										'{$product_image}'
									)"
						);
		$last_id = last_id();
		confirm($query);
		
		set_message("{$last_id} 番の新商品 {$product_title}　を追加しました!");
		redirect("index.php?products&p=0");
	}
	/*print_r($_FILES);*/
}


/******** Show Categories ********/
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
					product_image='{$product_image}' WHERE product_id=" . escape_string($_GET['id']) ." ");		
		confirm($send_update_query);
		
		set_message("商品が更新されました!");
		redirect("index.php?products&p=0");
	}	
}


/******** Categories in Admin ********/
function display_categories(){
	$page = $_GET['p'];
	$pagesize = 5;
	$command = "categories";	

	$query = query("SELECT * FROM categories");
	confirm($query);

	while($row = fetch_array($query)){
		$cat_id = $row['cat_id'];
		$cat_title = $row['cat_title'];

		$category = <<<DELIMETER
					<tr>
                		<td>{$cat_id}</td>
               			<td>{$cat_title}</td>
               			<td><a class="btn btn-danger" href="delete_category.php?id={$row['cat_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
            		</tr>
DELIMETER;
		echo $category;
	}
	pages($page,$pagesize,$command);
}

function add_category(){
	if(isset($_POST['add_category'])){
		$cat_title = escape_string($_POST['cat_title']);

		if(empty($cat_title) || $cat_title == " "){
			echo "<p class='bg-danger'>これは空にすることはできません!</p>";
		}else{
			$insert_cat = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}') ");
			confirm($insert_cat);
			set_message("カテゴリー作成しました!");
		}
	}
}













?>