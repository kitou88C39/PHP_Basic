<?php
//変数
//ブログのタイトル
const ID = 1;
$title = "PHPテスト";
$content = "PHPテストです";
$post_at = "2026/09/10";
$tag = ['PHP', 'プログラミング'];
$stautus = true; 公開　//非公開　false;

/ブログのタイトル
const ID = 2;
$title = "PHPテスト2";
$content = "PHPテスト2です";
$post_at = "2026/09/10";
$tag = ['PHP', 'プログラミング2'];
$stautus = true; 公開　//非公開　false;

//2つの記事のデータを配列に入れて、ループ処理で表示する
//ブログ①
$blog1 = array(
  'id'=> ID,
  'title' => $title,
  'content' => $content,
  'post_at' => $post_at,
  'tag' => $tag,
  'stautus' => $stautus
);

//配列の取り出し方
echo $blog1['title'];

//ブログ②
$blog2 = [
  'id2'=> ID2,
  'title2' => $title2,
  'content2' => $content2,
  'post_at2' => $post_at2,
  'tag2' => $tag2,
  'stautus2' => $stautus2
];

//配列の取り出し方
var_dump(blog2);



?>
