<div class="wrapper">
    <style>
    .wrapper {
        display: flex;
    }
    </style>
    <?php
        include("sidebar/sidebar.php")
        ?>

    <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='danhsachtieuchi'){
                include("main/danhsachtieuchi.php");
            }
            else if($tam =='themtieuchi'){
                include("main/themtieuchi.php");
            }

            else if($tam =='suatieuchi'){
                include("main/suatieuchi.php");
            }

            else if($tam =='timkiemtieuchi'){
                include("main/timkiemtieuchi.php");
            }

            else if($tam =='xulythemtieuchi'){
                include("xuly/xulythemtieuchi.php");
            }
            
            else if($tam =='themluachon'){
                include("main/themluachon.php");
            }

            else if($tam =='themcongviec'){
                include("main/themcongviec.php");
            }


            else if($tam =='danhsachluachon'){
                include("main/danhsachluachon.php");
            }

            else if($tam =='xulythemluachon'){
                include("xuly/xulythemluachon.php");
            }
            
            else if($tam =='sualuachon'){
                include("main/sualuachon.php");
            }

            else if($tam =='timkiemluachon'){
                include("main/timkiemluachon.php");
            }

            else if($tam =='themthanhvien'){
                include("main/themthanhvien.php");
            }

            else if($tam =='themcongviec'){
                include("main/themcongviec.php");
            }

            else if($tam =='danhsachcongviec'){
                include("main/danhsachcongviec.php");
            }

            else if($tam =='xemchitiet'){
                include("main/xemchitiet.php");
            }

            
            else if($tam =='timkiemthanhvien'){
                include("main/timkiemthanhvien.php");
            }
         

          

            else if($tam =='timkiemcongviec'){
                include("main/timkiemcongviec.php");
            }

            else if($tam =='doimatkhau'){
                include("main/doimatkhau.php");
            }

            else if($tam =='danhsachthanhvien'){
                include("main/danhsachthanhvien.php");
            }

            else if($tam =='suathanhvien'){
                include("main/suathanhvien.php");
            }


          
            else if($tam =='xulythemcongviec'){
                include("xuly/xulythemcongviec.php");
            }

            else if($tam =='taocongviec'){
                include("xuly/taocongviec.php");
            }

            else if($tam =='xulythemthanhvien'){
                include("xuly/xulythemthanhvien.php");
            }

            

          

            else if($tam =='suacongviec'){
                include("main/suacongviec.php");
            }

           

          
           
            
            else {
                include("main/index.php");
            }
          ?>
</div>