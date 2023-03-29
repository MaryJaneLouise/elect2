<?php
require_once 'Products.php';
require_once 'User.php';

$products = array(
    new Products("Keyboard", 400.00, 1.00),
    new Products("Mouse",200.00, 1.00),
    new Products("Laptop", 52000.00, 10.00),
    new Products("Charger", 5000.00, 5.00),
    new Products("Calculator", 50.00, 5.00),
);

$user = null;

$priceSubTotal = null;
$priceTotal = null;
$moneyLimit = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['products'])) {
        $selectedProduct = $_POST['products'];
        $selectedProducts = array();

        foreach ($selectedProduct as $productIndex => $selectedProductsIndex) {
            $product = $products[$selectedProductsIndex];
            $selectedProducts[$productIndex] = $product;
        }

        $user = new User($_POST['name'], $_POST['moneyLimit'], $selectedProducts);
    } else {
        $resultProduct = "Invalid input!";
    }
}
?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <title>ELECT2 SWM4</title>
</head>

<body>
<div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
    <form method="post">
        <div class="mb-3">
            <label
                for="input-name"
                class="form-label"
                id="input-name-label">Name</label>
            <input
                id="input-name"
                class="form-control"
                type="text"
                name="name"
                required>
        </div>
        <div class="mb-3">
            <label
                for="input-moneyLimit"
                class="form-label"
                id="input-name-label">Money Limit</label>
            <input
                id="input-moneyLimit"
                class="form-control"
                type="number"
                name="moneyLimit"
                required>
        </div>
        <?php foreach ($products as $index => $product): ?>
            <input
                class="form-check-input"
                type="checkbox"
                name="products[]"
                value="<?= $index ?>"
                id="flexCheckDefault"
            <?php
            if (isset($_POST['products']) && in_array($index, $_POST['products'])) {
                echo "checked";
            }?>
            <label for="flexCheckDefault">
                <?= $product ?>
            </label>
            <br>
        <?php endforeach; ?>
        <div style="text-align: center;">
            <br>
            <input
                name="Submit"
                value="Submit"
                type="submit"
                class="btn btn-primary"
                onclick="countCheckbox()"
            </input>
        </div>
    </form>
    <div style="text-align: center">
        <?php
            if (!empty($selectedProducts)) {
                $priceTotal = $user->getTotalSpend();
                if ($priceTotal > $user->getMoneyLimit()) {
                    echo "<br>Your spending limit has been reached.";
                    echo "<br>Total Price: ₱ " . number_format($priceTotal, 2, '.',',');
                    echo "<br>Money Limit: ₱ " . number_format($user->getMoneyLimit(), 2, '.',',');;
                }
                else {
                    foreach ($selectedProducts as $product) echo $product . "<br>";

                    if ($priceTotal != null) {
                        echo "<br>Total Price: ₱ " . number_format($priceTotal, 2, '.',',');
                        echo "<br>Money Limit: ₱ " . number_format($user->getMoneyLimit(), 2, '.',',');
                        echo "<br>Remaining Balance: ₱ " . number_format($user->getMoneyLimit() - $priceTotal, 2, '.',',');
                    }
                }
            }
        ?>
    </div>
</div>

<script>
    function countCheckbox() {
        var checkboxes = document.getElementsByName('products[]');
        var count = 0;
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                count++;
            }
        }
        document.getElementById('result').innerHTML = 'Number of checked checkboxes: ' + count;
    }
</script>

</body>
</html>
