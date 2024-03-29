<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //parameter
    // function hello($name,$last){
    //     echo "hello $name $last.<br>";
    // }
    // function multiply($a,$b){
    //     echo $a * $b;
    // }
    // //argument is not passing give some error
    // hello ("mr rakib","thanks u");

    // hello ("mrakib","thanks u");
      
    // $one = 10;
    // $two = 50;
    // multiply($one,$two);

      // retutn parameter
      function sum($eng,$hindi,$math){
    //   $b = "$name $last";
       $s = $eng + $hindi + $math;

      return $s;
     }
     function percentage($st){
     $per = $st / 3;
     echo $per . "%";
     }

    //  echo hello ('rakib',"shaikh");
    // $name = hello('irfan','shaikh');
    // echo "hello $name";


    $total = sum(55,65,88);
    percentage($total);

    echo $total;


    ?>
    
</body>
</html>