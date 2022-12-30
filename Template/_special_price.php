<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <hr>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <button class="btn" data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Redmi">Redmi</button>
        </div>
        <div class="grid">

            <?php foreach($product->getData('product','random') as $item): ?>
                <div class="grid-item <?= $item->item_brand ?> border" >
                    <?php require "_product_cart.php" ?>
                </div>
            <?php endforeach; ?>



        </div>
    </div>
</section>
