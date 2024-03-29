<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    // $item = [
    //     [1,"rakip","bca",34],
    //     [2,"irfan","bca",45],
    //  ];

    //  for($row=0; $row< 2;$row++){
    //  for($col=0; $col< 2;$col++){
    //   echo $item[$row][$col]."";
    //  }
    // }
    //  echo "<pre>";
    //   print_r($item);
    //    echo "<pre>";


    






       //Associative arry
    //    $fruits = [
    //     "apple" => 23,
    //     "mango" => 2,

    // ];
    // foreach($fruits as $key => $value){
    //     print_r($key . "=>". $value ."<br>");
    // }



   $cars = [
          "irafan" => "bca",
          "rakib" => "mca",
          "aftar" => "mca",
          "shakir" => "bba",
   ];
   foreach($cars as $key => $value){
    echo "$key => $value  <br>";
   }

   



  //  $cars = array (
  //   array("Volvo",22,18),
  //   array("BMW",15,13),
  //   array("Saab",5,2),
  //   array("Land Rover",17,15)
  // );
  
  //   for($i = 0; $i < count($cars);$i++){
  //     for($j = 0; $j < count($cars[$i]); $j++){

  //       echo $cars[$i][$j];

  //     }
  //     echo "<br>";
  //   } 
   





    $name =array(
    "fname" => array("rakip","sohel"),
    "lname" => array("irfan","dhela")
    );
    foreach($name as $key => $v1){
      echo $key ."<br>";
      foreach($v1 as $v2){
        echo $v2;
      }
      echo "<br>";
    }

     
    ?>
</body>
</html>