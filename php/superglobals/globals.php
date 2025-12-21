<?php

 $num=20;

 function test() {
    /*global $num;
     echo $num;*/

     echo $GLOBALS['num'];
     $GLOBALS['num2']=30;
 }

 test();
 echo $num2;




?>