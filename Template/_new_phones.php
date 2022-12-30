<section id="new-phones" style="margin: 4%" >
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>


        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product->getData('product','latest') as $item): ?>
                <?php require "_product_cart.php" ?>
            <?php endforeach; ?>
        </div>
        <!-- !owl carousel -->

    </div>
</section>
