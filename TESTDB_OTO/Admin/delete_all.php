<?php 
    include('../User/control.php');
    $getdata = new data();
    if(isset($_GET['del_register']))
        $delete = $getdata ->delete_tt('ni_register', $_GET['del_register']);
    if($delete) echo "<script>alert('Bạn đã xóa Thành công!') 
                      window.location='../Admin/List_register.php';
                    </script>";

    if(isset($_GET['del_car']))
        $delete = $getdata ->delete_tt('ni_car', $_GET['del_car']);
    if($delete) echo "<script>alert('Bạn đã xóa Thành công!') 
                        window.location='../Admin/List Car_audit.php';
                    </script>";

    if(isset($_GET['del_product']))
        $delete = $getdata ->delete_tt('product', $_GET['del_product']);
    if($delete) echo "<script>alert('Bạn đã xóa Thành công!') 
                        window.location='../Admin/List_dangtin.php';
                    </script>";
    else{
           echo "<script>alert('Bạn xóa không Thành công!')</script>";
    }

?>