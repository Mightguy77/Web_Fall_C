<?php
    function sayMyName()
    {
        echo "meow";
    }

    sayMyName();

    function sayMyName1($name, $age)
    {
        echo $name." ".$age;
    }

    sayMyName1("WW", 10);


    echo "<br>";

    $arr=[10,20,40];
    print_r($arr);
    echo "<br>";

    $arr2=array("mango", "banana", "pineApple", "Lichi");
    print_r($arr2);
    echo "<br>";

    $arr3=[[10,20],[30,40],[50,60]];

    for($i=0;$i<count($arr3);$i++)
    {
        for($j=0;$j<count($arr3[0]);$j++)
        {
            echo $arr3[$i][$j]." ";
        }

        echo "<br>";
        
    }


    $associativeArr1=["23-50010-1"=>"Tanvir", "23-50666-1"=>"Sowrov"];
    print_r($associativeArr1);

    echo "<br>";
    echo $associativeArr1["23-50010-1"];
    echo "<br>";
    $associativeArr2=array("fruit1"=>"mango", "fruit2"=>"grape");
    print_r($associativeArr2);


    echo "<br>";
    $associativeArr3=["key1"=>[1,2,3],"key2"=>[4,5,6]];
     print_r($associativeArr3);

    echo "<br>";
    $arr5=[1,2,3,4,5];
    foreach($arr5 as $ar)
    {
        echo $ar;
    }


    function arrayPassAndGet($arr6)
    {
        for($i=0;$i<count($arr6);$i++)
        {
            $arr6[$i]=$arr6[$i]+5;
        }

        return $arr6;
    }

    echo "<br>";
    $arr8=arrayPassAndGet([10,20,30,40]);
    print_r($arr8);

    echo "<br>";
    $val2=10;
    echo ($val2);

    echo "<br>";
    function printValue()
    {
        
        ECHO "MEOW IS PRINTING MEOW";
        $a=10;
        echo ($GLOBALS["val2"]);
    }

    printValue();
    

    function testStatic()
    {
        static $b=100;
        echo "<br>";
        echo $b;
        $b++;
    }

    testStatic();
    testStatic();




?>