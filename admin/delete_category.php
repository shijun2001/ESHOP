<?php require_once("../common/config.php");

	if(isset($_GET['id'])){
		$query = query("DELETE FROM categories WHERE cat_id = " . escape_string($_GET['id']) . " ");
		confirm($query);

		set_message("カテゴリー削除されました!");
		redirect("index.php?categories&p=0");

	}else{

		redirect("index.php?categories&p=0");

	}



?>