<div class="col-md-3">
	<p class="lead">カテゴリー</p>
	<div class="list-group">
		<?php 
			
			$query = "SELECT * FROM categories";
			$send_query = mysqli_query($conn, $query);

			while($row = mysqli_fetch_array($send_query)){			
				echo "<a href='category.php' class='list-group-item'>{$row['cat_title']}</a>";
			}

		?>

	</div>
</div>