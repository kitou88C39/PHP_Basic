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