<?php

$blog = $_POST;

foreach($blog2 as $key => $value){
    echo '<pre>';
    echo $key.'='.htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    echo '</pre>';
}

?>
