<?php

//HTTPメソッドがPOSTだったら
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//POSTされた会社情報を変数に格納する
$name = trim($_POST['name'] ?? ''); 
$establishment_date = $_POST['establishment_date'] ?? ''; 
$founder = trim($_POST['founder'] ?? '');

//バリデーションチェックする
  if ($name === '') { 
  $errors['name'] = '会社名を入力してください。'; 
  } elseif (mb_strlen($name) > 255) { 
    $errors['name'] = '会社名は255文字以内で入力してください。'; 
  }

  if ($establishment_date === '') { 
    $errors['establishment_date'] = '設立日を入力してください。'; 
  } 
  
  if ($founder === '') { 
    $errors['founder'] = '代表者を入力してください。'; 
  } elseif (mb_strlen($founder) > 255) { 
    $errors['founder'] = '代表者は255文字以内で入力してください。'; 
  }
  
//データベースにデータを登録する

//データベースとの接続を切断する