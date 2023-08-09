<h2>List of products</h2>

<?php if (!empty($products)): ?>
    <ul>
        <?php foreach($products as $productName): ?>
            <li><a href="classicmodels?code=">
                <?= $productName['productName'] ?>
            </li></a>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>