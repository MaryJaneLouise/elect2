<?php

function addition($input1stNumber, $input2ndNumber) {
    return $input1stNumber + $input2ndNumber;
}
function subtraction($input1stNumber, $input2ndNumber) {
    return $input1stNumber - $input2ndNumber;
}
function multiplication($input1stNumber, $input2ndNumber) {
    return $input1stNumber * $input2ndNumber;
}
function division($input1stNumber, $input2ndNumber) {
    return $input1stNumber / $input2ndNumber;
}

function main() {
    $is_addNum = isset($_POST['add']);
    $is_subtractNum = isset($_POST['subract']);
    $is_multiplyNum = isset($_POST['multiply']);
    $is_divisionNum = isset($_POST['divide']);

    if ($is_addNum || $is_subtractNum || $is_multiplyNum || $is_divisionNum) {
        $input1stNumber = $_POST['1stNumber'];
        $input2ndNumber = $_POST['2ndNumber'];

        if ($is_addNum) {
            return addition($input1stNumber, $input2ndNumber);
        }
        if ($is_subtractNum) {
            return subtraction($input1stNumber, $input2ndNumber);
        }
        if ($is_multiplyNum) {
            return multiplication($input1stNumber, $input2ndNumber);
        }
        if ($is_divisionNum) {
            if ($input2ndNumber == 0) {
                return "This cannot be divided by zero.";
            }
            return division($input1stNumber, $input2ndNumber);
        }
    }
    return "";
}

$answer = main();
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Simple Calculator</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
            <form
                    action=""
                    method="POST"
                    name="simpleCalculator-form">
                <div class="mb-3">
                    <label for="input-1stNumber" class="form-label">1st Number</label>
                    <input
                            id="input-1stNumber"
                            class="form-control"
                            type="number"
                            name="1stNumber"
                            required>
                </div>
                <div class="mb-3">
                    <label for="input-2ndNumber" class="form-label">2nd Number</label>
                    <input
                            id="input-2ndNumber"
                            class="form-control"
                            type="number"
                            name="2ndNumber"
                            required>
                </div>
                <div style="text-align: center;">
                    <input id="add" value="+" type="submit" class="btn btn-primary"/>
                    <input id="subtract" value="-" type="submit" class="btn btn-primary"/>
                    <input id="multiply" value="x" type="submit" class="btn btn-primary"/>
                    <input id="divide" value="/" type="submit" class="btn btn-primary"/>
                </div>

                <br><br>
                <div class="mb-3">
                    <label for="resultNum" class="form-label">Result:</label>
                    <!-- <input id="result" class="form-control form-control-custom" type="text" name="result" value=""/> -->
                </div>
                <div style="text-align: center">
                    <br>
                    <?php echo $answer ?>
                </div>
            </form>
        </div>
    </body>
    </html>