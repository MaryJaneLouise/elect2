<!DOCTYPE html>
<html>
    <!-- Introduction of strings-->
    <?php $user = "JerJerKing"; ?>

    <head>
        <title>Test Website</title>
    </head>

    <body>
        <!-- <h1>Hello <?php echo $user; ?></h1> -->

        <!-- <?php
             $num1 = 30;
             $num2 = 20;

             $val = $num1 + $num2;
            echo "SUM = $val";

             if ($num1 > $num2) {
                echo "<br>$num1 is greater than $num2.";
            }
             else {
                echo "<br>$num1 is less than $num2.";
            }


            echo "<br><br>";
            $day = date("D");

            if ($day == "Mon") {
                echo "<br>Today is Monday.";
            }
            elseif ($day == "Wed") {
            echo "<br>Today is Wednesday.";
            }
            else {
                echo "<br>gago k ba";
            }


            $a = 0;
            $b = 0;

            for ($i = 0; $i < 5; $i++) {
                $a += 1;
                $b += 10;

                echo "<br>Value of var a: $a";
                echo "<br>Value of var b: $b";
            }

            echo "<br><br>";

            $a = null;
            while ($a < 10) {
                $a++;
                echo "$a <br>";
            }

            echo "<br><br>";

            $a = null;
            do {
                $a++;
                echo "$a <br>";
            } while($a < 10);


            echo "<br><br>";
            $arrayEx = array(1, 2, 3, 4, 5);

            foreach($arrayEx as $value) {
                echo "Value = $value<br>";
            }

            echo "<br><br>";

            $numX = 0;

            while ($numX < 10) {
                $numX++;

                if ($numX % 2 == 0) continue;
                echo "<br>Value = $numX";
            }

            echo "<br><br>";

            $digits[0] = "B";
            $digits[1] = "0";
            $digits[2] = "b";
            $digits[3] = "O";

            $value = null;
            foreach($digits as $value) {
                echo "<br>Text = $value";
            }

            echo "<br><br>";

            $grades = array("Jericho" => 90,
                            "Japhet" => 75);

            echo "<br>Grade of Jericho: $grades[Jericho]";

            $grades['Jericho'] = 75;
            echo "<br>Grade of Jericho: $grades[Jericho]";

            echo "<br><br>";

            $main = array(
                "Jericho" => array(
                    "Math" => 90,
                    "DE" => 95
                ),
                "Hamuel" => array(
                    "Math" => 91,
                    "DE" => 94
                )
            );

            echo "Jericho's grade in Math is ". $main['Jericho']["Math"]. ".<br>";
            echo "Jericho's grade in Math is ". $main['Jericho']["DE"]. ".<br>";
        ?> -->


        <?php ?>
    </body>
</html>