<?php
    require_once('Product.php');

    if (isset($_POST['Submit'])) {
        $typeProduct = $_POST['option'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $director = $_POST['director'];
        $rating = $_POST['rating'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];

        $resultProduct = $typeProduct == "book" ?
            new Book($name, $price, $author, $genre) :
            new Movie($name, $price, $director, $rating);
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
    <title>QM1.2</title>
</head>

<body>
<div class="container d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
    <form method="POST">
        <div class="form-group">
            <label style="font-weight: bold">Select product:</label>
            <div class="input-group mb-3">
                <select class="form-select" name="option" style="text-align: center">
                    <option value="" style="text-align: center">Select an option:</option>
                    <option value="book" style="text-align: center">Book</option>
                    <option value="movie" style="text-align: center">Movie</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col">
                <label for="input-name" class="form-label" style="font-weight: bold">Product Name:</label>
                <input
                        id="input-name"
                        class="form-control"
                        type="text"
                        name="name"
                        style="text-align: center"
                        required>

                <label for="input-price" class="form-label" style="font-weight: bold">Product Price:</label>
                <input
                        id="input-price"
                        class="form-control"
                        type="number"
                        name="price"
                        style="text-align: center"
                        required>
            </div>

            <div class="col">
                <label for="input-author" class="form-label" style="font-weight: bold">Author:</label>
                <input
                        id="input-author"
                        class="form-control"
                        type="text"
                        name="author"
                        style="text-align: center"
                        required>

                <label for="input-genre" class="form-label" style="font-weight: bold">Genre:</label>
                <input
                        id="input-genre"
                        class="form-control"
                        type="text"
                        name="genre"
                        style="text-align: center"
                        required>
            </div>

            <div class="col">
                <label for="input-director" class="form-label" style="font-weight: bold">Director:</label>
                <input
                        id="input-director"
                        class="form-control"
                        type="text"
                        name="director"
                        style="text-align: center"
                        required>

                <label for="input-rating" class="form-label" style="font-weight: bold">Rating:</label>
                <input
                        id="input-rating"
                        class="form-control"
                        type="text"
                        name="rating"
                        style="text-align: center"
                        required>
            </div>
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
                    type="button"
                    onclick="clearFields()"
                    class="btn btn-outline-primary"/>
        </div> <br>

        <div class="mb-3" style="text-align: center">
            <?php echo $resultProduct->displayMainDetails()?>
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