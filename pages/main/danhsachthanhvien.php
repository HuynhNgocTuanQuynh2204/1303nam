<link rel="stylesheet" href="css/table.css">
<?php
$sql = "SELECT * FROM thanhvien 
ORDER BY id_tv DESC";
$qr = mysqli_query($mysqli, $sql);
?>

<body>
    <div class="main p-3">
        <div class="text-center">
            <div class="container" style="padding: 10px;">
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-6">
                        <form class="form-inline" action="index.php?quanly=timkiemtieuchi" method="POST">
                            <div class="input-group w-100">
                                <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên thành viên"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                                        kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="index.php?quanly=themthanhvien" class="btn btn-primary" style="margin-left: 1000px;">Thêm thành viên</a>
            <div class="header_fixed">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên thành viên</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($qr)) {
                    $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['tentv'] ?></td>
                            <td><a class="sua"
                                    href="index.php?quanly=suathanhvien&id=<?php echo $row['id_tv'] ?>">EDIT</a><br>
                            </td>
                            <td><a class="delete"
                                    href="index.php?quanly=xulythemthanhvien&id=<?php echo $row['id_tv'] ?>">DELETE</a><br>
                            </td>
                            
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>