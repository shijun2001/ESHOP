<?php require_once("../common/config.php");

	if(isset($_GET['id'])){
		$query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
		confirm($query);

		set_message("ユーザー削除されました!");
		redirect("index.php?users&p=0");

	}else{

		redirect("index.php?users&p=0");

	}



?>