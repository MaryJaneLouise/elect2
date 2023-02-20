<?php
require_once ('SUP_Shape.php');
$surfaceArea = "";
$length = "";
$volume = "";
$msg = "";

if(isset($_POST['Submit'])) {
    if (isset($_POST['Shapes']) && $_POST['length']) {
        $typeShape = $_POST['Shapes'];
        $length = $_POST['length'];

        $shape = $typeShape == "sphere" ? new Sphere($length) : new Cube($length);

        $length = ($typeShape == "Sphere" ? "Radius:" : "Side Length") . $length;
        $surfaceArea = "Surface Area: " . round($shape->shapeArea(), 2);
        $volume = "Volume: " . round($shape->shapeVolume(), 2);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <title>Example</title>
</head>

<body>
<div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
    <form method="POST">
        <div class="form-group">
            <label>Choose an option:</label>
            <div class="input-group mb-3">
                <select class="form-select" name="Shapes">
                    <option value="cube">Cube</option>
                    <option value="sphere">Sphere</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="input-length" class="form-label">Value:</label>
            <input
                    id="input-length"
                    class="form-control"
                    type="number"
                    name="length"
                    required>
        </div>
        <div style="text-align: center">
            <input name="Submit" value="Submit" type="submit" class="btn btn-primary">
        </div>
        <div class="mb-3">
            <?php echo $surfaceArea; ?> <br>
            <?php echo $volume; ?>
        </div>
    </form>
</div>
</body>
</html>