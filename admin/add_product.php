<h1 class="page-header">
    商品を追加
</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="col-md-8">
        <div class="form-group">
            <label for="product-title">商品名</label>
            <input type="text" name="product_title" class="form-control">
        </div>

        <div class="form-group">
            <label for="product-title">商品紹介</label>
            <textarea name="product_description" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="product-title">簡単な紹介</label>
            <textarea name="short_desc" cols="30" rows="3" class="form-control"></textarea>
        </div>

        <div class="form-group row">
            <div class="col-xs-3">
                <label for="product-price">商品価格</label>
                <input type="number" name="product_price" class="form-control" size="60">
            </div>
        </div>
    </div><!--Main Content-->

    <!-- SIDEBAR-->
    <aside id="admin_sidebar" class="col-md-4">     
        <div class="form-group">
            <input type="submit" name="publish" class="btn btn-primary btn-lg" value="送信">
            <input type="submit" name="cancel" class="btn btn-warning btn-lg" value="取消">
        </div>

        <!-- Product Categories-->
        <div class="form-group">
            <label for="product-title">商品カテゴリー</label>
            <select name="product_category_id" class="form-control">
                <option value="">選択</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
        </div>

        <!-- Product Brands-->
        <div class="form-group">
            <label for="product-title">商品数量</label>
            <input type="number" name="product_quantity" class="form-control">
        </div>

        <!-- Product Image -->
        <div class="form-group">
            <label for="product-title">商品イメージ</label>
            <input type="file" name="file">          
        </div>

    </aside><!--SIDEBAR-->    
</form>