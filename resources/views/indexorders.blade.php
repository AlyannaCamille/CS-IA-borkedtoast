<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title> Price Calculation Index </title>
</head>

<body>
    <?php

    //Name
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo $name . "<br>";
    } else {
        echo "Please fill this field!";
    }

    //Payment Method

    if (isset($_GET['payment'])) {
        $payment = $_GET['payment'];
        echo $payment . "<br>";
    } else {
        echo "Please fill this field!";
    }


    //Type 

    if (isset($_GET['type'])) {
        $types = $_GET["type"];
        $c = count($types);
        $typeprice = 0;

        for ($i = 0; $i < $c; $i++) {
            if ($types[$i] == "Headshot") {
                $typeprice = $typeprice + 1;
                echo "Type: Headshot <br> ";
            }
        }
        for ($i = 0; $i < $c; $i++) {
            if ($types[$i] == "Bust Up") {
                $typeprice = $typeprice + 2;
                echo "Type: Bust Up <br> ";
            }
        }
        for ($i = 0; $i < $c; $i++) {
            if ($types[$i] == "Halfbody") {
                $typeprice = $typeprice + 3;
                echo "Type: Halfbody <br> ";
            }
        }
        for ($i = 0; $i < $c; $i++) {
            if ($types[$i] == "Fullbody") {
                $typeprice = $typeprice + 4;
                echo "Type: Fullbody <br> ";
            }
        }
        for ($i = 0; $i < $c; $i++) {
            if ($types[$i] == "Custom Character") {
                $typeprice = $typeprice + 5;
                echo "Type: Custom Character <br> ";
            }
        }

        echo "Type Price = " . $typeprice . "<br>";
    } else {
        echo "Please choose something!";
    }

    // Add On/s

    if (isset($_GET['additional'])) {
        $additionals = $_GET["additional"];
        $c = count($additionals);
        $additionalprice = 0;

        for ($i = 0; $i < $c; $i++) {
            if ($additionals[$i] == "None") {
                $additionalprice = $additionalprice + 5;
                echo "No additionals <br> ";
            }
        }

        for ($i = 0; $i < $c; $i++) {
            if ($additionals[$i] == "Detailed Background") {
                $additionalprice = $additionalprice + 5;
                echo "You have selected a detailed background <br> ";
            }
        }

        for ($i = 0; $i < $c; $i++) {
            if ($additionals[$i] == "Extra Character") {
                $additionalprice = $additionalprice + 5;
                echo "You have added an extra character <br> ";
            }
        }

        echo "Additional Price = " . $additionalprice . "<br>";
    } else {
        echo "Please choose something!";
    }

    //Background

    if (isset($_GET['background'])) {
        $backgrounds = $_GET["background"];
        $c = count($backgrounds);
        $bgprice = 0;

        for ($i = 0; $i < $c; $i++) {
            if ($backgrounds[$i] == "White") {
                $bgprice = $bgprice + 5;
                echo "You chose a white background. <br> ";
            }
        }

        for ($i = 0; $i < $c; $i++) {
            if ($backgrounds[$i] == "Patterned/Simple") {
                $bgprice = $bgprice + 5;
                echo "You chose a patterned or simple  background. <br> ";
            }
        }

        echo "Background Price = " . $bgprice . "<br>";
    } else {
        echo "Please choose something!";
    }

    //Message
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo $message . "<br>";
    } else {
        echo "Please fill this field!";
    }

    //Reference Link
    if (isset($_GET['ref'])) {
        $ref = $_GET['ref'];
        echo $ref . "<br>";
    } else {
        echo "Please fill this field!";
    }

    $finalPrice = $typeprice + $additionalprice + $bgprice;
    echo "Your order total is: ";
    echo $finalPrice;

    ?>
</body>

</html>