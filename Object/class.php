<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
    //  class Fruit {
    //     // Properties
    //     public $name;
    //     public $color;
      
    //     // Methods
    //     function set_name($name) {
    //       $this->name = $name;
    //     }
    //     function get_name() {
    //       return $this->name;
    //     }
    //   }
    //   $alu = new fruit();
    //   $onion = new fruit();
    //   $alu->set_name('dhela'."<br>");
    //   $onion->set_name('irfan');

    //   echo $alu->get_name();
    //  echo  $onion->get_name();



    //  class item {

    //   function box($apple,$graps){
    //     echo $apple,$graps;
    //   }
    //   function laxuary($car,$thar){
    //     echo $car,$thar;
    //   }
    //  }
    //   $rakib = new item();
    //   print_r($rakib->box('jdhdddj ',"<br>",' dhbbdh'));
    //   print_r($rakib->laxuary('ndjb','bdhdhd'));







    // class car{
    //   public function _construct($pertrol){
    //     if(!empty($petrol)){
    //       $this->petrol = 'petrol h'."<br>";
    //     }else{
    //       $this->petrol = 'petrol nhi hi';
    //     }

    //   }
    //   function start($abc='hb',$test=''){
    //     echo $abc,$test;
    //   }
    //   function stop(){
    //     echo $this->start();
    //   }
    // }
    // $carObj = new car();
    // print_r($carObj->start('jhb','nd'));
    // print_r($carObj->stop());



    // class Fruit {
    //   // public $name;
    //   function __construct($name) {
    //     $this->name = $name; 
    //     // $this->color ='djhddy'; 
    //   }
    //   function show($lastname) {
    //     echo $this->name . "===" . $lastname;
    //   }
    //   function create($name){}
    //   // function get_color() {
    //     // return $this->color;
    //   // }
    // }
    
    // $apple = new Fruit('shakir');
    // echo $apple->show('irfan');


    class Fruit {
      // public $name;
      function __construct($petrol='') {
        if(!empty($petrol)){
          $this->petrol ='have a petrol';
        }else{
          $this->petrol = 'petrol is not have';
        }
      }
      function show($petrol){
        // echo $this->s();
      }
      
    }
    $carobj = new Fruit('dhbd');
    echo $carobj->show('dhd');
    // echo $carobj->start();
    // echo $carobj->stop();
    
    
    
?>
    
</body>
</html>