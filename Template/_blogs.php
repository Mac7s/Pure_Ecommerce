<section id="blogs">
    <div class="container py-4">
        <h4 class="font-rubik font-size-20">Latest Blogs</h4>
        <hr>
        <div class="owl-carousel owl-theme">
            <?php foreach($blog->getData('blog','latest') as $item): ?>
                <?php require "_blog_cart.php" ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
