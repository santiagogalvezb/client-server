<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
    .containerImg{
        width : 100%;
        text-align : center;
    }
    img {
        width : 500px;
    } 
    </style>
</head>
<body>
    <span>Hello from <b><em>PHP/HTML</em></b></span>
    <?php    
        $images = "";
        $happy_face = "images/happy_face.jpg" ;
        $sad_face = "images/sad_face.jpg";
        $n1 = $_REQUEST["n1"];
        $n2 = $_REQUEST["n2"];
        $result = 0;
        $op = $_REQUEST["op"];
        if($op == "s"){
        $op = $n1 + $n2;
        } else if($op == "r"){
        $op = $n1 - $n2;
        } else if($op == "m"){
        $op = $n1 * $n2;
        } else if($op == "d"){
        $op = $n1 / $n2;
        }                   
        if($op > 0){
            $images = $happy_face;
        }
        else {
            $images = $sad_face;
        }
    ?>
    
    <div>
        <span>El resultado de la operación es: <b><?php echo $op; ?></b></span>
    </div>   
    <div class= "containerImg">
    <?php
    echo "<img src='".$images."' alt='Resultado'>";
    ?>
    </div>   
</body>
</html>