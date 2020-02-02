
<form method="POST" action="">  
   
    Enter a Number: <input type="text" name="num"/><br>  

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   $orginalInput=$_POST['num'];
   $binary_to_decimal= bindec($orginalInput);
   echo "decimal number". $binary_to_decimal;
   
    }






