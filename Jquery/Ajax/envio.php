<?php
 $nomb= $_POST['n']; $email= $_POST['e']; $messag= $_POST['m'];
    if(!empty($nomb) && !empty($email) && !empty($messag)){
        echo "El comentario ha sido publicado";
    }else{
        echo "El comentario no se ha publicado";
    }
?>

   