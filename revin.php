<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
         <label for="">First number1</label>   
         <input type="number" name="n1">
         <br>
         <label for="">First number1</label> 
         <input type="number" name="n2">
         <br>
         <input type="submit" name="submit">






    </form>
    <?php 
    if(isset($_POST['submit'])){

        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $sum = $num1+$num2;

        echo "The sum of $num1, $num2, is: $sum"."<br>";
        
    }
    
    if(isset($_POST['submit'])){

        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $diff= $num1-$num2;

        echo "The diff of $num1, $num2, is: $diff"."<br>";
        
    }
    if(isset($_POST['submit'])){

        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $product = $num1*$num2;

        echo "The product of $num1, $num2, is: $product"."<br>";
        
    }
    if(isset($_POST['submit'])){

        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $quotient = $num1/$num2;

        echo "The quotient of $num1, $num2, is: $quotient"."<br>";
        
    }
    
    
    
    ?>
</body>
</html>