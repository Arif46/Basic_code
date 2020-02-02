
<form method="POST" action="">  
    <level>Enter 1 for cel to fah and 2 for fah to cel<br></level>
    Enter a Number: <input type="text" name="num"/><br>  

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $orginalInput = $_POST['num'];
    $inputArr = explode(' ', $orginalInput);
    $action = $inputArr[0];
    $temp = $inputArr[1];
    $result = 0;

    if ($action == 1) {
        $result = ($temp * 9 / 5) + 32;
        echo $result;
    } elseif ($action == 2) {
        $result = ($temp - 32) * 5 / 9;
        echo $result;
    } else {
        echo 'Invalid input';
    }
}



