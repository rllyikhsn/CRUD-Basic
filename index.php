<?php

    function atas(){
        //loop segitigas atas
        for($i=1;$i<=5;$i++)
        {
            echo  str_repeat('*',$i);
            echo "<br />";
        }
    }

    function bawah(){
        //loop segitiga bawah
        for($j=4;$j>=1;$j--)
        {
            echo  str_repeat('*',$j);
            echo "<br />";
        }
    }

    atas();
    bawah();

?>