<?php
 $num= $_POST['n']; $num1= $_POST['m']; $signos= $_POST['s'];
    if(!empty($num) && !empty($num1)){
      if($signos=="suma"){
          echo $num+$num1;
      }elseif($signos=="resta"){
          echo $num-$num1;
      }elseif($signos=="multiplicacion"){
          echo $num*$num1;
      }elseif($signos=="division"){
          echo $num/$num1;
      }
    }else{
       echo "introduzca operacion";
    }
?>