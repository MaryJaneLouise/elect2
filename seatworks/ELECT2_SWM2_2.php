<?php
$result = array(
    "countryName" => "",
    "countryCapital" => "",
    "countryDetails" => ""
);

function countryFullDetails() {
    $countries = array(
        "China" => array(
            "countryCapital" => "Beijing",
            "countryDetails" => "The world's most populous country with a population of 1.44 billion people."
        ),
        "Japan" => array(
            "countryCapital" => "Tokyo",
            "countryDetails" => "A fascinating country of economic and business prowess, rich culture, technical wizardry, spatial conundrums and contradictions."
        ),
        "Russia" => array(
            "countryCapital" => "Moscow",
            "countryDetails" => "A federation of 86 republics, provinces, territories, and districts, all controlled by the government in Moscow."
        ),
        "India" => array(
            "countryCapital" => "New Delhi",
            "countryDetails" => "It is famous for its ancient history, varied landscapes and diverse culture."
        ),
        "United States" => array(
            "countryCapital" => "Washington D.C.",
            "countryDetails" => "The world's third largest country in size and nearly the third largest in terms of population."
        ),
        "Afghanistan" => array(
            "countryCapital" => "Kabul",
            "countryDetails" => "A landlocked country located at the crossroads of Central Asia and South Asia."
        ),
        "Indonesia" => array(
            "countryCapital" => "Jakarta",
            "countryDetails" => "It comprises 16,056 islands, with 34 provinces spreading over five main islands and four archipelagos."
        ),
        "Philippines" => array(
            "countryCapital" => "Manila/Maynila",
            "countryDetails" => "Asia's pearl of the orient for the richness of its culture and the beauty of its landscape."
        ),
        "Thailand" => array(
            "countryCapital" => "Bangkok",
            "countryDetails" => "A country of mountains, hills, plains and a long coastline along the Gulf of Thailand (1,875 km) and the Andaman Sea (740 km)."
        ),
        "Singapore" => array(
            "countryCapital" => "Singapore City",
            "countryDetails" => "About 275 square miles, smaller than the State of Rhode Island, and inhabited by five million people from four major communities."
        ),
        "South Africa" => array(
            "countryCapital" => "Cape Town, Pretoria, Bloemfontein",
            "countryDetails" => "Currently ranked 31 of the major economies against other countries."
        ),
        "Zimbabwe" => array(
            "countryCapital" => "Harare",
            "countryDetails" => "A landlocked country in southern Africa known for its dramatic landscape and diverse wildlife, much of it within parks, reserves and safari areas."
        )
    );

    $resultingValue = array(
        "countryName" => "",
        "countryCapital" => "",
        "countryDetails" => ""
    );

    if (isset($_POST['submit'])) {
        if (isset($_POST['countryName'])) {
            //making country field enter even though the user placed "india" instead of "India"
            $countryName = ucwords(trim($_POST['countryName']));

            //boolean expression
            $isChecked = false;

            foreach ($countries as $countryArray => $value) {
                if ($countryName == $countryArray) {
                    $resultingValue['countryName'] = $countryName;
                    $resultingValue['countryCapital'] = $value['countryCapital'];
                    $resultingValue['countryDetails'] = $value['countryDetails'];
                    $isChecked = true;
                    break;
                }
            }
            if (!$isChecked) {
                $resultingValue['countryName'] = "No country information available";
                $resultingValue['countryCapital'] = "No capital information";
                $resultingValue['countryDetails'] = "No details or description available";
            }
        }
    }
    return $resultingValue;
}

$result = countryFullDetails();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Countries</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    </head>

    <body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <form
            action=""
            method="POST"
            name="country-form">
            <div class="mb-3">
                <label for="input_country" class="form-label">Country Name</label>
                <input
                    id="input_country"
                    class="form-control"
                    type="text"
                    name="countryName"
                    required>
            </div>
            <div style="text-align: center;">
                <input name="submit" value="Submit" type="submit" class="btn btn-primary">
            </div>

            <div style="text-align: center;">
                <?php echo "<br>" .  $result['countryCapital'] . ", " .$result['countryName'] . "<br>" ?>
                <?php echo $result['countryDetails'] . "<br>" ?>
            </div>
        </form>
    </div>
    </body>
</html>