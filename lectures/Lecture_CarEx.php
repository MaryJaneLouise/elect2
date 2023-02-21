<?php
    require_once ('car.php');
    $msg = "";
    $carOptions = array(
        new  car('Honda', 'Civic', 2022),
        new  car('Toyota', 'Innova', 2022),
        new  car('Honda', 'Civic', 2022)
    );

    if(isset($_POST['Submit'])){
        $selectedIndex = $_POST['car'];
        $selectedCar = $carOptions[$selectedIndex];
        $msg = "Selected Car: " .$selectedCar;
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
        <title>Car Example with Forms</title>
    </head>

    <body>
        <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
            <form method="POST">
                <label>Choose a Car:</label>
                <select id="options" class="form-select" name="car">
                    <?php foreach ($carOptions as $index => $car):?>
                        <option value="<?= $index ?>" <?= isset($_POST['car']) && $_POST['car'] == $index ? 'selected' : ''?>>
                            <?= $car?>
                        </option>
                    <?php endforeach;?>
                </select>
                <div style="text-align: center; margin-top: 10px">
                    <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
                </div>
            </form>
            <div id="result" style="text-align: center; margin-top: 10px" >
                <?php echo $msg; ?>
            </div>
        </div>

        <script>
            var options = document.getElementById("options")
            var results = document.getElementById("result")

            options.onchange = function() {
                var index = options.value

                if (index == 0) {
                    results.innerText = "Honda Civic 2022"
                } else if (index == 1) {
                    results.innerText = "Toyota Innova 2022"
                } else {
                    results.innerText = "Honda Civic 1980"
                }
            }
        </script>
    </body>
</html>