<?php
    require_once ('SUP_Shape.php');
    $surfaceArea = "";
    $length = "";
    $volume = "";
    $msg = "";

    if(isset($_POST['Submit'])) {
        if($_POST['length'] > 0) {
            if (isset($_POST['Shapes']) && $_POST['length']) {
                $typeShape = $_POST['Shapes'];
                $length = $_POST['length'];

                $shape = $typeShape == "sphere" ? new Sphere($length) : new Cube($length);

                $length = ($typeShape == "Sphere" ? "Radius:" : "Side Length") . $length;
                $surfaceArea = round($shape->shapeArea(), 2);
                $volume = round($shape->shapeVolume(), 2);
            }
        } else {
            $surfaceArea = "Cannot solve 0 or negative numbers.";
            $volume = "Cannot solve 0 or negative numbers.";
        }

    } else if (isset($_POST['ClearVal'])) {
        if($_POST['length'] == "") {
            $_POST['resultVolume'] = "";
        } else {
            $_POST['length'] = "";
            $_POST['resultVolume'] = "";
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
                    <label style="font-weight: bold">Choose an option:</label>
                    <div class="input-group mb-3">
                        <select class="form-select" name="Shapes" style="text-align: center">
                            <option value="" style="text-align: center">Select an option</option>
                            <option value="cube" style="text-align: center">Cube</option>
                            <option value="sphere" style="text-align: center">Sphere</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="input-length" class="form-label" style="font-weight: bold">Value:</label>
                    <input
                            id="input-length"
                            class="form-control"
                            type="number"
                            name="length"
                            style="text-align: center"
                            required>
                </div>
                <div class="d-grid gap-2 row-6 mx-auto" style="text-align: center">
                    <input name="Submit" value="Submit" type="submit" class="btn btn-primary">
                    <input
                            name="ClearAllVal"
                            value="Clear All Fields"
                            onclick="clearFields()"
                            class="btn btn-outline-primary"/>
                </div>
                <div class="mb-3" style="width: 375px">
                    <label for="results" class="form-label" style="margin-top: 10px; font-weight: bold">Surface Area:</label>
                    <input
                            id="result"
                            class="form-control form-control-custom"
                            type="text"
                            name="resultSurfaceArea"
                            value="<?php echo $surfaceArea?>"
                            style="margin-top: 5px; text-align: center"
                            readonly
                    </input>
                    <label for="results" class="form-label" style="margin-top: 10px; font-weight: bold">Volume:</label>
                    <input
                            id="result"
                            class="form-control form-control-custom"
                            type="text"
                            name="resultVolume"
                            value="<?php echo $volume?>"
                            style="margin-top: 5px; text-align: center"
                            readonly
                    </input>
                </div>
            </form>
        </div>
        <script>
            function clearFields() {
                var inputs = document.querySelectorAll("input[type='text']");

                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].value = "";
                }

                document.getElementById("result").innerHTML = "";
            }
        </script>
    </body>
</html>