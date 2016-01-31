<?php require_once("./common/config.php"); ?>

<?php
	if(isset($_POST['review-name']) && isset($_POST['review-email']) && isset($_POST['review'])) {
		$rename = escape_string($_POST['review-name']);
		$reemail = escape_string($_POST['review-email']);
		$review = escape_string($_POST['review']);
		$review_date   =   date("Y-m-d");
        $review_time   =   date("H:i:s");

		$query = query("INSERT INTO reviews (rename, reemail, review, review_date, review_time)
							VALUES ('$rename','$reemail','$review','$review_date','$review_time')");
		confirm($query);		
	}
?>