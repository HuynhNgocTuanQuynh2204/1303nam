<?php
  $sql = "SELECT * FROM thanhvien WHERE id_tv = '$_GET[id]'";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
?>
<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Sửa thành viên</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemthanhvien&id=
            <?php echo $row['id_tv'] ?>" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Họ và tên thành viên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="thanhvien" placeholder="Họ và tên"
                        value="<?php echo $row['tentv'] ?>">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="suathanhvien">Sửa thành viên</button>
                </div>
            </form>
        </section>
    </div>
</div>