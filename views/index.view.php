<?php include 'partials/header.php' ?>
<?php include 'partials/nav.php' ?>

<main>
    <table id="grocery-table">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($products as $product):?>
            <tr>
                <td><?= $product['name']?></td>
                <td class="amount product-price"><?= $product['price']?></td>
                <td><input class="product-quantity" value="<?= $product['quantity']?>"></input></td>
                <td class="amount product-totalcost"><?= subTotal($product['price'], $product['quantity']); ?></td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="3">Totaal</td>
            <td class="amount" id="totalcost"><?= array_reduce($products, "total", 0) ?></td>
        </tr>
    </table>
</main>
<?php include 'partials/footer.php' ?>
