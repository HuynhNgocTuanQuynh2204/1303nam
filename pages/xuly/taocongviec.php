<?php
$task = $_POST['task'];
$criteria = $_POST['criteria'];
$selection = $_POST['selection'];
$thanhvien = $_POST['thanhvien'];

if(isset($_POST['taocongviec'])){
   $sql_cv = "SELECT * FROM congviec";
   $result_cv = mysqli_query($mysqli, $sql_cv);
    $row_cv = mysqli_fetch_array($result_cv);
    list($id_luachon, $score) = explode("||", $selection);
    $sql_tv = "SELECT * FROM thanhvien";
    $result_tv = mysqli_query($mysqli, $sql_tv);
    $row_tv = mysqli_fetch_array($result_tv);
    if($row_cv['task'] == $task && $row_cv['PersonInCharge'] == $thanhvien){
        $sql_insert = "INSERT INTO congviec(task, criteria, selection,score, PersonInCharge) VALUES ('$task', '$criteria', '$id_luachon','$score', '$thanhvien')";
        $result_insert = mysqli_query($mysqli, $sql_insert);
        echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php"; </script>';
    }else if($row_cv['task'] != $task && $row_cv['PersonInCharge'] != $thanhvien){
        $sql_insert = "INSERT INTO congviec(task, criteria, selection,score, PersonInCharge) VALUES ('$task', '$criteria', '$id_luachon','$score', '$thanhvien')";
        $result_insert = mysqli_query($mysqli, $sql_insert);
        echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php"; </script>';  
    }else if($row_cv['task'] == $task &&  $row_cv['PersonInCharge'] != $thanhvien){
        echo '<script type="text/javascript">alert("Công việc đã tồn tại");    window.location.href = "index.php"; </script>';
    }else if($row_cv['task'] != $task &&  $row_cv['PersonInCharge'] == $thanhvien){
        $sql_insert = "INSERT INTO congviec(task, criteria, selection,score, PersonInCharge) VALUES ('$task', '$criteria', '$id_luachon','$score', '$thanhvien')";
        $result_insert = mysqli_query($mysqli, $sql_insert);
        echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php"; </script>';  
    }
}




?>