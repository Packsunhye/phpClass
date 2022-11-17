<?php
    include "../connect/connect.php";

    // 받아올 값(POST 방식)
    $commentMsg = $_POST['msg'];
    $commentPass = $_POST['pass'];
    $commentID = $_POST['commentID'];

    $sql = "UPDATE myComment SET commentMsg = '{$commentMsg}', commentPass= '{$commentPass}' WHERE myCommentID = '{$commentID}'";
   
    // 데이터 가져옴
    $result = $connect -> query($sql);
    echo json_encode(array("info" => $commentID));
?>