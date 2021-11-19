<?php
require_once('functions2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $people[0] = 32;
        $people[1] = 17;
        $people[2] = 13;
        $people[3] = 99;
 
        for ($i=0; $i < count($people); $i++) { 
            myDummyFunction($people[$i]);    
        }
        
        // volání funkce
        echo sin(45);
    ?>
</body>
</html>
