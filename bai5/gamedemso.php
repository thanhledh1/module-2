<?php 
function guess_number($min_value, $max_value) {
    // Chọn một số ngẫu nhiên trong khoảng
    $guess = rand($min_value, $max_value);

    // Lặp lại cho đến khi người chơi trả lời "đúng"
    while (true) {
        // Yêu cầu người chơi trả lời
        echo "Đó là số bạn nghĩ ra chứ? (nhỏ hơn/lớn hơn/đúng): ";
        $answer = fgets(STDIN);

        // Nếu người chơi trả lời "đúng", kết thúc trò chơi
        if ($answer == "đúng") {
            return $guess;

        // Nếu người chơi trả lời "nhỏ hơn", thu hẹp khoảng số cần đoán về nửa nhỏ hơn
        } elseif ($answer == "nhỏ hơn") {
            $max_value = $guess - 1;

        // Nếu người chơi trả lời "lớn hơn", thu hẹp khoảng số cần đoán về nửa lớn hơn
        } else {
            $min_value = $guess + 1;
        }
    }
}

// Người chơi nghĩ ra số 50

$guess_number(1, 100);
?>