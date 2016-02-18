<?php require_once("./common/config.php"); ?>
<?php

	if(isset($_POST['review'])){		
		$rename		=	escape_string($_POST['review-name']);
		$reemail	=	escape_string($_POST['review-email']);
		$remsg		=	escape_string($_POST['review-msg']);
		$insert_re = query("INSERT INTO reviews VALUES('', '{$rename}', '{$reemail}', '{$remsg}') ");
		confirm($insert_re);
	}

?>