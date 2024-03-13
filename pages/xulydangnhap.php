<?php
  include("../config/config.php");
  session_start();
  if(isset($_POST['dangnhap'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM quanly WHERE taikhoan = '$taikhoan' AND matkhau = '$matkhau'";
    $result = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($result) > 0 ){
        if(mysqli_num_rows($result) > 0 ){
            $row = mysqli_fetch_array($result);
            $_SESSION['tenql'] = $row['tenql'];
            $_SESSION['taikhoan'] = $row['taikhoan'];
            $_SESSION['id_ql'] = $row['id_ql']; 
            $_SESSION['vaitro'] = $row['vaitro'];
        }
    }
  }
?>
<script>
    if("<?php echo isset($_SESSION['id_ql']); ?>" === "1"){
        alert("Đăng nhập thành công");
        window.location.href = "../index.php"; 
    }else{
        alert("Đăng nhập thất bại");
        window.location.href = "../dangnhap.php"; 
    }
</script>

