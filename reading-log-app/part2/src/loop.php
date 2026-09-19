<?php

$i = 0;

while (true) {
    //50より少なければ
    if ($i < 50){
    //10ずつ増やし、数値を出力する
      echo $i . PHP_EOL;
      $i += 10;
    } else {
    //ループ処理を終了する
        break;
    }
}
