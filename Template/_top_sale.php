<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product->getData('product','all') as $item): ?>
                <?php require "_product_cart.php" ?>
            <?php endforeach; ?>
        </div>
        <!-- !owl carousel -->
    </div>
</section>