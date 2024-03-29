<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $weekday = 6;

    // switch($weekday){
    //     case 1 :
    //         echo "today is monday";
    //         break;
    //     case 2 :
    //         echo "today is Tuesday";
    //         break;
    //     case 3 :
    //         echo "today is wednessday";
    //         break;
    //     case 4 :
    //         echo "today is thursday";
    //         break;
    //     case 5 :
    //         echo "today is friday";
    //         break;
    //     case 6 :
    //         echo "today is saturday";
    //         break;
    //     case 7 :
    //         echo "today is sunday";
    //         break;

    //         default:
    //         echo "enter the valid week day";
            
    // }

       $age =21;
       
       switch(true){
        case ($age >= 15 && $age <= 20):
            echo "u are eligible";
            break;

            case($age >= 21 && $age <= 30):
                echo "u r young";
                break;
                default:
                echo "enter the valid age";
       }














    ?>
    
</body>
</html>