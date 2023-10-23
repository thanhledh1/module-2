<?php   
    //      echo "<pre>";
    // print_r($_POST);
    // print_r($_SERVER);
    // echo "</pre>";
    // lấy giá trị từ post 
    $amount="";
    $rate = "";
    $year = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $amount = $_POST["amount"];
        $rate = $_POST["rate"];
        $year = $_POST["year"];
    }
   
    
 // tính giá trị tương lai

    $futureValue = $amount;
    for ($i = 1; $i <= $year; $i++) {
        $futureValue += $futureValue * ($rate / 100);
    }

    // Hiển thị kết quả
    // echo "Investment Amount: $amount<br>";
    // echo "Yearly Interest Rate: $rate%<br>";
    // echo "Number of Years: $year<br>";
    // echo "Future Value: $futureValue";
    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        h3 {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Future Value Calculator</h1>
        <form action="" method="POST">
            <label for="amount">Investment Amount:</label>
            <input type="number" name="amount" id="amount" placeholder="Nhập số tiền hiện tại" required>

            <label for="rate">Yearly Interest Rate:</label>
            <input type="number" name="rate" id="rate" placeholder="Nhập lãi xuất" required>

            <label for="year">Number of Years:</label>
            <input type="number" name="year" id="year" placeholder="Nhập số năm" required>

            <input type="submit" value="Calculate">
            <h3> <?php echo "futureValue : ". $futureValue ?></h3>
        </form>
    </div>
</body>
</html>