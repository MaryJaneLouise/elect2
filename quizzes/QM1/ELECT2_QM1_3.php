<?php
    require_once "Salary.php";

    if (isset($_POST['Submit'])) {
        $workerType = $_POST['workerType'];
        $workerName = $_POST['workerName'];
        $workerSalary = $_POST['workerSalary'];
        $workerMonthsOfStay = $_POST['workerMonthsOfStay'];

        $worker = $workerType == "employee" ?
            new Employee($workerName, $workerSalary, $workerMonthsOfStay) :
            new Manager($workerName, $workerSalary, $workerMonthsOfStay);
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
    <title>QM1.3</title>
</head>

<body>
<div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
    <form method="POST">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label
                            for="input-name"
                            class="form-label"
                            style="font-weight: bold">Name</label>
                    <input
                            id="input-name"
                            class="form-control"
                            type="text"
                            name="workerName"
                            style="text-align: center"
                            required>
                </div>

                <div class="mb-3">
                    <label
                            for="input-salary"
                            class="form-label"
                            style="font-weight: bold">Salary</label>
                    <input
                            id="input-salary"
                            class="form-control"
                            type="number"
                            name="workerSalary"
                            style="text-align: center"
                            required>
                </div>

                <div class="mb-3">
                    <label
                            for="input-monthsOfStay"
                            class="form-label"
                            style="font-weight: bold">Months of Stay</label>
                    <input
                            id="input-monthsOfStay"
                            class="form-control"
                            type="number"
                            name="workerMonthsOfStay"
                            style="text-align: center"
                            required>
                </div>

                <div class="mb-3 row" style="text-align: center">
                    <div class="form-check col">
                        <input
                                id="input-employee"
                                class="form-check-input"
                                type="radio"
                                name="workerType"
                                value="employee"
                                checked/>
                        <label class="form-check-label" for="input-employee">Employee</label>
                    </div>

                    <div class="form-check col">
                        <input
                                id="input-manager"
                                class="form-check-input"
                                type="radio"
                                name="workerType"
                                value="manager"/>
                        <label class="form-check-label" for="input-manager">Manager</label>
                    </div>
                </div>

                <div class="d-grid gap-2 row-6 mx-auto" style="text-align: center">
                    <input name="Submit" value="Submit" type="submit" class="btn btn-primary">
                    <input
                            name="ClearAllVal"
                            value="Clear All Fields"
                            onclick="clearFields()"
                            class="btn btn-outline-primary"/>
                </div> <br>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col" style="width: 375px">
                <label for="result-13thMonth" class="form-label" style="margin-top: 10px; font-weight: bold">13th Month Pay</label>
                <input
                        id="result-13thMonth"
                        class="form-control form-control-custom"
                        type="text"
                        name="result13thMonth"
                        value="<?php echo $worker->calculate13MonthPay()?>"
                        style="margin-top: 5px; text-align: center"
                        readonly
                </input>
            </div>

            <div class="mb-3 col">
                <label for="result-hourlyRate" class="form-label" style="margin-top: 10px; font-weight: bold">Hourly Rate</label>
                <input
                        id="result-hourlyRate"
                        class="form-control form-control-custom"
                        type="text"
                        name="resultHourlyRate"
                        value="<?php echo $worker->calculateHourlyRate()?>"
                        style="margin-top: 5px; text-align: center"
                        readonly
                </input>
            </div>
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
