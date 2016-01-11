<?php require_once("../common/config.php");

	if(isset($_GET['id'])){
		$query = query("DELETE FROM reports WHERE report_id = " . escape_string($_GET['id']) . " ");
		confirm($query);

		set_message("レポート削除されました!");
		redirect("index.php?reports&p=0");

	}else{

		redirect("index.php?reports&p=0");

	}



?>