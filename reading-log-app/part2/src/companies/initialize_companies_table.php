<?php

function dbConnect()
{
    $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
    if (!$link) {
        echo 'Error: データベースに接続できません' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        exit;
    }
}

function dropTable($link)
{
    $dropTableSql = 'DROP TABLE IF EXISTS companies;';
    $result = mysqli_query($link, $dropTableSql);
    if ($result) {
        echo 'テーブルを削除しました' . PHP_EOL;
    } else {
        echo 'Error: テーブルの削除に失敗しました' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_error($link) . PHP_EOL;
    }
}

function createTable()
{

}

$link = doConnect();
dropTable($link);
createTable($link);

