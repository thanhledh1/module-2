<?php
$dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính",
    "love" => "iu",
    "elsu" => "óc",
    "cheese" => "phô mai",
    "eat" => "ăn",
    "phone" => "điện thoại"
]
?>
<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    // Tạo biến $flag gán mặc định bằng 0, tức là không tìm thấy từ.
    $flag = 0;
    // $dictionary là tên mảng chứa bộ từ và nghĩa của từ.
    // $word là key để duyệt từng phần tử trong mảng.
    // $description là value của từng key trong mảng.
    foreach ($dictionary as $word => $description) {
        if ($word == $searchWord) {
            $flag = 1;
            break;
        }
    }

    if ($flag == 0) {
        // echo "Không tìm thấy từ cần tra.";
        $result = "Không tìm thấy từ cần tra.";
    } else {
        $result = "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
        // echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
    }

    h2 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        text-align: center;
    }

    input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 300px;
        margin-right: 10px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
</head>

<body>
    <h2>Từ Điển Anh - Việt </h2>
    <form action="" method="post">
        <input type="text" name="search" id="" placeholder="Nhập Từ cần tìm">
        <input type="submit" value="Tìm">
        <h3> <?php echo $result ?></h3>
    </form>
</body>

</html>