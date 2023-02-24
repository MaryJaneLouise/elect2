<?php
    $result = null;

    require_once ('Date.php');

    if(isset($_POST['Submit'])) {
        $input = $_POST['input'];
        $result = Date::showDate($input);
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
    <title>QM1.1</title>
</head>

<body>
<div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
    <form method="POST">
        <div class="mb-3">
            <label for="input-length" class="form-label" style="font-weight: bold">Date</label>
            <input
                id="input-length"
                class="form-control"
                type="text"
                name="input"
                style="text-align: center"
                required>
        </div>
        <div class="d-grid gap-2 row-6 mx-auto" style="text-align: center">
            <input
                    name="Submit"
                    value="Submit"
                    type="submit"
                    class="btn btn-primary"/>
            <input
                name="ClearAllVal"
                value="Clear All Fields"
                onclick="clearFields()"
                class="btn btn-outline-primary"/>
        </div> <br>

        <div class="mb-3" style="width: 375px">
            <label for="results" class="form-label" style="margin-top: 10px; font-weight: bold">Result</label>
            <input
                id="result"
                class="form-control form-control-custom"
                type="text"
                name="resultDate"
                value="<?php echo $result?>"
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
