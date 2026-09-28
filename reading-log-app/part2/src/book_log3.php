<?php
function validate($review)
{
    $errors = [];
    //書籍名が正しく入力されているかチェック
    if(!strlen($review['$title'])){
        $errors['$title'] = '書籍名を入力してください';
    } elseif (strlen($review['$title'])) > 255) {
        $errors['$title'] = '書籍名は255文字以内で入力してください';
    }

    //評価が正しく入力されているかチェック
    if ($review['$score'] < 1 || $review['$score'] > 5) {
        $errors['$score'] = '評価は1-5の整数を入力してください';
    }

    return $errors;
}

function createReview($link)
{
    $review = [];
    echo '読書ログを登録してください' . PHP_EOL;
    echo '書籍名:';
    $review['$title'] = trim(fgets(STDIN));
    echo '著者名:' . PHP_EOL . PHP_EOL;
    $review['$author'] = trim(fgets(STDIN));
    echo '読書状況(未読、読んでる、読了):';
    $review['$status'] = (int)trim(fgets(STDIN));
    echo '評価(5点満点の整数):';
    $review['$score'] = trim(fgets(STDIN));
    echo '感想:';
    $review['$summary'] = trim(fgets(STDIN));
    $validated = validate($review);

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
    "{$review['title']}",
    "{$review['author']}",
    "{$review['status']}",
    "{$review['score']}",
    "{$review['summary']}"
)
EOT;

    $result = mysqli_query($link, $sql);
    if ($result) {
        echo '登録が完了しました' . PHP_EOL . PHP_EOL;
    } else {
        echo 'Error: データベースへの追加に失敗しました' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_error($link) . PHP_EOL . PHP_EOL;
    }
}

function listReviews($reviews)
{
    echo '登録されている読書ログを表示します' . PHP_EOL;
    foreach ($reviews as $review) {
        echo '書籍名:' . $review['title'] . PHP_EOL;
        echo '著者名:' . $review['author'] . PHP_EOL;
        echo '読書状況:' . $review['status'] . PHP_EOL;
        echo '評価:' . $review['score'] . PHP_EOL;
        echo '感想:' . $review['summary'] . PHP_EOL;
        echo '----------------------------' . PHP_EOL;
    }
}

function dbConnect()
{
    $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
    if (!$link) {
        echo 'Error: データベースに接続できませんでした' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo 'データベースに接続できました' . PHP_EOL;
    return $link;
}


