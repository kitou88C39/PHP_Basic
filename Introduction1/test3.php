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
echo '<pre>';
var_dump(blog2);
echo '</pre>';

//多次元配列
$blogs = [$blog1, $blog2];

echo '<pre>';
var_dump(blogs);
echo '</pre>';

//ループ処理(foreach)
//①バリューのみ出力
foreach($blog1 as $blog){
    echo '<pre>';
    echo $blog;
    echo '</pre>';
}

//②キーとバリュー出力
foreach($blog2 as $key => $value){
    echo '<pre>';
    echo $key.'='.$value;
    echo '</pre>';
}

//多次元配列blogを展開するには？
foreach($blog as $blog){
    foreach($blog as $value){
        echo '<pre>';
        echo $value;
        echo '</pre>';
    }
}

?>
