<?php
  $tentv = $_POST['thanhvien'];
  
  if(isset($_POST['themthanhvien'])){
    $sql_them = "INSERT INTO thanhvien(tentv) VALUES ('$tentv')";
    $result = mysqli_query($mysqli, $sql_them);
    echo '<script type="text/javascript">alert("Thêm thông tin thành công");    window.location.href = "index.php?quanly=danhsachthanhvien"; </script>';
  }else if(isset($_POST['suathanhvien'])){
    $id =$_GET['id'];
    $sql_sua = "UPDATE thanhvien SET tentv = '$tentv' WHERE id_tv = '$id'";
    $result = mysqli_query($mysqli, $sql_sua);
    echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=danhsachthanhvien"; </script>';
  }else{
    $id =$_GET['id'];
    $sql_delete = "DELETE FROM thanhvien WHERE id_tv = '$id'";
    $result = mysqli_query($mysqli, $sql_delete);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=danhsachthanhvien"; </script>';
  }

?>