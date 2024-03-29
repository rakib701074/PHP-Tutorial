<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Coding</h2>
    <?php 
    // $a = "hello";

    // $d = $a . " dhela khayega kela";
    //   echo $d;
    
    
    $r = "<p>my</p>";
    $r .= " <p>Name</p>";
    $r .= " <p>is</p>";
    $r .= " <p>Rakip</p><br>";
    $r .= " <p>Basically </p>";
    $r .= "<p>i have learning coding </p><br>";
    $r .= " <p>and one day inshaallah im became a pro codder</p>";
   echo $r;
    ?>
    <style>
        body{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50% ,-50%);
            width: 300px;
            border: 2px solid black;
            

        }
        h2{
            text-align: center;
            color: red;

        }
      p{
        text-align: center;
        color: blue;
        font-size: 15px;
        background: red;
        border-radius: 20px;
        
    
    
      }
      p:hover{
        background: white;
        color: black;
      }



        </style>

</body>
</html>