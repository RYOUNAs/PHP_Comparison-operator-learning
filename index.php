<?php
// 自動で比較演算子の問題を生成から、答え合わせまでのプログラム

$num_1 = rand(1, 100);
$num_2 = rand(1, 100);
$num_3 = rand(1, 6);

if ($num_3 == 1) {
    $operator = '<';
    if ($num_1 < $num_2) {
        $end = 'true';
    } else {
        $end = 'flase';
    }
} elseif ($num_3 == 2) {
    $operator = '>';
    if ($num_1 > $num_2) {
        $end = 'true';
    } else {
        $end = 'flase';
    }
} elseif ($num_3 == 3) {
    $operator = '<=';
    if ($num_1 <= $num_2) {
        $end = 'true';
    } else {
        $end = 'flase';
    }
} elseif ($num_3 == 4) {
    $operator = '>=';
    if ($num_1 >= $num_2) {
        $end = 'true';
    } else {
        $end = 'flase';
    }
} elseif ($num_3 == 5) {
    $operator = '!=';
    if ($num_1 != $num_2) {
        $end = 'true';
    } else {
        $end = 'flase';
    }
} elseif ($num_3 == 6) {
    $operator = '==';
    if ($num_1 == $num_2) {
        $end = 'true';
    } else {
        $end = 'flase';
    }
}

$question = $num_1 . $operator . $num_2;


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <h1>比較演算子問題Webページ</h1>
</head>

<body>
    <h2>問題：<?php echo $question; ?></h2>

    <h2>答えは:<?php echo $end; ?></h2>
</body>

</html>