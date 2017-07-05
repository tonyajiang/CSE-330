<?php
$num1 = (float) $_GET["num1"];
$num2 = (float) $_GET["num2"];
$operation = $_GET["operation"];

if ($operation == "add"){
        $sum = $num1 + $num2;
        $str = "$num1 + $num2 = $sum";
        echo htmlentities($str);
}
else if ($operation == "subtract"){
        $sub = $num1 - $num2;
        $str = "$num1 - $num2 = $sub";
        echo htmlentities($str);
}
else if ($operation == "multiply"){
        $mult = $num1 * $num2;
        $str = "$num1 x $num2 = $mult";
        echo htmlentities($str);
}
else if ($operation == "divide"){
        $div = $num1/$num2;
        $str = "$num1 / $num2 = $div";
        echo htmlentities($str);
}
?>
