<?php

function validate($reviews)
{
  $errors = [];
  //書籍名が正しく入力されているかチェック
  if(!strlen($reviews['$title'])){
    $errors['$title'] = '書籍名を入力してください';
  } elseif (strlen($reviews['$title'])) > 255) {
    $errors['$title'] = '書籍名は255文字以内で入力してください';
  }
  return $errors;
}

function createReview($link) 
{

  $reviews = [];

  echo '読書ログを登録してください' . PHP_EOL;
  echo '書籍名:';
  $reviews['$title'] = trim(fgets(STDIN));

  echo '著者名:' . PHP_EOL . PHP_EOL;
  $reviews['$author'] = trim(fgets(STDIN));

  echo '読書状況(未読、読んでる、読了):';
  $reviews['$status'] = trim(fgets(STDIN));

  echo '評価(5点満点の整数):';
  $reviews['$score'] = trim(fgets(STDIN));

  echo '感想:';
  $reviews['$summary'] = trim(fgets(STDIN));

  $validated = validate($reviews);
  if (count($validated) > 0) {
    foreach ($validated as $errors) {
      echo $errors . PHP_EOL;
    }
    return;
  }

  $sql = <<<EOT
INSERT INTO reviews(
    title,
    author,
    status,
    score,
    summary
) VALUES (
    "{$reviews['title']}",
    "{$reviews['author']}",
    "{$reviews['status']}",
    "{$reviews['score']}",
    "{$reviews['summary']}"
)
EOT;

  $result = mysqli_query($link, $sql);
  if ($result) {
      echo '登録が完了しました' . PHP_EOL . PHP_EOL;
} else {
    echo 'Error: データベースへの追加に失敗しました' . PHP_EOL;
    echo 'Debugging error: ' . mysqli_error($link) . PHP_EOL;
}

mysqli_close($link);

echo 'データベースとの接続を切断しました' . PHP_EOL;
}