     
<?php
       
$todo = [
        [
            "beschrijving" => "Afwassen van de vaat", 
            "urenwerk" => 2,
            "categorie" => "Vaatwas"
        ],
       [
            "beschrijving" => "Kamer opruimen", 
            "urenwerk" => 3,
            "categorie" => "Kamer"
        ],
     [
            "beschrijving" => "Huis makeover geven en tesla kopen", 
            "urenwerk" => 8,
            "categorie" => "Huis"
        ],
     [
            "beschrijving" => "Php oefeningen maken", 
            "urenwerk" => 12,
            "categorie" => "School"
        ],
     [
            "beschrijving" => "Bad nemen", 
            "urenwerk" => 1,
            "categorie" => "Ontspanning"
        ],
        
    ];

?>

<style>
    
    @keyframes bounce {
	0%, 20%, 60%, 100% {
		-webkit-transform: translateY(0);
		transform: translateY(0);
	}

	40% {
		-webkit-transform: translateY(-20px);
		transform: translateY(-20px);
	}

	80% {
		-webkit-transform: translateY(-10px);
		transform: translateY(-10px);
	}
}
    
    .divke:hover {
	animation: bounce 1s;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO</title>
</head>
<body>
   
   <?php foreach($todo as $todos): ?>
<?php if( $todos['urenwerk'] > 5): ?>
<div class="divke" style="background-color: red; border-radius: 10px; text-align: center; color: white; font-weight: bold;">
<p> <?php echo $todos['beschrijving']; ?> </p>
<p><?php echo $todos['categorie']; ?></p>
</div>
 <?php endif; ?>
 
 <?php if( $todos['urenwerk'] > 1): ?>
<div class="divke" style="background-color: orange; border-radius: 10px; text-align: center; color: white; font-weight: bold;">
<p> <?php echo $todos['beschrijving']; ?> </p>
<p><?php echo $todos['categorie']; ?></p>
</div>
 <?php endif; ?>
 
 <?php if( $todos['urenwerk'] <= 1): ?>
<div class="divke" style="background-color: green; border-radius: 10px; text-align: center; color: white; font-weight: bold;">
<p> <?php echo $todos['beschrijving']; ?> </p>
<p><?php echo $todos['categorie']; ?></p>
</div>
 <?php endif; ?>
 <?php endforeach; ?>
   
    
</body>
</html>