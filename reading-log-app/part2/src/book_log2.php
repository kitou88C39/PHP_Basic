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

        echo '登録が完了しました' . PHP_EOL . PHP_EOL;

        return = [
        'title' => $title,
        'author' => $author,
        'status' => $status,
        'score' => $score,
        'summary' => $summary,
        ];

  }

  $reviews = [];

  while (true) {
    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください(1,2,9) :';
    $num = trim(fgets(STDIN));

    if ($num === '1') {
        $reviews[] = createReview();