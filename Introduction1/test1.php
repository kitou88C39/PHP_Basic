<?php
//変数
//ブログのタイトル
$title = "PHPテスト";
$content = "PHPテストです";
$post_at = "2026/09/10";
$tag = ['PHP', 'プログラミング'];
$stautus = true; 公開　//非公開　false;

//定数
const ID = 1;

echo ID;
echo '<br>';
echo $title;
echo '<br>';
echo $content;
echo '<br>';
echo $post_at;
echo '<br>';
print_r($tag);

//データ型
var_dump(ID);

?>
