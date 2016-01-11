<?php require_once("../common/config.php");

	if(isset($_GET['id'])){
		$query = query("DELETE FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
		confirm($query);

		set_message("商品削除されました!");
		redirect("index.php?products&p=0");

	}else{

		redirect("index.php?products&p=0");

	}



?>