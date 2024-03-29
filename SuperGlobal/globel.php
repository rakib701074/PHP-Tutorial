<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- $GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION -->

<!-- <form method="post"  echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form> -->



    <?php 
    $y =45;
    $x =23;
     function myfunction(){
        // echo $GLOBALS['y','x'];
        global $y , $x;
      $x = $y/$x;
     }
    myfunction();
    echo $x;
       

    ///server
    // echo $_SERVER['PHP_SELF'];
    // echo "<br>";
    // echo $_SERVER['SERVER_NAME'];
    // echo "<br>";
    // echo $_SERVER['HTTP_HOST'];
    // echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    // echo "<br>";
    // echo $_SERVER['HTTP_USER_AGENT'];
    // echo "<br>";
    // echo $_SERVER['SCRIPT_NAME'];


     
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     // collect value of input field
    //     $name = htmlspecialchars($_REQUEST['fname']);
    //     if (empty($name)) {
    //         echo "Name is empty";
    //     } else {
    //         echo $name;
    //     }
    // }
    



?>
    
</body>
</html>