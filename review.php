<?php require_once("./common/config.php"); ?>

<?php
	if(isset($_POST['review-name']) && isset($_POST['review-email']) && isset($_POST['review-msg'])) {
		$rename = escape_string($_POST['review-name']);
		$reemail = escape_string($_POST['review-email']);
		$reviewmsg = escape_string($_POST['review-msg']);
		$review_product_id = 1;
		$review_datetime   =   date("Y-m-d H:i:s");

		$query = query("INSERT INTO reviews (rename, reemail, review, review_product_id, review_datetime)
							VALUES ('$rename','$reemail','$review','$review_product_id','$review_datetime')");
		confirm($query);		
	}
?>