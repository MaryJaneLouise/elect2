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
<?php

$ans = "";
function addition($n1, $n2) {
    return $n1 + $n2;
}
function subtraction($n1, $n2) {
    return $n1 - $n2;
}
function multiplication($n1, $n2) {
    return $n1 * $n2;
}
function division($n1, $n2) {
    if ($n2 == 0) {
        return "You cannot divide a number by zero.";
    } else
        return $n1 / $n2;
}

function finalAnswer() {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $operandAdd = isset($_POST['add']);
    $operandSubtract = isset($_POST['subtract']);
    $operandMultiply = isset($_POST['multiply']);
    $operandDivide = isset($_POST['divide']);
    if ($operandAdd || $operandSubtract || $operandMultiply || $operandDivide) {
        if ($operandAdd)
            return addition($n1, $n2);
        if($operandSubtract)
            return subtraction($n1, $n2);
        if($operandMultiply)
            return multiplication($n1, $n2);
        if($operandDivide)
            return division($n1, $n2);
    }
    return "";
}
$ans = finalAnswer();
?>

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
                    name="n1"
                    required>
        </div>
        <div class="mb-3">
            <label for="input-2ndNumber" class="form-label">2nd Number</label>
            <input
                    id="input-2ndNumber"
                    class="form-control"
                    type="number"
                    name="n2"
                    required>
        </div>
        <div style="text-align: center;">
            <input name="add" value="ADD" type="submit" class="btn btn-primary"/>
            <input name="subtract" value="SUBTRACT" type="submit" class="btn btn-primary"/>
            <input name="multiply" value="MULTIPLY" type="submit" class="btn btn-primary"/>
            <input name="divide" value="DIVIDE" type="submit" class="btn btn-primary"/>
        </div>

        <br><br>
        <div class="mb-3">
            <label for="resultNum" class="form-label">Result:</label>
            <input id="result" class="form-control form-control-custom" type="text" name="result" value="<?php echo $ans ?>"/>
        </div>
    </form>
</div>
</body>
</html>