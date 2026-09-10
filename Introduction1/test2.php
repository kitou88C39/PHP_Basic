<?php
//変数
//ブログのタイトル
$title = "PHPテスト";
$content = "PHPテストです";
$post_at = "2026/09/10";
$tag = ['PHP', 'プログラミング'];
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

//配列の中から添字orキーを指定する


?>
