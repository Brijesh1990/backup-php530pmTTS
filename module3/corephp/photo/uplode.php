<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    if(isset($_POST["sub"]))
    {
        $tmp_name=$_FILES['img']["tmp_name"];
        $type=$_FILES['img']['type'];
        $size=$_FILES['img']['size']/1024;
        $path="uplode/".$_FILES['img']['name'];
        move_uploaded_file($tmp_name,$path);
        echo "file uplode...";
        header('location:1.php');
    }
    ?>
    <h1>File Uplde here....</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="img" placeholder="Image Uplode">
        <input type="submit" name="sub" value="Uplode">
    </form>
</body>

</html>