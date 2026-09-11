<?php
$blog = $_POST;

if($blog['publish_status'] === 'un_publish'){
    echo '公開中の記事がありません';
} else {
    echo '記事がありません';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>BlogForm</title>
</head>
<body>
    <h2><?php echo $blog['title']; ?></h2>
    <p>投稿日：<?php echo $blog['post_at']; ?></p>
    <p>カテゴリ：<?php echo $blog['category']; ?></p>
    <br>
    <p><?php echo $blog['content']; ?></p>
</body>
</html>
