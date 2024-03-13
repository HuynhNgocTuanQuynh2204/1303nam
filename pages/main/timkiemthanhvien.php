<div class="main p-3">
    <div class="text-center">
        <?php
                        if(isset($_SESSION['id_ql'])){
                        ?>
        <h1>
            Xin chào: <?php echo $_SESSION['tenql'] ?>
        </h1>
        <?php
                        }
                        ?>
        <?php
                        if(isset($_SESSION['id_sv'])){
                        ?>
        <h1>
            Xin chào: <?php echo $_SESSION['tensv'] ?>
        </h1>
        <?php
                        }
                        ?>
        <?php
                        if(isset($_SESSION['id_gv'])){
                        ?>
        <h1>
            Xin chào: <?php echo $_SESSION['tengv'] ?>
        </h1>
        <?php
                        }
                        ?>
        <link rel="stylesheet" href="css/table.css">
        <?php
        if(isset($_POST['timkiem'])){
           $tukhoa = $_POST['tukhoa'];
       } else{
           $tukhoa = '';
       }
       
$sql = "SELECT congviec.task, thanhvien.tentv, SUM(congviec.score) AS Total_score 
        FROM congviec, thanhvien, tieuchi, luachon 
        WHERE congviec.PersonInCharge = thanhvien.id_tv 
        AND congviec.criteria = tieuchi.id_tieuchi 
        AND congviec.selection = luachon.id_luachon 
        AND thanhvien.tentv LIKE '%" . $tukhoa . "%'
        GROUP BY congviec.task, thanhvien.tentv";
$qr = mysqli_query($mysqli, $sql);
?>



        <body>
            <div class="main p-3">
                <div class="text-center">
                    <div class="container" style="padding: 10px;">
                        <div class="row justify-content-center mt-2">
                            <div class="col-lg-6">
                                <form class="form-inline" action="index.php?quanly=timkiemthanhvien" method="POST">
                                    <div class="input-group w-100">
                                        <input type="search" name="tukhoa" class="form-control"
                                            placeholder="Nhập tên thành viên" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                                                kiếm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="index.php?quanly=themcongviec" class="btn btn-primary" style="margin-left: 1000px;">Tạo
                        công việc</a>
                    <div class="header_fixed">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Task</th>
                                    <th>Person In Charge</th>
                                    <th>Total score</th>
                                    <th>Chi tiết</th>
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
                                    <td><?php echo $row['task'] ?></td>
                                    <td><?php echo $row['tentv'] ?></td>
                                    <td><?php echo $row['Total_score'] ?></td>
                                    <td><a class="sua"
                                            href="index.php?quanly=xemchitiet&task=<?php echo $row['task'] ?>">Xem</a><br>
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
    </div>
</div>