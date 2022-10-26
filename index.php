<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>

    <?php


    $a[] = "ameer";
    $a[2] = 23;
    $a[] = 2.3;
    $a[] = true;

    $a = array("anwar", 23, 2.3, null);
    echo $a[2];
    var_dump($a);

    $a[2] = "3.6";
    echo $a[2];

    $a[2] = '';
    unset($a[3]);
    echo $a[2];

    $a[] = 3;
    $a = array("amjad", "junaid", "mannan", "rahem");
    $key = array_keys($a);

    // for($i=0, $i<=count($a), $i++){
    // echo "name  :$a[$i]";
    // }

    echo $key, $a[1];
    print_r($key);

    $name = array(1 => "ameer", 2 => "amjad", 3 => "wasseem", 4 => "karem");
    $fees = array("ameer" => 5500, "hakem" => 4300, "karem" => 5500, "junaid" => 5500);
    $val = count($fees);
    $var_dump($name);
    echo $val;

    // for($i=0,$i<=4,$i++){
    //     echo "count $fees[$i] <br>";
    // };
    print_r($a, false);
    $i = 0;
    while ($i < count($b)) {
        echo $b[$i . " =" . $a[$b[$i]]] . "<br>";
    }
    $c = array(23, 34, 22, 65, 24);
    foreach ($a as $key => $vales) {
        echo $key . " = " . $values . "<br>";
    }


    ?>


</body>

</html>