<?php
    require_once 'SUP_Products.php';

    $resultProduct = "";

    $products = array(
            new SUP_Products("Clock", "192", false),
            new SUP_Products("Mouse","164" , false),
            new SUP_Products("Laptop", "19000" , false),
            new SUP_Products("Charger", "150" , false),
    );

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['products'])) {
            $resultProduct .= "Selected products:<br>";
            foreach ($_POST['products'] as $productIndex) {
                $product = $products[$productIndex];
                $resultProduct .= "• " . $product->getProductName() . " (" . $product->getProductPrice() . ")<br>";
            }

            $priceSubTotal = 0.0;
            foreach ($_POST['products'] as $productP) {
                $product = $products[$productP];
                $priceSubTotal += $product->getProductPrice();
            }

            $priceTotal = number_format($priceSubTotal, 2, '.',',');



        } else {
            $resultProduct = "Invalid input!";
        }
    }

?>

<html>
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
        <?php foreach ($products as $index => $product): ?>
            <input class="form-check-input" type="checkbox" name="products[]" value="<?php echo $index; ?>" id="<?php echo $product->getProductName(); ?>" <?php if (!empty($_POST['products']) && in_array($index, $_POST['products'])) echo "checked"; ?>>
            <label for="<?php echo $product->getProductName(); ?>"><?php echo $product->getProductName(); ?></label>
            <br>
        <?php endforeach; ?>
        <div style="text-align: center;">
            <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
        </div>
    </form>
    <div style="text-align: center">
        <?php echo '<br/> '. $resultProduct; ?>
        <?php echo '<br/> Total: $'. $priceTotal; ?>
    </div>
</div>
</body>
</html>
