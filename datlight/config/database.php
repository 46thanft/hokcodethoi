<?php
session_start();
require_once __DIR__."/function.php";

//config database
$server = 'localhost';
$user = 'lequocan_hi';
$pass = 'lequocan_hi';
$db = 'lequocan_hi';
$error = 'Máy chủ bảo trì...';
$datngulon = date("Y-m-d H:i:s");
//tiến hành connect
$connect = mysqli_connect($server, $user, $pass, $db);

//thiết lập database uft-8
mysqli_query($connect,"SET NAMES 'UTF8'");

//get thông tin user

	


date_default_timezone_set('Asia/Ho_Chi_Minh');
$time = date('d/m/Y - H:i:s');


?>
