
<form method="POST" action="">        
    Enter a Number: <input type="text" name="num"/><br>  
</form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $num = $_POST['num'];
       
       function isPrime($num){
           for($i=2; $i <= $num;$i++){
               if($num % $i==0){
                   return 0;
               }
               else{
                   return 1;
               }
          }
       }
       if(isPrime($num)== 1){
           echo "this is prime number";
       }  elseif(isPrime($num)==0){
           echo "this is not prime number"; 
       }         
    }

