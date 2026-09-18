<?php

echo '読書ログを登録してください'　. PHP_EOL;
echo '書籍名:';
$title = trim(fgets(STDIN));

echo '著者名:'　. PHP_EOL　. PHP_EOL;
$author = trim(fgets(STDIN));

echo '読書状況(未読、読んでる、読了):';
$status = trim(fgets(STDIN));


echo '読書ログを登録します'　. PHP_EOL;
echo '書籍名:' . $title　. PHP_EOL;

// echo '著者名:宮沢賢治'　. PHP_EOL;
// echo '読書状況:読書完了'　. PHP_EOL;
// echo '評価:5'　. PHP_EOL;
// echo '感想:面白かった'　. PHP_EOL;
