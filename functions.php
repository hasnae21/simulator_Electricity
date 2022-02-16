<?php

function Tranches(int $a)
{
    if ($a >= 0 && $a <= 100)
        return "Tranche 1";
    // else if ($a >= 101 && $a <= 150)
    //     return "Tranche 2";
    else if ($a >= 151 && $a <= 210)
        return "Tranche 3";
    else if ($a >= 211 && $a <= 310)
        return "Tranche 4";
    else if ($a >= 311 && $a <= 510)
        return "Tranche 5";
    else if ($a > 510)
        return "Tranche 6";
}
function اشطر(int $a)
{
    if ($a >= 0 && $a <= 100)
        return "1 الشطر";
    // else if ($a >= 101 && $a <= 150)
    //     return "2 الشطر";
    else if ($a >= 151 && $a <= 210)
        return "3 الشطر";
    else if ($a >= 211 && $a <= 310)
        return "4 الشطر";
    else if ($a >= 311 && $a <= 510)
        return "5 الشطر";
    else if ($a > 510)
        return "6 الشطر";
}

function TarifKWT(int $a)
{
    if ($a <= 150) {
        if ($a <= 100)
            return 0.794;
        else if ($a > 100)
            return 0.883;
    } else if ($a > 150) {
        if ($a < 211)
            return 0.9451;
        else if ($a > 210 && $a < 311)
            return 1.0489;
        else if ($a > 310 && $a < 511)
            return 1.2915;
        else    return 1.4975;
    }
}

function Montant_HT($a)
{
    if ($a === "5-10")
        return 22.65;
    if ($a === "15-20")
        return 37.05;
    if ($a === ">30")
        return 46.20;
}
