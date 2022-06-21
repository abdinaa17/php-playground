<?php 
    // $name = "Nasir";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Playground</title>
</head>
<body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <input type="text" name="name">
            <input type="submit" name="submit" value="Submit">
        </form>

        <div>
           <p><php? echo $_GET[] ?></p>
        </div>
</body>
</html>