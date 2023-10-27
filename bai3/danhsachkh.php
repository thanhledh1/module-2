<?php
    $customerList = [
        "1" => [
            "name" => "Mai Văn Hoàn",
            "day_of_birth" => "1983/08/20",
            "address" => "Hà Nội",
            "profile" => "https://hinhgaixinh.com/wp-content/uploads/2021/03/20210314-nu-sinh-nhat-ban-6-835x1254.jpg"
        ],
        "2" => [
            "name" => "Nguyễn Văn Nam",
            "day_of_birth" => "1983/08/21",
            "address" => "Bắc Giang",
            "profile" => "https://phunugioi.com/wp-content/uploads/2020/03/anh-hot-girl-trung-quoc-cuc-tinh-y.jpg"
        ],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "1983/08/22",
            "address" => "Nam Định",
            "profile" => "https://2.bp.blogspot.com/-QpuIGnbetEo/WE1VFOZy3ZI/AAAAAAAAjgo/MXBXt1CpReIY6GeKFyXriV0WCMM_kD5fwCEw/s1600/15380511_219069811870313_3290153746824925629_n.jpg"
        ],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "1983/08/17",
            "address" => "Hà Tây",
            "profile" => "https://hinhgaixinh.com/wp-content/uploads/2021/10/anh-co-gai-xinh-dep-tuyet-nhung.jpg"
        ],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "1983/08/19",
            "address" => "Hà Nội",
            "profile" => "https://nguoinoitieng.tv/images/nnt/102/0/bf6h.jpg"
        ]
    ];
    // Xây dựng hàm tìm kiếm searchByDate() với 3 tham số đầu vào.
    function searchByDate($customers, $fromDate, $toDate): array
    {
//         Hàm empty() là một hàm chuyên kiểm tra dữ liệu rỗng trong php
        if (empty($fromDate) || empty($toDate)) {
            return $customers;
        }

//      Hàm strtotime() sẽ phân tích bất kỳ chuỗi thời gian bằng tiếng anh thành một số nguyên chính là timestamp của thời gian đó.

        $filteredCustomers = [];
        foreach ($customers as $customer) {
            if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
                continue;
            if (strtotime($customer['day_of_birth']) > strtotime($toDate))
                continue;
            $filteredCustomers[] = $customer;
        }
        return $filteredCustomers;
    }
    // Lấy $fromDate và $toDate từ form và gọi hàm lọc khách hàng.
    // Chú ý: a ?? b có ý nghĩa nếu không tồn tại a thì giá trị sẽ nhận là b
    $fromDate = $_REQUEST["from"] ?? null;
    $toDate =  $_REQUEST["to"] ?? null;

    $filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* CSS cho form */
    form {
        margin-bottom: 20px;
    }

    form input[type="date"] {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    form input[type="submit"] {
        padding: 8px 15px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    /* CSS cho bảng */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table caption {
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: bold;
    }

    table th,
    table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #f5f5f5;
    }

    .profile img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%;
    }
</style>
</head>

<body>
    <form action="">
        Chọn Ngày sinh từ : <input type="date" name="from" id="" placeholder="mm/dd/yyyy" value="<?php echo $fromDate ?? ''; ?>">
        đến : <input type="date" name="to" id="" placeholder="mm/dd/yyyy" value="<?php echo $toDate ?? ''; ?>">
        <input type="submit" value="Lọc">
    </form>
    <table>
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
    
    
</body>

</html>