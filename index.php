<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    
    //1 no dash

    $numbers1 = range(1,10);
    for($i = 0; $i<count($numbers1);$i++){
        if($i === count($numbers1) - 1){
            echo $numbers1[$i];
        } else {
            echo $numbers1[$i]."-";
        }
    }
    echo "<br>";
    echo "<br>";

    //2 add all integers between 0 and 30

    $numbers2 = range(0,30);
    $sum = 0;
    foreach($numbers2 as $num){
        $sum += $num;
    }
    echo $sum;
    echo "<br>";
   
   
    //3 generate pattern

    $length_pattern = 5;
    for($i = 0;$i<$length_pattern;$i++){
        echo "<br>";
        for($p = 0;$p<$length_pattern;$p++){
            if($p >= ($length_pattern - 1 - $i)){
                echo chr(ord("A") + $i);
                
            } else {
                echo "A";
                
            }
        }
    }
    echo "<br>";
    echo "<br>";

   //4 generate pattern
   $length_pattern = 5;
   for($i = 0;$i<$length_pattern;$i++){
       echo "<br>";
       for($p = 0;$p<$length_pattern;$p++){
           if($p >= ($length_pattern - 1 - $i)){
               echo chr(ord("1") + $i);
               
           } else {
               echo "1";
               
           }
       }
   }
   echo "<br>";
   echo "<br>";

   //5 generate pattern

   $length_pattern = 5;
   for($i = 0;$i<$length_pattern;$i++){
       echo "<br>";
       for($p = 0;$p<$length_pattern;$p++){
           if($p === $i){
               echo $i+1;
           } else {
               echo 0;
           }
       }
   }
   echo "<br>";
   echo "<br>";

   //6 calculate and print the factorial of a number

   $numbers3 =5;
   $sum=1;
   for($i=1 ; $i<=$numbers3; $i++){
       $sum *= $i;
   }
   echo $sum;
   echo "<br>";
   echo "<br>";


   //7 calculate and print the fibonacci sequence

   $number1 = 0;
   $number2 = 1;
   $length = 10;
   for($i = 0; $i<$length;$i++){
       echo $number1." ";
       $number3 = $number2 + $number1;
       $number1 = $number2;
       $number2 = $number3;
   }
   echo "<br>";
   echo "<br>";

   //8 count the "c" characters

   $text = "Orange Coding Academy";
   $sum =0;
   for($i = 0;$i<strlen($text);$i++){
       if(strtolower($text[$i]) === "c"){
           $sum += 1;
       }
   }
   echo $sum;
   echo "<br>";
   echo "<br>";

   //9 create table

   echo "<table border =1 style='border-collapse: collapse', cellpadding=3px>";
   for($i = 0 ; $i<6; $i++){
       echo "<tr>";
       for($p = 0;$p<5;$p++){
           echo "<td>" .($i+1).'*'.($p+1).'='.(($i+1)*($p+1)). "</td>" ;
       }
       echo "</tr>";
   }
   echo "</table>";
   echo "<br>";
   echo "<br>";

   //10 repeats integes
   $numbers = range(1,50);
   foreach($numbers as $num){
       if($num % 3 ===0){
           echo "Fizz ";
       } elseif($num % 5 === 0){
           echo "Buzz ";
       } elseif($num % 3 ===0 && $num % 5 === 0){
           echo "FizzBuzz ";
       } else{
           echo $num." ";
       }
   }
   echo "<br>";
   echo "<br>";

   //11 generate a Floyed triangle
   $counter = 1;
   for($i=1;$i<=5;$i++){
       echo "<br>";
       for($p=1;$p<=$i;$p++){
           echo $counter;
           $counter++;
       }
   }
   echo "<br>";
   echo "<br>";

   //12 print pattern
   
   $r=5;
   $c=0;
   for ($i=0; $i < 5; $i++){
       for($j=$r;$j>0;$j--){
           echo"&nbsp ";
       }
       for($k=0;$k<=$c;$k++){
           echo "x";
       }
       echo "<br>";
       $r--;
       $c+=2;
   }
   $c=7;
   for ($i=0; $i < 5; $i++){	
       echo "&nbsp";
       for($k=0;$k <= $i;$k++){
           echo " &nbsp ";
       }
       for($j=$c;$j>0;$j--){
           echo"x";
       }
       echo "<br>";
       $c-=2;
   }

?>
</body>
</html>