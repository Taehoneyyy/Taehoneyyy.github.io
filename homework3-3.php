<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    100 이하의 정수 숫자를 입력하시오: <input type="text" name="num_fibonacci">
        <input type="submit" value="실행">
    </form>

    <?php
    function fibonacci($n) {
        $fib = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_fibonacci = intval($_POST["num_fibonacci"]); // 사용자로부터 정수 입력 받기

        // 피보나치 수열 생성
        $fibonacci_sequence = fibonacci($num_fibonacci);

        // 각 항의 앞 항과 뒤 항의 비 출력
        echo "<table border='1'>";
        echo "<tr><th>i</th><th>Fi</th><th>Fi+1</th><th>Fi+1 / Fi</th></tr>";
        for ($i = 0; $i < $num_fibonacci; $i++) {
            $fib_i = $fibonacci_sequence[$i];
            $fib_i_plus_1 = isset($fibonacci_sequence[$i + 1]) ? $fibonacci_sequence[$i + 1] : "";
            $ratio = ($fib_i != 0 && $fib_i_plus_1 != 0) ? ($fib_i_plus_1 / $fib_i) : "";
            echo "<tr><td>$i</td><td>$fib_i</td><td>$fib_i_plus_1</td><td>$ratio</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>