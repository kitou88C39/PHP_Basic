<?php

$link = mysqli_connect('db', 'book_log', 'pass', 'book_log');

if (!$link) {
  echo 'Error: 'データベースに接続できませんでした' . PHP_EOL;
  echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
  exit;
}

echo 'データベースに接続できました' . PHP_EOL;

$sql = <<<EOT
INSERT INTO companies(
  name,
  establishment_date,
  founder
) VALUES (
  'SmartHR Inc',
  '2023-01-25',
  'Shoji Miyata'
)
EOT;

$result = mysqli_query($linkm $sql);
if ($result){
  echo 'データベースに追加しました' . PHP_EOL;
} else {
  echo 'Error: 'データベースに追加に失敗しました' . PHP_EOL;
  echo 'Debugging error: ' . mysqli_error($link) . PHP_EOL;
}

mysqli_close($link);
echo 'データベースに接続を切断しました' . PHP_EOL;