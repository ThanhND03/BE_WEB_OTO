<?php
    require "../connect.php";
    // require "connect_update.php";
    $id = $_GET['ID'];
    global $conn;

    $sql = "SELECT * FROM ni_register WHERE ID = '$id' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/form_admin.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/phantrang.css">
    <link rel="stylesheet" href="assets/css/reg_update_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>EDIT-Register</title>
</head>
<body>

    <section id="wrapper">
        <setion id="header">
            <div class="container">
                <!-- NAV -->
                <nav>
                    <!-- LOGO -->
                    <div class="logo">
                        <img src="../User/img/logo_white_117_32.png" alt="logo" >
                    </div>
                    <!-- END LOGO -->
                    <!-- MENU -->
                    <ul id="menu_bar">
                    <li><a href="Admin.php">Trang Chủ</a></li>
                        <li><a href="#">Trang Quản Lý</a>
                            <ul class="menu_bar_2">
                                <li><a href="List_register.php">Tài Khoản</a></li>
                                <li><a href="List Car_audit.php">Kiểm Tra Xe</a></li>
                                <li><a href="List_dangtin.php">Đăng Tin</a></li>
                                <li><a href="#">Quản Lý.....</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Trang Lỗi</a></li>
                        <li><a href="../User/login.php"><i class="fa-solid fa-right-to-bracket"></i>Login Page</a></li>
                    </ul>
                    <!-- END MENU -->
                </nav>
                <!-- END NAV -->
            </div>
        </setion>
        <!-- END HEADER -->
        <setion id="wp-content">
                <div class="form_container">
                    <form  method="post">
                        <input type="hidden" name="sid" value="<?php echo $id?>">
                        <h2>Sửa Đăng Ký</h2>
                        <hr width="100%" >
                        <div class="input_box">
                            <label for="username">Họ tên</label>
                            <input type="text" id="username" name="username" value=" <?php echo $row['username']?> ">
                            <!-- placeholder="Nhập số điện thoại ..." -->
                        </div>

                        <div class="input_box">
                            <label for="SDT">Số điện thoại</label>
                            <input type="text" id="SDT" name="SDT" value="<?php echo $row['phone']?>">
                            <!-- placeholder="Nhập số điện thoại ..." -->
                        </div>

                        <div class="input_box">
                            <label for="email">Email</label>
                            <input type="email" id="email"  name="email" value="<?php echo $row['email']?>">
                            <!-- placeholder="Nhập số điện thoại ..." -->
                        </div>

                        <div class="input_box">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" value="<?php echo $row['pass']?>">
                            <!-- placeholder="Nhập mật khẩu ..." -->
                            <i class="fa-sharp fa-solid fa-eye-slash pw_hide"></i>
                        </div>

                            <button class="button" name="btn-edit_reg" type="submit">Sửa</button>

                    </form>
                       
                    <?php
                        require "../User/control.php";

                        $getdata = new data();

                        if (isset($_POST['btn-edit_reg'])) {
                        if (empty($_POST['username']) || empty($_POST['password'] || empty($_POST['SDT']))) {
                            echo '<script>alert("Bạn chưa nhập đủ Thông tin")</script>';
                        } else {
                            
                            $update_reg = $getdata->update_reg(
                                $_POST['username'],
                                $_POST['SDT'],
                                $_POST['email'],
                                $_POST['password'],
                                $id
                            );
                            if ($update_reg) {
                                echo '<script>alert("Sửa thành công" )</script>';
                                    echo '<script>
                                                window.location = "List_register.php";
                                            </script>';
                                } else {
                                echo '<script>alert("Sửa thất bại ! Xem lại code đi cu")</script>';
                            }
                        }
                    }
                    ?>

                </div>
        </setion>
        <!-- END WP-CONTENT -->
        <!-- FOOTER -->
        <setion id="footer">
            <div class="container">
                <div class="container_footer">
                    <div><img src="img/logo_white_117_32.png" alt=""></div>
                    <div class="flex-footer">
                            <ul class="text">
                                <li>©2022 by ChoXe.net. Công Ty Cổ Phần Ô Tô Xuyên Việt;<br> Mã số thuế: 099999999</li><br>
                                <li>Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ,<br> phường Tân Phong, Quận 7, TPHCM</li><br>
                                <li style="display: flex;justify-content: space-between;">
                                    <div><a href="#"><img src="assets/img/phone_white_14_14.png" alt="phone">&nbsp;&nbsp;092.345.6789</a></div>
                                    <div><a href="#"><img src="assets/img/email_white_14_10.png" alt="email">&nbsp;&nbsp;cskh_ChoXe@gmail.com.vn</a></div>
                                </li>
                            </ul>

                            <ul class="text_2">
                                <li><a href="#">GIỚI THIỆU</a></li><br><br>
                                <li><a href="#">QUY CHẾ HOẠT ĐỘNG</a></li><br><br>
                                <li><a href="#">BÁO GIÁ</a></li>
                            </ul>

                            <ul class="text_3">
                                <li><a href="#">
                                    <div class="button_1">
                                        <img src="assets/img/phone_red_16_16.png" alt="phone-red">
                                        <span class="hover">&nbspHotline: 092.345.6789</span>
                                    </div>
                                </a></li><br><br>
                                <li><a href="#">
                                    <div class="button_2">
                                        <img src="assets/img/agent_18_16.png" alt="agent">
                                        <span>&nbspDành cho Salon, môi giới</span>
                                    </div>
                                    
                                </a></li>
                            </ul>
                    </div>
                    <div><img src="assets/img/logo-bct.png" alt=""></div>
                </div>
            </div>
        </setion>
        <!-- END FOOTER -->
    </section>
    <script>
        const  pwShowHide = document.querySelectorAll(".pw_hide");

        pwShowHide.forEach((icon) => {
            icon.addEventListener("click", () => {
                let getPwInput = icon.parentElement.querySelector("input");
                if(getPwInput.type === "password") {
                    getPwInput.type = "text";
                    icon.classList.replace("fa-eye-slash","fa-eye");
                }else{
                    getPwInput.type = "password";
                    icon.classList.replace("fa-eye", "fa-eye-slash");
                }
            });
        });

    </script>
</body>
</html>