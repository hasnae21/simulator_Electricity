<?php 

function Tranches(int $a){
    if($a>=0 && $a<=100)
            echo "Tranche1";
    else if($a>=101 && $a<=150)
            echo "Tranche2";
    else if($a>=151 && $a<=210)
            echo "Tranche3";
    else if($a>=211 && $a<=310)
            echo "Tranche4";
    else if($a>=311 && $a<=510)
            echo "Tranche5";
    else if($a>510)
            echo "Tranche6";
}

function اشطر(int $a){
    if($a>=0 && $a<=100)
            echo "1 الشطر";
    else if($a>=101 && $a<=150)
            echo "2 الشطر";
    else if($a>=151 && $a<=210)
            echo "3 الشطر";
    else if($a>=211 && $a<=310)
            echo "4 الشطر";
    else if($a>=311 && $a<=510)
            echo "5 الشطر";
    else if($a>510)
            echo "6 الشطر";
}

?>