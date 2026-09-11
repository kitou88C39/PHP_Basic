<?php
$blog = $_POST;

if($blog['publish_status'] === 'un_publish'){
    echo '公開中の記事がありません';
    return;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>BlogForm</title>
</head>
<body>
    <h2><?php echo htmlspecialchars($blog['title'],ENT_QUOTES,'UTF-8'); ?></h2>
    <p>投稿日：<?php echo htmlspecialchars($blog['post_at'],ENT_QUOTES,'UTF-8'); ?></p>
    <p>カテゴリ：<?php echo htmlspecialchars($blog['category'],ENT_QUOTES,'UTF-8'); ?></p>
    <br>
    <p><?php echo htmlspecialchars($blog['content'],ENT_QUOTES,'UTF-8'); ?></p>
</body>
</html>
