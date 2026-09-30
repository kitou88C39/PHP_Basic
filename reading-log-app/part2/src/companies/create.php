<?php

//HTTPメソッドがPOSTだったら
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//POSTされた会社情報を変数に格納する
$name = trim($_POST['name'] ?? ''); 
$establishment_date = $_POST['establishment_date'] ?? ''; 
$founder = trim($_POST['founder'] ?? '');
//バリデーションチェックする
//データベースにデータを登録する
//データベースとの接続を切断する