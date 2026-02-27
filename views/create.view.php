<?php include 'partials/header.php' ?>
<?php include 'partials/nav.php' ?>
<main>

    <form method="POST">
        <label for="name">Name</label>
        <input id="name" name="name" type="text" value=<?= $_POST['name'] ?? "" ?>></input>
        <?php if(isset($errors['name'])) : ?>
            <p class="error-message"><?= "* " . $errors['name']?></p>
        <?php endif ?>

        <label for="quantity">Quantity</label>
        <input id="quantity" name="quantity" type="number" value=<?= $_POST['quantity'] ?? "" ?>></input>
        <?php if(isset($errors['quantity'])) : ?>
            <p class="error-message"><?= "* " . $errors['quantity']?></p>
        <?php endif ?>

        <label for="price">Price</label>
        <input id="price" name="price" type="number" step="0.01" value=<?= $_POST['price'] ?? "" ?>></input>
        <?php if(isset($errors['price'])) : ?>
            <p class="error-message"><?= "* " . $errors['price']?></p>
        <?php endif ?>

        <button type="submit">Add to list</button>
    </form>

</main>

<?php include 'partials/footer.php' ?>