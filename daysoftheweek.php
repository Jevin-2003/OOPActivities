<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="form.css">
    <form action=""method="post">
        <input type="submit" value="Monday" name="d1">
    </form>
    <form action="" method="post">
        <input type="submit" value="Tuesday" name="d2">
    </form>
    <form action="" method="post">
        <input type="submit" value="Wednesday" name="d3">
    </form>
    <form action="" method="post">
        <input type="submit" value="Thursday" name="d4">
    </form>
    <form action="" method="post">
        <input type="submit" value="Friday" name="d5">
    </form>

    <div class="display">
    <?php 
    if(isset($_POST['d1'])){
        echo "I am Monday";
    }
    
    if(isset($_POST['d2'])){
        echo "I am Tuesday";
    }
    
    if(isset($_POST['d3'])){
        echo "I am Wednesday";
    }
   
    if(isset($_POST['d4'])){
        echo "I am Thursday";
    }
   
    if(isset($_POST['d5'])){
        echo "I am Friday";
    }
    
    ?>
    </div>
   
   <style>
        input {
            display: flex;
            
        }
    </style>
</body>
</html>