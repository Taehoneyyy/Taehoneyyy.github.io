<!DOCTYPE html>
<html>
<head>
    <title>Sum, Factorial</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        input number: <input type="text" name="user_input">
        <input type="submit" value="ok!">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_input = $_POST["user_input"]; // 폼에서 입력 받기

        // 입력 값으로 합과 곱 계산
        $user_input = intval($user_input); // 사용자 입력을 정수형으로 변환
        $sum = 0;
        $prod = 1;
        for ($i = 1; $i <= $user_input; $i++) {
            $sum += $i;
            $prod *= $i;
        }

        // 결과 출력
        echo "<br>1 + ... + $user_input = $sum<br>";
        echo "1 * ... * $user_input = $prod";
    }
    ?>
</body>
</html>