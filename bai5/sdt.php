<!DOCTYPE html>
<html>
<head>
    <title>Phân loại số điện thoại</title>
</head>
<body>
    <h1>Phân loại số điện thoại</h1>
    <form method="post">
        <textarea name="phone_numbers" rows="5" cols="50"></textarea><br>
        <input type="submit" value="Phân loại">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Lấy danh sách số điện thoại từ textarea
        $phoneNumbers = $_POST['phone_numbers'];

        // Phân tách danh sách số điện thoại thành mảng
        $numbers = explode(',', $phoneNumbers);

        // Khởi tạo các mảng để lưu số điện thoại của từng nhà mạng
        $viettelNumbers = [];
        $mobifoneNumbers = [];
        $vinaphoneNumbers = [];

        // Duyệt qua từng số điện thoại và phân loại
        foreach ($numbers as $number) {
            // Xóa khoảng trắng và ký tự không cần thiết trong số điện thoại
            $number = trim($number);

            // Kiểm tra đầu số để phân loại vào mảng tương ứng
            if (startsWith($number, '086') || startsWith($number, '096') || startsWith($number, '097') || startsWith($number, '098') || startsWith($number, '032') || startsWith($number, '033') || startsWith($number, '034') || startsWith($number, '035') || startsWith($number, '036') || startsWith($number, '037') || startsWith($number, '038') || startsWith($number, '039')) {
                $viettelNumbers[] = $number;
            } elseif (startsWith($number, '089') || startsWith($number, '090') || startsWith($number, '093') || startsWith($number, '070') || startsWith($number, '079') || startsWith($number, '077') || startsWith($number, '076') || startsWith($number, '078')) {
                $mobifoneNumbers[] = $number;
            } elseif (startsWith($number, '088') || startsWith($number, '091') || startsWith($number, '094') || startsWith($number, '083') || startsWith($number, '084') || startsWith($number, '085') || startsWith($number, '081') || startsWith($number, '082')) {
                $vinaphoneNumbers[] = $number;
            }
        }

        // Hiển thị kết quả
        echo "<h2>Số điện thoại Viettel:</h2>";
        foreach ($viettelNumbers as $number) {
            echo $number . "<br>";
        }

        echo "<h2>Số điện thoại Mobifone:</h2>";
        foreach ($mobifoneNumbers as $number) {
            echo $number . "<br>";
        }

        echo "<h2>Số điện thoại Vinaphone:</h2>";
        foreach ($vinaphoneNumbers as $number) {
            echo $number . "<br>";
        }
    }

    // Hàm kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác hay không
    function startsWith($haystack, $needle) {
        return substr($haystack, 0, strlen($needle)) === $needle;
    }
    ?>
</body>
</html>