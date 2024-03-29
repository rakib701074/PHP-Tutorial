<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $age =30;

    // ($age >= 40)? $z = "greater" : $z = "smaller";
    // echo $z;

  //  another method
    // $z =   ($age >= 40)? "greater" : "smaller";

   // without round brases
    $z =  $age >= 40 ? "greater" : "smaller";
    //
    $z = "value is : ".($age >= 40 ? "greater" : "smaller");

    echo $z;
    
    ?>
    
</body>
</html>