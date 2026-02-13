<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Boodschappenlijst</title>
</head>
<body>
    <table id="grocery-table">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Hoeveelheid</th>
            <th>Subtotaal</th>
        </tr>
        <?php foreach ($products as $product):?>
            <tr>
                <?php foreach ($product as $key => $value): ?>
                    <td><?= $value ?>
                <?php endforeach ?>
                <td><?= subTotal($product['price'], $product['amount']); ?></td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="3">Totaal</td>
            <td class="amount" id="totalcost"><?= total($subtotals) ?></td>
        </tr>
        <!--
        <tr>
            <td>Rijst</td>
            <td class="amount product-price">1.00</td>
            <td><input class="product-quantity" value="1"></td>
            <td class="amount product-totalcost">1.00</td>
        </tr>
        <tr>
            <td>Broccoli</td>
            <td class="amount product-price">0.99</td>
            <td><input class="product-quantity" value="2"></td>
            <td class="amount product-totalcost">1.98</td>
        </tr>
        <tr>
            <td>Koekjes</td>
            <td class="amount product-price">1.20</td>
            <td><input class="product-quantity" value="4"></td>
            <td class="amount product-totalcost">4.80</td>
        </tr>
        <tr>
            <td>Noten</td>
            <td class="amount product-price">2.99</td>
            <td><input class="product-quantity" value="0"></td>
            <td class="amount product-totalcost">0.00</td>
        </tr>
        <tr>
            <td colspan="3">Totaal</td>
            <td class="amount" id="totalcost">7.78</td>
        </tr>
        -->
    </table>

    <script src="script.js"></script>
</body>
</html>