<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
     class Fruit {
        // Properties
        public $name;
        public $color;
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
      }
      $alu = new fruit();
      $onion = new fruit();
      $alu->set_name('dhela'."<br>");
      $onion->set_name('irfan');

      echo $alu->get_name();
     echo  $onion->get_name();

?>
    
</body>
</html>