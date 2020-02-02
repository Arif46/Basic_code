<form method="POST" action="">  
   
    Enter a Number: <input type="text" name="num"/><br>  

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $number=$_POST['num'];
    if($number % 2==0){
        echo "even number".$number;
    } else {
     echo "odd number" .$number;    
    }

}

