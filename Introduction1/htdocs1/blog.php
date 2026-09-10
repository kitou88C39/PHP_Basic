<?php

$blog = $_POST;

if($blog['publish_status'] === 'un_publish'){
    foreach($blog2 as $key => $value){
        echo '<pre>';
        echo $key.'='.htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        echo '</pre>';
        }
} else {
    echo '公開中の記事がありません';
}
?>
