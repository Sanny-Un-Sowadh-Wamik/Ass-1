<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-1</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="header">Currency Converter</h1>
            <?php
            $amount = 100;
            $currency = "sar";

            switch ($currency) {
                case 'euro':
                    $rate = 95.38;
                    break;
                case 'pound':
                    $rate = 114.51;
                    break;
                case 'yen':
                    $rate = 0.75;
                    break;


                case 'rupee':
                    $rate = 1.13;
                    break;

                case 'dollars':
                    $rate = 85.95;
                    break;

                case 'aud':
                    $rate = 62.41;
                    break;

                case 'sgd':
                    $rate = 63.34;
                    break;

                case 'myr':
                    $rate = 20.49;
                    break;

                case 'sar':
                    $rate = 22.91;
                    break;
                case 'aed':
                    $rate = 23.40;
                    break;
                default:
                    $rate = 0;
                    break;
            }

            $bdt = $amount * $rate;
            echo "{$amount} {$currency} = {$bdt} BDT";
            ?>

        </div>
        <div class="result">
            <h1 class="header">Result</h1>
            <?php
            $marks = 36;

            if ($marks <= 33) {
                echo "Grading:F and GPA:0.00";
            } elseif ($marks >= 33 && $marks <= 60) {
                echo " Grading:D and GPA:2.00";
            } elseif ($marks >= 60 && $marks <= 70) {
                echo " Grading:C and GPA:2.25";
            } elseif ($marks >= 70 && $marks <= 80) {
                echo " Grading:B and GPA:2.50";
            } elseif ($marks >= 80 && $marks <= 90) {
                echo " Grading:A and GPA:2.75";
            }
            ?>

        </div>
        <div class="marry">
            <h1 class="header">Marriage Age checker for male and female</h1>
            <?php
            $age = 18;

            if ($age < 18) {
                echo "You are not eligible for marriage";
            } elseif ($age >= 18) {
                echo "You are eligible for marriage";
            }
            ?>
        </div>
    </div>
</body>

</html>