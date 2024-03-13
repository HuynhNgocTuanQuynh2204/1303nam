<?php
  $Selection = $_POST['selection'];
  $Score = $_POST['score'];
  $Criteria = $_POST['criteria'];
  if(isset($_POST['themluachon'])){
    $Selection = $_POST['selection'];
    $Score = $_POST['score'];
    $Criteria = $_POST['criteria'];
    
    // Phân tách giá trị của criteria thành hai biến
    list($id_tieuchi, $criteria) = explode("||", $Criteria);
    
    // Tiếp tục thực hiện các thao tác với biến $id_tieuchi và $criteria như bạn muốn
    // Sau đó, thêm vào bảng luachon
    $sql_them = "INSERT INTO luachon(selection, score, criteria, id_tieuchi) VALUES ('$Selection', '$Score', '$criteria', '$id_tieuchi')";
    $result = mysqli_query($mysqli, $sql_them);
    
    echo '<script type="text/javascript">alert("Thêm thông tin thành công"); window.location.href = "index.php?quanly=danhsachluachon"; </script>';
}
else if(isset($_POST['sualuachon'])){
  $id = $_GET['id'];
  $Selection = $_POST['selection'];
  $Score = $_POST['score'];
  $Criteria = $_POST['criteria'];
  
  // Phân tách giá trị của criteria thành hai biến
  list($id_tieuchi, $criteria_value) = explode("||", $Criteria);
  
  // Tiếp tục thực hiện các thao tác với biến $id_tieuchi và $criteria_value
  // Sau đó, thực hiện câu lệnh UPDATE
  $sql_sua = "UPDATE luachon SET selection = '$Selection', score = '$Score', criteria = '$criteria_value', id_tieuchi = '$id_tieuchi' WHERE id_luachon = '$id'";
  $result = mysqli_query($mysqli, $sql_sua);
  echo '<script type="text/javascript">alert("Sửa thông tin thành công");    window.location.href = "index.php?quanly=danhsachluachon"; </script>';
}
else {
    $id =$_GET['id'];
    $sql_delete = "DELETE FROM luachon WHERE id_luachon = '$id'";
    $result = mysqli_query($mysqli, $sql_delete);
    echo '<script type="text/javascript">alert("Xóa thông tin thành công");    window.location.href = "index.php?quanly=danhsachluachon"; </script>';
  }
?>