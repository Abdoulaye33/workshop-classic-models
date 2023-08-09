<?= <h2>$productName;</h2> ?>

<?php if (!empty($product)) ?>

<?php foreach ($product as $productDescription): ?>

    <?php
    echo $productDescription['productDescription'];
    ?>

<?php endif; ?>