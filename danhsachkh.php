<?php 
    $customList = [
        "1" => [
            "ten" => "Lê Văn Đô",
            "ngaysinh"=>"09/02/1998",
            "diachi" =>"Bồ Đào Nha",
            "anh" =>"https://keomoi.com/wp-content/uploads/2019/05/anh-gai-dep-de-thuong-hinh-14.jpg"
        ],
        "2" => [
            "ten" => "Leo Messi",
            "ngaysinh"=>"01/07/1995",
            "diachi" =>"Acgentina",
            "anh" =>"https://khoinguonsangtao.vn/wp-content/uploads/2022/09/hinh-anh-gai-xinh-viet-nam.jpg"
        ],
        "3" => [
            "ten" => "Baloteli",
            "ngaysinh"=>"02/05/1992",
            "diachi" =>"Ytalia",
            "anh" =>"https://2.bp.blogspot.com/-qBqESO1dW-c/XM61SwtelVI/AAAAAAAAK2Q/p4l87RKuF3UhEAIxL6fkXiI3nH295DZYgCLcBGAs/s1600/anh-gai-xinh-viet-nam%2B29.jpg"
        ],
        "4" => [
            "ten" => "Ng Công Phượng",
            "ngaysinh"=>"20/10/1992",
            "diachi" =>"Nghệ An",
            "anh" =>"https://2.bp.blogspot.com/-fjf5yU5r1Jk/WE1VD1BBKpI/AAAAAAAAjgI/bXwGoigAPJYvScMPtzJtzbOJfoGQO2C_ACEw/s1600/15349541_533868826819201_3350340522319981193_n.jpg"
        ],
        "5" => [
            "ten" => "Văn Quyến",
            "ngaysinh"=>"10/05/1990",
            "diachi" =>"Hà Nội",
            "anh" =>"https://upanh123.com/wp-content/uploads/2020/10/anh-gai-xinh-deo-kinh-toc-ngan-2k4-12-819x1024.jpg"
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          table {
        border-collapse: collapse;
        width: 50%;
        background-color: seashell;
        text-align: center;
        margin: 0px auto;
    }
        th, td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }
        img {
            width: 75px;
        }
    </style>
</head>
<body>
   
    <table>
        <thead style="background-color: gray;">
            <tr>
                <th colspan="5" style="text-align: center;"> <h2> Danh sách khách hàng</h2></th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Ngày Sinh</th>
                <th>Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($customList as $key => $value): ?>
            <tr>   
                <td><?php echo $key ?></td>
                <td><img src="<?php echo $value['anh'] ?>" alt=""></td>
                <td><?php echo $value["ten"]  ?></td>
                <td><?php echo $value['ngaysinh'] ?></td>
                <td> <?php echo $value["diachi"] ?> </td>          
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>