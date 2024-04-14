<!DOCTYPE html>
<html>
<head>
    <title>Sorting</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        10부터 100까지 숫자 중 하나를 입력하시오: <input type="text" name="num_integers">
        <input type="submit" value="결과보기">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_integers = intval($_POST["num_integers"]); // 사용자로부터 정수 입력 받기

        if ($num_integers < 10 || $num_integers > 100) {
            echo "10부터 100까지 숫자가 아닙니다. 다시 입력해주세요!!";
        } else {
            // 배열 생성 및 랜덤 정수 생성
            $data = array();
            for ($i = 0; $i < $num_integers; $i++) {
                $data[$i] = rand(10, 100);
            }

            // 생성된 데이터 출력
            echo "랜덤넘버 생성 결과: ";
            echo implode(", ", $data);
            echo "<br>";

            // 정렬
            sort($data);

            // 정렬된 데이터 출력
            echo "오름차순 소팅 결과: ";
            echo implode(", ", $data);
        }
    }
    ?>
</body>
</html>