
<form method="POST" action="">  
   
    Enter a Number: <input type="text" name="num"/><br>  

</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
   $year=$_POST['num'];
    if(($year%400 == 0) && ($year%100!== 0)||($year%4==0)){
     echo "the leaf year" . $year;    
    
    }else{
        echo "the not leaf year". $year;
    }

}
