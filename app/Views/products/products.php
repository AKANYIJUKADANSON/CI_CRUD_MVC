
<h1 style="color: orangered; font-size: 40px; text-align: center">Our Products</h1>
<ul>
    <?php 
    $products = explode(", ", $productList);
    foreach ($products as $product): ?>
        <li><?php echo $product; ?></li>
    <?php endforeach; ?>
</ul>