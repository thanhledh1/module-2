<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dang Nhap</h1>
    <form action="" method="post">
        <input type="radio" name="gender" id="" value="male">Nam <br>
        <input type="radio" name="gender" id="" value="famale">Nu <br>
        <input type="submit" value="Nhap" name="submit">
    </form>
    <?php 
    if(isset($_POST['submit'])){
        echo "<pre>";
        print_r($_POST);
    }
    ?>
</body>
</html>