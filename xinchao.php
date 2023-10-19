<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cú Pháp viết PHP</title>
</head>
<body>
  <style>
    h1 { color:  red;}
  </style>
  <h1> Xin chào tôi là <?php echo "Thành Pro ELSU" ?> </h1>
  <?php 
  // xuẩt dữ liệu echo
  $a = 100;
  echo "Giá trị của a = {$a} ";
  // xuất dữ liệu print_r (mảng)
  $my_array = array("A", "B", "C");
  echo "<pre>";
  print_r($my_array)
  ?>
  <div id='content'>
    <h1 class='post-title'></h1>
    <div class='post-content'>

    </div>
  </div>
  <?php 
  $post_title = 'Tìm thấy nhiều vật dụng của ngư dân quanh khu vực tàu chìm';
  $post_context1 ="Trước đó 19h30 ngày 16/10, tàu do ông Lương Văn Viên làm thuyền trưởng cùng 53 ngư dân gặp nạn khi câu mực cách đảo Song Tử Tây, thuộc quần đảo Trường Sa,"
  ?>
</body>
</html>