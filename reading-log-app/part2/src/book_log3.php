<?php

function createReview()
{

  echo '読書ログを登録してください' . PHP_EOL;
  echo '書籍名:';
  $title = trim(fgets(STDIN));

  echo '著者名:' . PHP_EOL . PHP_EOL;
  $author = trim(fgets(STDIN));

  echo '読書状況(未読、読んでる、読了):';
  $status = trim(fgets(STDIN));

  echo '評価(5点満点の整数):';
  $score = trim(fgets(STDIN));

  echo '感想:';
  $summary = trim(fgets(STDIN));

  echo '読書ログを登録します' . PHP_EOL;
  echo '書籍名:' . $title . PHP_EOL;

}

$sql = <<<EOT
INSERT INTO reviews(
    title,
    author,
    status,
    score,
    summary
) VALUES (
    "{$title}",
    "{$author}",
    "{$status}",
    "{$score}",
    "{$summary}"
)
EOT;

$result = mysqli_query($link, $sql);

if ($result) {
    echo 'データベースに追加しました' . PHP_EOL;
} else {
    echo 'Error: データベースへの追加に失敗しました' . PHP_EOL;
    echo 'Debugging error: ' . mysqli_error($link) . PHP_EOL;
}

mysqli_close($link);

echo 'データベースとの接続を切断しました' . PHP_EOL;