<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 데이터베이스 연결
$link = mysqli_connect("localhost", 'root', '', 'amusementPark');
if (!$link) {
    die('Connect Error: ' . mysqli_connect_error());
}

// 폼 제출 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = $_POST['customerName'];
    $childEntrance = intval($_POST['어린이_입장권']);
    $adultEntrance = intval($_POST['어른_입장권']);
    $childBIG3 = intval($_POST['어린이_BIG3']);
    $adultBIG3 = intval($_POST['어른_BIG3']);
    $childFree = intval($_POST['어린이_자유이용권']);
    $adultFree = intval($_POST['어른_자유이용권']);
    $childYear = intval($_POST['어린이_연간이용권']);
    $adultYear = intval($_POST['어른_연간이용권']);
    $totalCost = ($childEntrance * 7000) + ($adultEntrance * 10000) + ($childBIG3 * 12000) + ($adultBIG3 * 16000) + 
                 ($childFree * 21000) + ($adultFree * 26000) + ($childYear * 70000) + ($adultYear * 90000);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Amusement Park Tickets</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }
    </style>
</head>
<body>
    <div class="input-wrap">
        <h1>Welcome to Amusement Park</h1>
        <form action="" method="POST">
            <div>
                <label for="customerName">고객성명:</label>
                <input type="text" id="customerName" name="customerName" placeholder="성명을 입력하세요">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>구분</th>
                        <th colspan="2">어린이</th>
                        <th colspan="2">어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>입장권</th>
                        <th>7,000</th>
                        <td>
                            <select name="어린이_입장권">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>10,000</th>
                        <td>
                            <select name="어른_입장권">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>입장</th>
                        <tr>
                        <th>2</th>
                        <th>BIG3</th>
                        <th>12,000</th>
                        <td>
                            <select name="어린이_BIG3">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>16,000</th>
                        <td>
                            <select name="어른_BIG3">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>입장+놀이3종</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>자유이용권</th>
                        <th>21,000</th>
                        <td>
                            <select name="어린이_자유이용권">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>26,000</th>
                        <td>
                            <select name="어른_자유이용권">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>입장+놀이자유</th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>연간이용권</th>
                        <th>70,000</th>
                        <td>
                            <select name="어린이_연간이용권">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>90,000</th>
                        <td>
                            <select name="어른_연간이용권">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </td>
                        <th>입장+놀이자유</th>
                    </tr>
                                    </tbody>
            </table>
            <input type="submit" value="제출">
        </form>
        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>" . date("Y년 m월 d일 h:i:sa") . " " . $customerName . "고객님 감사합니다.</h2>";
            echo "<p>어린이 입장권 " . $childEntrance . "매, 어른 입장권 " . $adultEntrance . "매, 어린이 BIG3 " . $childBIG3 . "매, 어른 BIG3 " . $adultBIG3 . "매, 어린이 자유이용권 " . $childFree . "매, 어른 자유이용권 " . $adultFree . "매, 어린이 연간이용권 " . $childYear . "매, 어른 연간이용권 " . $adultYear . "매</p>";
            echo "<p>합계 " . $totalCost . "원입니다.</p>";
        }
        ?>
    </div>
</body>
</html>