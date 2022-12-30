<div class="item py-2" style="width: 200px;">
    <div class="product font-rale">
        <a href="#"><img src="../asset<?= $item->item_image ?>" alt="product1" class="img-fluid"></a>
        <div class="text-center">
            <h6><?= $item->item_name?></h6>
            <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
                <span><?= $item->item_price ?></span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
        </div>
    </div>
</div>
