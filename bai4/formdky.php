<!DOCTYPE html>
<html>
<head>
    <title>Form Đăng ký</title>
</head>
<body>
    <h2>Form Đăng ký</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Tên người dùng:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="phone">Điện thoại:</label>
        <input type="text" name="phone" id="phone" required><br><br>

        <input type="submit" name="submit" value="Đăng ký">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $errors = [];

        if (empty($name)) {
            $errors[] = "Vui lòng nhập tên người dùng.";
        }

        if (empty($email)) {
            $errors[] = "Vui lòng nhập email.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email không đúng định dạng.";
        }

        if (empty($phone)) {
            $errors[] = "Vui lòng nhập số điện thoại.";
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        } else {
            $user = [
                "name" => $name,
                "email" => $email,
                "phone" => $phone
            ];

            $jsonData = file_get_contents("users.json");
            $users = json_decode($jsonData, true);
            $users[] = $user;
            $jsonData = json_encode($users, JSON_PRETTY_PRINT);
            file_put_contents("users.json", $jsonData);

            echo "<p class='success'>Đăng ký thành công!</p>";
        }
    }
    ?>
</body>
</html>