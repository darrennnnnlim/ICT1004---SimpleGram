<?php

// require_once ("db.php");
$config = parse_ini_file('../../../private/dbconfig.ini');
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
// $date = date('Y-m-d H:i:s');

$sql = "INSERT INTO comment(image_id,comment,commenter_id) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    $result = mysqli_error($conn);
}
echo $result;



?>