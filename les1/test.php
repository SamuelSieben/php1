<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les1</title>
</head>
<body>
   <?php 
    $firstname = ""; 
    
    //TESTVRAAG: 
    // isset -> check of var bestaat
    // empty -> check of var leeg is
    // MET ISSET KOMT ER GEEN TEKST OP
    
    if( empty( $firstname ) ){
        echo ("niet ingevuld");
    }
    ?>
   
   <h1>
   <?php echo $firstname; ?>
    </h1>
    
</body>
</html>