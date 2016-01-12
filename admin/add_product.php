<?php add_products(); ?>
<h1 class="page-header">
    <i class="fa fa-fw fa-plus-square"></i>商品を追加
</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="col-md-8">
        <div class="form-group">
            <label for="product-title">商品名</label>
            <input type="text" name="product_title" class="form-control">
        </div>

        <div class="form-group">
            <label for="product-title">商品紹介</label>
            <textarea name="product_description" cols="30" rows="6" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="product-title">簡単な紹介</label>
            <textarea name="short_desc" cols="30" rows="3" class="form-control"></textarea>
        </div>

        <div class="form-group row">
            <div class="col-xs-3">
                <label for="product-price">商品売価(JPY)</label>
                <input type="number" name="product_price" class="form-control" size="60">
            </div>
        </div>
    </div><!--Main Content-->

    <!-- SIDEBAR-->
    <aside id="admin_sidebar" class="col-md-4">     
        <div class="form-group">
            <input type="submit" name="publish" class="btn btn-primary btn-lg" value="送信">
            <a href="index.php" class="btn btn-warning btn-lg">取消</a>
        </div>

        <!-- Product Categories-->
        <div class="form-group">
            <label for="product-title">商品カテゴリー</label>
            <select name="product_category_id" class="form-control">
                <option value="">カテゴリー選択</option>
                <?php show_categories_add_product_page(); ?>
            </select>
        </div>

        <!-- Product Brands-->
        <div class="form-group">
            <label for="product-title">商品在庫数量</label>
            <input type="number" name="product_quantity" class="form-control">
        </div>

        <!-- Product Image -->
        <div class="form-group">
            <label for="product-title">商品イメージ</label>
            <input type="file" name="file">          
        </div>

    </aside><!--SIDEBAR-->    
</form>