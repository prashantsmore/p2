<?php
function calculateIndAmount()
{
    if(isset($_GET["tab1"]))
    {
        $x = onlyNumbers1to9($_GET["tab1"]);
        $y = onlyNumbers1to9($_GET["name"]);
        $z = $_GET["tip1"];
        $total = $x + $x * $z/100;
        $final = $total /$y;
        return round($final,2);
    }
}