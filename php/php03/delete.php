<?php
//1. POSTデータ取得
$id = $_GET["****"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("************************************");
$stmt->bindValue('****', $*****, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("*****.php");
}
?>
