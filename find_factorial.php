
<form method="POST" action="">        
    Enter a Number: <input type="text" name="num"/><br>  

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['num'];

       $factorial = 1;
    for ($i = $number; $i >= 1; $i--) {
        $factorial = $factorial * $i;
    }
    echo "Factorial of $number is $factorial";


}  