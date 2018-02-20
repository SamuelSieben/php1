  <?php
    
    
    
    $comments = [
        [
            "username" => "Seppe", 
            "comment" => "Coole poodle",
            "likes" => 10
        ],
        [
            "username" => "Samuel", 
            "comment" => "Poodle is nice",
            "likes" => 2
        ],
        [
            "username" => "Dave", 
            "comment" => "nice",
            "likes" => 7
        ],
        
    ];
    
   // var_dump($comments);
   // echo $comments[0] ["username"];
   // $ = variable 
   // array() = shift+ option key = [] 
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test 2 Arrays</title>
</head>
<body>
 
  
  <h2>Instagram comments</h2>
  
 
<?php foreach($comments as $comment): ?>
<p>
    
    <strong><?php echo $comment['username']; ?></strong>
    <span><?php echo $comment['comment']; ?></span>
     
 </p>
 <?php endforeach; ?>
  
  
   
    
</body>
</html>