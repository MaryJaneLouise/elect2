<!DOCTTYPE html>
<html>
    <head>
        <title>ELECT2 ActM1</title>
    </head>

    <body>
        <?php
            //1st number
            echo "Fibonacci Sequence up to 20 numbers<br>";
            $numOne = 0;
            $numTwo = 1;

            $addFirstNum = $numOne + $numTwo;

            echo "$numOne $numTwo ";
            for ($i = 3; $i <= 20; $i++) {
                echo "$addFirstNum ";
                $numOne = $numTwo;
                $numTwo = $addFirstNum;
                $addFirstNum = $numOne + $numTwo;
            }
            echo "<br><br>";

            //2nd number
            echo "FizzBuzz";
            $numX = 0;

            while ($numX < 20) {
                $numX++;

                if ($numX % 3 == 0 && $numX % 5 == 0) {
                    echo "<br>$numX = FizzBuzz";
                }
                else if ($numX % 3 == 0) {
                    echo "<br>$numX = Fizz";
                }
                else if ($numX % 5 == 0) {
                    echo "<br>$numX = Buzz";
                }
                else {
                    echo "<br>$numX";
                }
            }
            echo "<br><br>";

            //3rd number
            echo "Palindrome Checker";
            $tempNum = 0;
            $counter = 0;
            $stringF = "ababa";

            $length = strlen($stringF) - 1;

            while($length > $tempNum) {
                if ($stringF[$tempNum] != $stringF[$length]) {
                    $counter = 1;
                }
                $tempNum++;
                $length--;
            }

            if ($counter == 0) {
                echo "<br>$stringF is a palindrome.";
            } else {
                echo "<br>$stringF is not a palindrome.";
            }
        ?>
    </body>
</html>