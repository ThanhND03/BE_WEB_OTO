<?php
include('../connect.php');

class data{
    //Hiểm thị dữ liệu phản hồi từ user
    function se_all($table){
        global $conn;
        $sql = "select * from $table";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    //Trang đăng ký user
    function insert_tt($username, $SDT, $email, $password){
        global $conn;
        $sql = "INSERT INTO ni_register (`username`,`phone`,`email`,`pass`)
            values('$username','$SDT','$email','$password')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

        //Trang đăng nhap user
        function insert_lg($username){
            global $conn;
            $sql = "INSERT INTO ni_login (`username`)
                values('$username')";
            $run = mysqli_query($conn, $sql);
            return $run;
        }
    

    //Lặp từ phần tử để so sáng giá trị trong data và giá trị nhập vào 
    function select_username(){
        global $conn;
        $sql = "SELECT * FROM ni_register";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

        //Trang đăng nhập 
        function select_passcp($username, $password){
            global $conn;
            $sql = "SELECT * FROM ni_register WHERE username = '$username' AND pass = '$password'";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

        // phân quyền admin

        
        // end phân quyền admin
    

    //Trang đăng nhập 
    function select_pass($SDT, $password){
        global $conn;
        $sql = "SELECT * FROM ni_register WHERE phone = '$SDT' AND pass = '$password'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    

    //Cập nhận lại mật khẩu 
    function forget_update($newpass,$email){
        global $conn;
        $sql = "UPDATE ni_register SET Pass ='$newpass' WHERE Email ='$email'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    //Đăng xuất    //error
    function logout($username){
        global $conn;
        $sql = "SELECT * FROM ni_register WHERE Username = '$username'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //Nhập sản phẩm
    function in_car($username,$phone,$khuvuc,$tenxe,$date,$note){
        global $conn;
        $sql = "INSERT INTO ni_car (username, phone, khuvuc, tenxe, dateshow, note)
        values('$username','$phone','$khuvuc','$tenxe','$date','$note')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    //Hiểm thị product
    function se_car($table){
        global $conn;
        $sql = "SELECT * FROM $table";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
        //Hiểm thị product
        function see_id_car($table,$id){
            global $conn;
            $sql = "SELECT * FROM $table WHERE ID = $id";
            $run = mysqli_query($conn, $sql);
            return $run;
        }

    //Nhập sản phẩm
    function in_product($khuvuc,$tinhtrang,$txtpicture,$hangsx,$dongxe,$namesx,$phienban,$sokmdadi,$hopso,$dandong,$nhienlieu,$giaban,$title_tin,$title_tin_ct){
        global $conn;
        $sql = "INSERT INTO product (khuvuc, tinhtrang, txtpicture, hangsx, dongxe, namsx, phienban, sokmdadi, hopso, dandong, nhienlieu, giaban, tieudetin, motachitiet)
        values('$khuvuc','$tinhtrang','$txtpicture','$hangsx','$dongxe','$namesx','$phienban','$sokmdadi','$hopso','$dandong','$nhienlieu','$giaban','$title_tin','$title_tin_ct')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    //Hiểm thị product
    function se_product($table){
        global $conn;
        $sql = "SELECT * FROM $table";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    //Hiểm thị product
    function see_id($table,$id){
        global $conn;
        $sql = "SELECT * FROM $table WHERE ID = $id";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //Xóa item
    function delete_tt($table,  $id){
        global $conn;
        $sql = "DELETE FROM $table WHERE ID = $id";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
        
    
     // Sửa registerr
     function update_reg($username, $SDT, $email, $password,$id){
        global $conn;
        $update_reg = "UPDATE ni_register SET username = '$username', phone = '$SDT', email = '$email', pass = '$password' WHERE ID = $id";
        $run = mysqli_query($conn, $update_reg);
        return $run;
    }

    // Sửa registerr
    function update_car($username,$phone,$khuvuc,$tenxe,$date,$note,$id){
        global $conn;
        $update_car = "UPDATE ni_car SET username = '$username', phone = '$phone', khuvuc = '$khuvuc', tenxe = '$tenxe', dateshow = '$date', note = '$note' WHERE ID = $id";
        $run = mysqli_query($conn, $update_car);
        return $run;
    }

    function update_dangtin($tinhtrang,$txtpicture,$hangsx,$dongxe,$namsx,$phienban,$sokmdadi,$hopso,$giaban,$title_tin,$title_tin_ct,$id){
        global $conn;
        $update_dangtin = "UPDATE product SET tinhtrang = '$tinhtrang', txtpicture = '$txtpicture', hangsx = '$hangsx', dongxe = '$dongxe', 
        namsx = '$namsx', phienban = '$phienban', sokmdadi = '$sokmdadi', hopso = '$hopso', giaban = '$giaban',tieudetin = '$title_tin',
        motachitiet = '$title_tin_ct'  WHERE ID = $id";
        
        $run = mysqli_query($conn, $update_dangtin);
        return $run;
    }

}
?>