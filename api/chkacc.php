<?php include_once "../base.php";

//接收前端傳送過來的帳號
$acc=$_POST['acc'];

//檢查資料庫中是否有這筆帳號資料
$chk=nums("user",["acc"=>$acc]);

//回傳檢查狀態
if($chk>0){
    echo 1;
}else{
    echo 0;
}


?>