<div class="main p-3">
    <div class="text-center">
        <section class="container my-2 bg-secondary w-50 text-light p-2">
        <h6 style="text-align: center; text-transform: uppercase; font-weight: bold;">Thêm thành viên</h6>
            <form class="row g-3 p-3" method="POST" action="index.php?quanly=xulythemthanhvien" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Họ và tên thành viên</label>
                    <input type="text" class="form-control" id="validationDefault01" name="thanhvien" placeholder="Họ và tên"
                        required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="themthanhvien">Thêm thành viên</button>
                </div>
            </form>
        </section>
    </div>
</div>