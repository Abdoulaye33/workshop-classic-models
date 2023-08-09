<h2>List of products</h2>

<?php if (!empty($products)): ?>
    <ul>
        <?php foreach($products as $product): ?>
            <li>
                <?= $product['productName'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>