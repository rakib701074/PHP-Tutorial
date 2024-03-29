<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   //   $item = [
   //      [1,"shoaib",23,"bba"],
   //      [2,"irfan",23,"bba"],
   //      [3,"aftar",23,"bba"],
   //      [4,"azad",23,"bba"]

   //   ];
   //  for($i=0; $i < 4;$i++){
   //    for($j=0; $j < 4; $j++){
   //       echo $item[$i][$j];
   //    }
   //    echo "<br>";
   //  }

     
   
      
   //   print_r($fruits);
   //   for($row =0; $row < 4; $row++){
   //   for($col =0; $col < 4; $col++){
   //    echo $item[$row][$col]. "";
   //   }
   //   echo "<br>";
   // }

   //   echo "<table border='2px' cellpadding='5px'>";
   //   echo "<tr>
   //        <th>No</th>
   //        <th>Name</th>
   //        <th>Section</th>
   //        <th>qulification</th>
     
   //    </tr>";
   //   foreach($item as $v1){
   //    echo "<tr>";
   //    foreach($v1 as $v2){
   //       echo "<td> $v2 </td>";
   //    }
   //    echo "</tr>";
   //   }
   //   echo "</table>";



   $marks = [
      "Shakir" =>[
         "hindi" => 35,
         "english" =>50,
          "math" => 80,
      ],
      "irfan" =>[
         "hindi" => 34,
         "english" => 99,
         "math" => 100,
      ],
      "rakib" =>[
         "hindi" => 7,
         "english" =>32,
         "math" =>33,
      ],

   ];
   echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
         echo "<tr>
           <th>Name</th>
           <th>Hindi</th>
           <th>English</th>
           <th>Math</th>


         </tr>";

   foreach($marks as $key => $v1){
      echo "<tr>
      <td>$key</td>";

      foreach($v1 as $v2){
         echo "<td> $v2 </td>";
      }
   echo "</tr>";
   }
   echo "</table>";
   // echo "<pre>";
   // print_r($marks);
   // echo "<pre>";

   
      $fruits =array (
        array ("apple","orange","pineapple","watermellion"
      ),
        array (
           "graps","cocomber","litchi","onion"
        ),

      );
      // for($i=0; $i < count($fruits); $i++){
      //    for($j=0; $j < count($fruits[$i]);$j++){
      //       echo $fruits[$i][$j]."<br>";
      //    }
         
      // }

      for($row=0; $row < count($fruits); $row++){
         for($col=0; $col < count($fruits[$row]); $col++){
            echo $fruits[$row][$col]."<br>";
         }
      }




       //ALPHABETICAL CHANGES CAPITAL
      // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
      //    print_r(array_change_key_case($age,CASE_LOWER));



        
// id and name to fetch the data //this callled array column
// $a = array(
//    array(
//      'id' => 5698,
//      'first_name' => 'Peter',
//      'last_name' => 'Griffin',
//    ),
//    array(
//      'id' => 4767,
//      'first_name' => 'Ben',
//      'last_name' => 'Smith',
//    ),
//    array(
//      'id' => 3809,
//      'first_name' => 'Joe',
//      'last_name' => 'Doe',
//    )
//  );
 
//  $last_names = array_column($a, 'first_name', 'id');
//  print_r($last_names);



//elements from one "keys" array and one "values" array://array combine//key and value
//  $name =array("rakip","sohel");
//  $age = array(23,21);
//  $d =array_combine($name,$age);
// print_r($d);


//6 The array_count_values() function counts all the values of an array.// count formula

   // $name = array("rakesh","rohit","soleman");
   // // $sge = array(21,23,33);
   // print_r(array_count_values($name));


  //7 Compare the values of two arrays, and return the differences:  diff/assoc/key
   // $item = array("banana","graps","pupaya");
   // $cars =array("thar","car","mahindra");
   // $name =array("prasanth","nili","mili");
   // $c =array_diff_key($item);
   // print_r($c);




  // 10 This function uses a user-defined function to compare the keys! uassoc//ukey//
//   function myfunction($a,$b)
//   {
//   if ($a===$b)
//     {
//     return 0;
//     }
//     return ($a>$b);
//   }
  
//   $a1=array("a"=>"red","b"=>"orange","c"=>"blue");
//   $a2=array("d"=>"yellow","f"=>"black","e"=>"green");
//   $result=array_diff_ukey($a1,$a2,"myfunction");
//   print_r($result);


//Fill an array with values: /// basically its work the secound number what u given the number/array_fill(index, number, value)
   //  $name = array_fill(3,3,"yellow");
   //  $age =array_fill(2,4,"rakib");
   //  print_r($name);
   //  echo "<br>";
   //  print_r($age);

   // The array_fill_keys() function fills an array with values, specifying keys.
   //   $keys = array("q","e","g");
   //   $name =array_fill_keys($keys,"rakip");
   //   print_r($name);


   // Filter the values of an array using a callback function:
     function rakib_shaikh($var)
     {
     return($var & 1);
     }
     $name =array (1,2,3,4,);
     print_r(array_filter($name,"rakib_shaikh"));


 ?>
 





    
    
</body>
</html>