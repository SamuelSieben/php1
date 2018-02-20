<?php 

// deling door 3 doen = 3 % 3 = 0 
// eerst strengte voorwaarden checken in een for-loop 

for ($i = 1; $i <= 100; $i++)
{
    if($i % 3 == 0 && $i % 5 ==0){
        echo "FizzBuzz<br />";
    }
    else if($i % 3 == 0){
        echo "Fizz<br />";
    }
    else if($i % 5 == 0){
        echo "Buzz<br />";
    }
    else {
        echo $i."<br />";
    }
}


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz</title>
</head>
<body>
   
   <?php foreach($i as $tellers): ?>

<p>
    
    <strong><?php echo $tellers['i']; ?></strong>
     
 </p>
 
 <?php endforeach; ?>
    
</body>
</html>