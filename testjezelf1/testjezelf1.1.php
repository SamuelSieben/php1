<?php

 $info = [
        [
            "profilepic" => "accountimage1-01.png",
            "username" => "Jesse", 
            "place" => "Assembly 3.0",
            "places" => "San Fransisco, CA",
            "comment" => "Le work.",
            "time" => 7
        ],
     
    [
            "profilepic" => "accountimage2-01.png",
            "username" => "Thomas", 
            "place" => "Voxer",
            "places" => "San Fransisco, CA",
            "comment" => " ",
            "time" => 12
        ],
     [
            "profilepic" => "accountimage3-01.png",
            "username" => "Emma", 
            "place" => "ROXY/NoD",
            "places" => "Prague, Czech Republic",
            "comment" => " ",
            "time" => 25
        ],
     [
            "profilepic" => "accountimage1-01.png",
            "username" => "Jesse", 
            "place" => "The Mill",
            "places" => "San Fransisco, CA",
            "comment" => " ",
            "time" => 60
        ],
     [
            "profilepic" => "accountimage4-01.png",
            "username" => "Jana", 
            "place" => "MassVentures",
            "places" => " ",
            "comment" => " ",
            "time" => 7
        ],
     
       
        
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swarm</title>
</head>
<body>
   
   <?php include_once("header.swarm.php"); ?>
   
   <?php foreach($info as $infos): ?>
   <div style="background-color: #FCFBE3;">
   <img style="width: 90px; float: left;" src="images/<?php echo $infos['profilepic']; ?>">
   <div style="margin-left: 90px">
   <hr>
   <p style="font-size: 8px; color: grey;"><?php echo $infos['username']; ?></p>
   <h1 style="font-size: 19px; color: orange;"><?php echo $infos['place']; ?></h1>
   <p style="font-size: 12px; color: grey;"><?php echo $infos['places']; ?></p>
   <h1 style="font-size: 15px; color: black;"><?php echo $infos['comment']; ?></h1>
   <p style="font-size: 13px; color: grey;"><?php echo $infos['time']; ?> M </p>
   <hr>
 </div>
</div>
   <?php endforeach; ?>
    
    <?php include_once("footer.swarm.php"); ?>
    
    
</body>
</html>