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
        $x=100;
        $y=50;
        if($x==100 and $y==50){
            echo "good morning";
        }
        echo "<br>";
        $x=100;
        $y=50;
        if($x==100 or $y==80){
            echo "have a nice day";
        }
        echo "<br>";
        $x=150;
        $y=50;
        if($x==150 xor$y==80){
            echo "good evening";
        }
        echo "<br>";
        $x=100;
        if($x!==90){
            echo "good night";
        }
        echo "<br>";
        #hello
        $t = 24;
        if($t<"10"){
            echo "have a good morning";
        }
        elseif($t<"20"){
            echo "have a good day";
        }else{
            echo "have a good night";
        }
        echo "<br>";
        #switch
        $favcolor = "red";
        switch($favcolor){
            case "red";
            echo "your gavorite coloris red";
            break;
            case "blue";
            echo "your favorite color is blue";
            breah;
            case "green";
            echo "your favorite color is green";
            break;
            default:
            echo "your favourite is neither green,noe red";
            break;
        }
        echo "<br>";
        #for loop while loop
        #while
        $x = 1;
            while($x <= 5) {
            echo "The number is: $x <br>";
        $x++;
        } 
        #for loop
        for($x=0;$x<=5;$x++)
            echo "the number using for loop : $x <br>";
        #do-while
        $x=1;
        do{
            echo " the number is: $x <br>";
            $x++;
        }while($x<=5);
        $x = 1;
        #foreach
        $color=array("red","green","blue","yellow");
        foreach($color as $value){
            echo "$value <br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
        #jumping
        for($x=0;$x<10;$x++){
            if($x==4){
                break;
            }
            echo "the number is : $x <br>";
        }
        echo "<br>";
        for($x=0;$x<10;$x++){
            if($x==4){
                continue;
            }
            echo "the number is: $x <br>";
        }
        #multidimensional array
        $cars=array(
            array("volvo",22,18),
            array("BMW",15,13),
            array("saab",5,2),
            array("land rover",17,15)
        );
        echo $cars[0][0].$cars[0][1].$cars[0][2].".<br>";
        echo $cars[1][0].$cars[1][1].$cars[1][2].".<br>";
        echo $cars[2][0].$cars[2][1].$cars[2][2].".<br>";
        echo $cars[3][0].$cars[3][1].$cars[3][2].".<br>";
        #indexed array
        $cars=array("volvo","BMW","toyota");
        echo "i like".$cars[0].",".$cars[1]."and".$cars[2].".";
        echo "<br>";

        //associative array
        $age=array("peter"=>"35","ben"=>"37","joe"=>"43");
        echo "peter is".$age['peter']."years old.";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo number_format(256789);
        echo "<br>";
        echo rand();
        echo "<br>";
        echo round(3.49);
        echo "<br>";
        echo sqrt(100);
        echo "<br>";
        echo cos(45);
        echo "<br>";
        echo sin(45);
        echo "<br>";
        echo pi();
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        function familyName($fname){
            echo "$fname refsnes.born";
        }
        familyName("hego","1975");
        familyName("stale","1978");
        familyName("kai jim","1983");
        ?>
</body>
</html>