<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=5;
    function test(){
        $x=12;
        echo "<p> variable x inside function is: $x</p>";
    }
    test();
    echo "<p>variable x outside function is:$x</p>";
    echo "<br>";
    #static
    function mytest(){
        static $x=0;
        echo $x;
        $x+=2;
    }
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    //string length
    echo strlen("hello world");
    echo"<br>";
    //string word count
    echo str_word_count("welcome to all");
    echo"<br>";
    //string reverse
    echo strrev("I LOVE PHP");
    echo"<br>";
    //string position
    echo strpos("string position","position");
    echo"<br>";
    //string replace
    echo str_replace("world","dolly","my world!");
    echo"<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $txt1="hello";
    $txt2="GOOD MORNING!";
    ECHO $txt1.$txt2;
    ECHO"<BR>";
    #OR USE ANY ONE METHOD
    $txt1.=$txt2;
    echo $txt1;
    echo "<br>";
    #array
    $x=array("a"=>"red","b"=>"green");
    $y=array("b"=>"blue","b"=>"yellow");
    echo"<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r($x+$y);
    echo "<br>";//union fo $x and $y 
    var_dump($x==$y);
    echo "<br>";
    var_dump($x===$y);
    echo "<br>";
    var_dump($x !=$y);

    #conditional assignment

    $a=10;
    $b=$a>15?20:5;
    print("value of b is".$b);
    "<br>"
    #greaterthan
    $c=15;
    $b=$c<20;
    print("value of b is".$b);
   ?>
</body>
</html>