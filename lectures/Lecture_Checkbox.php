<?php
require_once ('Fruit.php');
use BonusFormUsage\Fruit;

$msg = "";
$fruits = array(
    new Fruit("Apple", "Red",false),
    new Fruit("Banana", "Yellow",false),
    new Fruit("Orange", "Orange",false),
    new Fruit("Grape", "Purple",false),
);

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the selected options from the checkboxes and display their names and colors
    if (!empty($_POST['fruits'])) {
        $msg .= "Selected fruits:<br>";
        foreach ($_POST['fruits'] as $fruit_index) {
            $fruit = $fruits[$fruit_index];
            $msg .= "- " . $fruit->getName() . " (" . $fruit->getColor() . ")<br>";
        }
    } else {
        $msg = "No fruits selected";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
    <form method="post">
        <?php foreach ($fruits as $index => $fruit): ?>
            <label for="<?php echo $fruit->getName(); ?>"><?php echo $fruit->getName(); ?>:</label>
            <input class="form-check-input" type="checkbox" name="fruits[]" value="<?php echo $index; ?>" id="<?php echo $fruit->getName(); ?>" <?php if (!empty($_POST['fruits']) && in_array($index, $_POST['fruits'])) echo "checked"; ?>>
            <br>
        <?php endforeach; ?>
        <div style="text-align: center;">
            <input name="Submit" value="Submit" type="submit" class="btn btn-primary"/>
        </div>
    </form>
    <div style="text-align: center">
        <?php echo '<br/> '. $msg; ?>
    </div>
</div>
</body>
</html>
