<?php add_category(); ?>
<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            <i class="fa fa-fw fa-cubes"></i>すべてのカテゴリー
        </h1>
        <h4 class="bg-success"><?php display_message_success(); ?></h4>  
    </div>

    <div class="col-md-4">
        <form action="" method="post">    
            <div class="form-group">
                <label for="category-title">カテゴリータイトル</label>
                <input name="cat_title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="category-description">カテゴリー紹介</label>
                <textarea name="cat_desc" type="text" cols="20" rows="10" class="form-control"></textarea> 
            </div>

            <div class="form-group">            
                <input name="add_category" type="submit" class="btn btn-primary pull-right" value="追加" >
            </div>
        </form>
    </div>

    <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                    <th>カテゴリーID</th>
                    <th>カテゴリー名</th>
                    <th>カテゴリー紹介</th>
                </tr>
            </thead>
            <tbody>
                <?php display_categories(); ?>
            </tbody>
        </table>
    </div>
</div><!-- col-md-12 -->