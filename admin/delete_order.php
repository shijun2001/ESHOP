<?php require_once("../common/config.php");

	if(isset($_GET['id'])){
		$query = query("DELETE FROM orders WHERE order_id = " . escape_string($_GET['id']) . " ");
		confirm($query);

		set_message("注文削除されました!");
		redirect("index.php?orders&p=0");

	}else{

		redirect("index.php?orders&p=0");

	}

?>