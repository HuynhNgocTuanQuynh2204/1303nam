<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
            <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Tạo công việc</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=taocongviec"
                enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Task</label>
                    <input type="text" class="form-control" id="validationDefault01" name="task"
                        placeholder="Task name" required>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Criteria</label>
                    <select id="inputState" class="form-select" name="criteria">
                        <?php
                            $sql_tieuchi ="SELECT * FROM tieuchi ORDER BY id_tieuchi DESC";
                            $query_tieuchi = mysqli_query($mysqli,$sql_tieuchi);
                            while($row_tieuchi = mysqli_fetch_array($query_tieuchi)){
                        ?>
                        <option value="<?php echo $row_tieuchi['id_tieuchi'] ?>">
                            <?php echo $row_tieuchi['criteria'] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Selection</label>
                    <select id="inputState" class="form-select" name="selection">
                        <?php
                            $sql_luachon ="SELECT * FROM luachon ORDER BY id_luachon DESC";
                            $query_luachon = mysqli_query($mysqli,$sql_luachon);
                            while($row_luachon = mysqli_fetch_array($query_luachon)){
                        ?>
                        <option value="<?php echo $row_luachon['id_luachon'] . "||" . $row_luachon['score'];?>">
                            <?php echo $row_luachon['selection'] ?> <p>my</p>  <?php echo $row_luachon['criteria'] ?> </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Person In Charge </label>
                    <select id="inputState" class="form-select" name="thanhvien">
                        <?php
                            $sql_thanhvien ="SELECT * FROM thanhvien ORDER BY id_tv DESC";
                            $query_thanhvien = mysqli_query($mysqli,$sql_thanhvien);
                            while($row_thanhvien = mysqli_fetch_array($query_thanhvien)){
                        ?>
                        <option value="<?php echo $row_thanhvien['id_tv'] ?>">
                            <?php echo $row_thanhvien['tentv'] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="taocongviec">Tạo công việc</button>
                </div>
            </form>
        </section>
    </div>
</div>