
<form method="POST" action="">        
    Enter a Number: <input type="text" name="num"/><br>  
  
</form>
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $num= $_POST['num'];
       $numSize = strlen($num);
       $sum=0;
       
       for($i=0;$i<$numSize;$i++){
           $sum += pow($num[$i],$numSize );
       }
       
       if($num==$sum){
           echo "this is armstrong ".$num;
       }else{
           echo "not armstrong ".$num;
           
           
           
       }
   }


