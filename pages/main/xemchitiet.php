<link rel="stylesheet" href="css/table.css">
<?php
$task = $_GET['task'];
$sql = "SELECT * FROM congviec, thanhvien, tieuchi, luachon 
        WHERE congviec.PersonInCharge = thanhvien.id_tv 
        AND congviec.criteria = tieuchi.id_tieuchi 
        AND congviec.selection = luachon.id_luachon 
        AND congviec.task = '$task'";
$qr = mysqli_query($mysqli, $sql);

$sql_cv = "SELECT sum(score) FROM congviec,thanhvien WHERE congviec.PersonInCharge = thanhvien.id_tv AND congviec.task = '$task'";
$qr_cv = mysqli_query($mysqli, $sql_cv);
$row_cv = mysqli_fetch_array($qr_cv);
?>


<body>
    <div class="main p-3">
        <div class="text-center">
            <a href="index.php?quanly=themcongviec" class="btn btn-primary" style="margin-left: 1000px;">Tạo công việc</a>
            <div class="header_fixed">
                <h6 style="text-align: center;padding: 10px;">Tổng điểm: <?php echo $row_cv['sum(score)'];  ?></h6>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Criteria</th>
                            <th>Selection</th>
                            <th>Score</th>
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
                            <td><?php echo $row['criteria'] ?></td>
                            <td><?php echo $row['selection'] ?></td>
                            <td><?php echo $row['score'] ?></td>
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