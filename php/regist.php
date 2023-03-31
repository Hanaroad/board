<? 
header('Content-Type: text/html; charset = UTF-8');

include "./dbconnect.php";

extract($_POST);
extract($_GET);

$now = date("Y-m-d H:i:s");

$sql = "select idx from board where id='".$id."'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if($idx > 0) {
    $sql = "select * from board where idx=".$idx;
    $result = mysqli_query($conn, $sql);
    $old = mysqli_fetch_object($result);
}

if($idx != "") {
    $sql = "update board set title='".$title."', content='".$content."', id='".$id."', date='".$now."' where idx=".$idx;
} else {
    $sql = "insert into board (title,content,id,date) values ('$title', '$content', '$id', '$now')";
}

mysqli_query($conn, $sql) or die (mysqli_error($conn));