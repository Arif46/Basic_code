<form method="POST" action="">  
   
    Enter a Number: <input type="text" name="num"/><br>  

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $num=$_POST['num'];
     $array=array(
         1=>'laptop',
         2=>'computer',
         3=>'mobile'
     
     );
      for( $i=0;$array<sizeof($array);$i++){
          if($array[i]==$num){
              echo "data found";
          }else{
              echo "data not found";
          }
      }
    
     }
       

