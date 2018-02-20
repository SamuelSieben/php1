<?php

    $concert = [
        [
            "image" => "concert1.jpg",
            "date" => "14th of feb", 
            "band" => "The dudes",
            "extra" => "in concert",
            "text" => "A band with a mind full of shit",
            "hour" => "19:00",
            "place" => "AB Brussel",
            "sold" => "Sold Out"
        ],
         [
            "image" => "concert2.jpg",
            "date" => "25th of april", 
            "band" => "Black Box Revelation",
            "extra" => "Life in Concert",
            "text" => "Closing their tour in the hearth of Brussels",
            "hour" => "22:00",
            "place" => "Tour & Taxi",
            "sold" => "Sold Out"
        ],
         [
            "image" => "concert3.jpg",
            "date" => "13th of september", 
            "band" => "Kanye West",
            "extra" => "The full experience",
            "text" => "Making music and fun",
            "hour" => "21:00",
            "place" => "Huis 23",
            "sold" => "Almost Full"
        ],
    
        
    ];

?>

<style>
    
    body{
        font-family: sans-serif;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Jezelf 4</title>
</head>
<body>
 
  <?php foreach($concert as $con): ?>
 <a href="htmlspecialchars($_GET["place"])"><?php echo $con['place']; ?></a>
 <?php endforeach; ?>
 
 <p>Filter by venue: <a href="testjezelf1.4.php?place=AB Brussel">AB Brussel</a> - <a href="">Tour & Taxi</a> - <a href="">Huis 23</a></p>
  
   <?php foreach($concert as $con): ?>
   <div style="margin-left: 20px;">
   <img style="width: 90px; float: left; padding-right: 100%; padding-top: 40px;" src="images/<?php echo $con['image']; ?>">
   
   <div>
   <p style="font-size: 12px; color: red;"><?php echo $con['date']; ?></p>
   <h1 style="font-size: 19px; color: red;"><?php echo $con['band']; ?></h1>
   <p style="font-size: 12px; color: grey;"><?php echo $con['extra']; ?></p>
   <h1 style="font-size: 15px; color: grey;"><?php echo $con['text']; ?></h1>
   <p style="font-size: 13px; color: grey;"><?php echo $con['hour']; ?> h. </p>
   <p><?php echo $con['place']; ?></p>
   <p><?php echo $con['sold']; ?></p>
   </div>
    </div>
   <?php endforeach; ?>
   
   
    
</body>
</html>