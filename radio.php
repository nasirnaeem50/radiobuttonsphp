<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="visa">
    visa<br>
    <input type="radio" name="credit_card" value="mastercard">
    mastercard<br>
    <input type="radio" name="credit_card" value="visa">
    paypall<br><br>
    <input type="submit" name="confirm" value="confirm"><br>
    
    </form>

    
</body>
</html>
<?php
if(isset($_POST["confirm"])){
    $credit_card=null;
    if(isset($_POST["credit_card"])){
        $credit_card=$_POST["credit_card"];
        
        
    }
    if($credit_card=="visa"){
        echo "you select visa";
    }
    elseif ($credit_card=="mastercard"){
        echo "you select mastercard";
    }
    elseif ($credit_card=="paypall"){
        echo "you select paypall";
    }
    else{
        echo "please select one card";
    }
  
}
?>