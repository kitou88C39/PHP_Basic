<?php

//HTTPメソッドがPOSTだったら
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//POSTされた会社情報を変数に格納する
$name = trim($_POST['name'] ?? ''); 
$establishment_date = $_POST['establishment_date'] ?? ''; 
$founder = trim($_POST['founder'] ?? '');

//バリデーションチェックする
   $errors = [];

    if ($company_name === '') {
        $errors[] = '会社名を入力してください';
    }

    if ($address === '') {
        $errors[] = '住所を入力してください';
    }

    if ($phone === '') {
        $errors[] = '電話番号を入力してください';
    }

//データベースにデータを登録する

//データベースとの接続を切断する