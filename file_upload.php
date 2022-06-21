<?php 

    if(isset($_POST['submit'])) {
        $allowedExtensions = array('png', 'jpg', 'jpeg', 'gif');
        if(!empty($_FILES['upload']['name'])) {
            $fileName = $_FILES['upload']['name'];
            $fileSize = $_FILES['upload']['size'];
            $fileTemp = $_FILES['upload']['tmp_name'];

            $targetDir = "uploads/$fileName";

            $fileExt = explode('.', $fileName);
            $fileExt = strtolower(end($fileExt));

            if(in_array($fileExt, $allowedExtensions)) {
                move_uploaded_file($fileTemp, $targetDir);
                $successMsg = '<p style="color:green" >File uploaded successfully</p>';
            } else {
                $errorMsg = '<p style="color:red" >Invalid type</p>';
            }

        } else {
            $errorMsg = '<p style="color:red" >No selected file</p>';

        }
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $errorMsg ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data" >
        Select Image to Upload:
        <input type="file" name="upload" >
        <input type="submit" value="Submit" name="submit">
    </form>
    <script>
        console.log('I miss ya')
        const name = 'Sirna'
        console.log(name)
    </script>
</body>
</html>