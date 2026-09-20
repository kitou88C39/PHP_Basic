<?php

$comics = ['A','B','C'];

$comics[] = 'D';

echo $comics[2] .PHP_EOL;

$numbers = [1,2,3,4,5];
forearch ($numbers as $number){
    //繰り返したい処理
    echo $numbers * 2 . PHP_EOL;
}

$currencies = [
  'japan' => 'yen',
  'us' => 'dollar',
  'england' => 'pound',
];
