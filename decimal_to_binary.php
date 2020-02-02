
<form method="POST" action="">  
   
    Enter a Number: <input type="text" name="num"/><br>  

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   $orginalInput=$_POST['num'];
   $decimal_to_binary= decbin($orginalInput);
   echo $decimal_to_binary;
   
    }




