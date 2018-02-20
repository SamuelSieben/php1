<?php
    
//constant
define('LANGUAGE', 'nl');
echo LANGUAGE;

$languages = [
    
    'nl' => 'Commentaren',
    'en' => 'Comments',
];

// Switchen tussen de talen 
switch( LANGUAGE ){
    case 'nl': 
        $title = $languages['nl'];
    break;
        
    case 'en':
        $title = $languages['en'];
    break;
}
    
    // select * from comments;

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
    <title><?php echo $title; ?></title>
</head>
<body>
 
  
  <h2><?php echo $title; ?></h2>
  
 
<?php foreach($comments as $comment): ?>
<?php if( $comment['likes'] > 5): ?>
<p>
    
    <strong><?php echo $comment['username']; ?></strong>
    <span><?php echo $comment['comment']; ?></span>
     
 </p>
 <?php endif; ?>
 <?php endforeach; ?>
  
  
   
    
</body>
</html>