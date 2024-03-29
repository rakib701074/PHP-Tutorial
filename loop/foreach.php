<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
    // $cars = array("lemobo","venom","thar");
    // foreach($cars as $value){
    //   echo "$value <br>";
    // }

     $cars = [
        "lem",
        "thar",
        "lembor",
     ];
     foreach($cars as $value){
        echo $value."<br>";
     }



     //Associative arry
        $fruits = [
            "apple" => 23,
            "mango" => 2,

        ];
        foreach($fruits as $key => $value){
            print_r($key . "=>". $value ."<br>");
        }




   //   $item = [
   //      ["rakip",23,"bca"],
   //      ["irfan",20,"bca"]
   //   ];
   //   echo "<pre>";
   //    print_r($item);
   //     echo "<pre>";



     $item = [
      [
         "bca" =>"1st",
         "age" => 21,
      ],

      [
         "bba" => "2nd",
         "age" => 21,
      ],

   ];
   foreach($item as list("bba" => $bba, "age" => $age, "bca" =>$bca, "age" =>$age)){
      echo "$bba, $age, $bca,$age";
   }


       






    // function processMarks($marksArr){
    //     $sum =0;
    //     foreach($marksArr as $value){
    //         $sum += $value;
    //     }
    //     return $sum;
    // }
    // $rakib = [94,95,85,97,94,95];
    //      $sumMarks = processMarks($rakib);
    // echo "total mark score out off 600 is $sumMarks";


?>
    
</body>
</html>