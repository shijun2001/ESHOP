<?php add_category(); ?>

<h1 class="page-header">
    すべてのカテゴリー
</h1>

<div class="col-md-4">  
    <h4 class="bg-success"><?php display_message(); ?></h4>  
    <form action="" method="post">    
        <div class="form-group">
            <label for="category-title">タイトル</label>
            <input name="cat_title" type="text" class="form-control">
        </div>

        <div class="form-group">            
            <input name="add_category" type="submit" class="btn btn-primary" value="追加">
        </div>
    </form>
</div>

<div class="col-md-8">
    <table class="table">
        <thead>
            <tr>
                <th>カテゴリーID</th>
                <th>カテゴリー名</th>
            </tr>
        </thead>
        <tbody>
            <?php display_categories(); ?>
        </tbody>
    </table>
</div>