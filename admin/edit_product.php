<?php   
    if(isset($_GET['id'])){
        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
        confirm($query);

        while($row = fetch_array($query)){
            $product_title          =   escape_string($row['product_title']);
            $product_category_id    =   escape_string($row['product_category_id']);
            $product_price          =   escape_string($row['product_price']);
            $product_description    =   escape_string($row['product_description']);
            $short_desc             =   escape_string($row['short_desc']);
            $product_quantity       =   escape_string($row['product_quantity']);
            $product_image          =   escape_string($row['product_image']);

            $product_image = display_image($row['product_image']);
        }        
        update_products();
    }
?>


<h1 class="page-header">
    商品を編集
</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="col-md-8">
        <div class="form-group">
            <label for="product-title">商品名</label>
            <input type="text" name="product_title" class="form-control" value="<?php echo $product_title; ?>">
        </div>

        <div class="form-group">
            <label for="product-title">商品紹介</label>
            <textarea name="product_description" cols="30" rows="6" class="form-control"><?php echo $product_description; ?></textarea>
        </div>

        <div class="form-group">
            <label for="product-title">簡単な紹介</label>
            <textarea name="short_desc" cols="30" rows="3" class="form-control"><?php echo $short_desc; ?></textarea>
        </div>

        <div class="form-group row">
            <div class="col-xs-3">
                <label for="product-price">商品売価(JPY)</label>
                <input type="number" name="product_price" class="form-control" size="60" value="<?php echo $product_price; ?>">
            </div>
        </div>
    </div><!--Main Content-->

    <!-- SIDEBAR-->
    <aside id="admin_sidebar" class="col-md-4">     
        <div class="form-group">
            <input type="submit" name="update" class="btn btn-primary btn-lg" value="更新">
            <a href="index.php?products&p=0" class="btn btn-warning btn-lg">取消</a>
        </div>

        <!-- Product Categories-->
        <div class="form-group">
            <label for="product-title">商品カテゴリー</label>
            <select name="product_category_id" class="form-control">
                <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id) ?></option>
                <?php show_categories_add_product_page(); ?>
            </select>
        </div>

        <!-- Product Brands-->
        <div class="form-group">
            <label for="product-title">商品在庫数量</label>
            <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
        </div>

        <!-- Product Image -->
        <div class="form-group">
            <label for="product-title">商品イメージ</label>
            <input type="file" name="file"><br>
            <img width="150" src="../<?php echo $product_image; ?>" alt="">        
        </div>

    </aside><!--SIDEBAR-->    
</form>