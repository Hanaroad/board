<?php

include "./dbconnect.php";

$sql = "select * from board;";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

// 총 몇개의 행인지 
// echo mysqli_num_rows($result);

// 한 페이지당 5개 출력
$data_num = mysqli_num_rows($result);
$page_num = ceil($data_num / 5);