<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Login</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div class="logo">
                <img src="img/logo_white_117_32.png" alt="logo">
            </div>
            <div class="container">
                    <div class="form_container">
                        <div class="form login_form">
                            <form  method="post">
                                <h2>Đăng Nhập</h2>
                                <hr width="100%">

                                <div class="input_button">
                                    <img src="img/facebook.png" alt="facebook">
                                    <input type="button" value="Đăng nhập bằng Facebook" required>
                                </div>

                                <div class="input_button">
                                    <img src="img/google.png" alt="google" >
                                    <input type="button" value="Đăng nhập bằng Google" required>
                                </div>

                                <div class="text_note">
                                    <span>Hoặc đăng nhập bằng tài khoản Chợ xe</span>
                                </div>

                                <div class="input_box">
                                <label for="username">Họ tên</label>
                                    <input type="text" id="username" name="username" >
                                    <!-- placeholder="Nhập số điện thoại ..." -->
                                </div>

                                <div class="input_box">
                                    <label for="pass">Mật khẩu</label>
                                    <input type="password" id="pass"  name="password">
                                    <!-- placeholder="Nhập mật khẩu ..." -->
                                    <i class="fa-sharp fa-solid fa-eye-slash pw_hide"></i>
                                </div>

                                <div class="option_field">
                                    <span class="checkbox">
                                        <input type="checkbox" id="check"> 
                                        <label for="check">Lưu mật khẩu</label>
                                    </span>
                                    <a href="#" class="forgot_pw">Quên mật khẩu</a>
                                </div>

                                    <button class="button" type="submit" name="btn-login-copy">Đăng Nhập</button>

                                <div class="login_signup">
                                    Bạn chưa có tài khoản ? <a href="register.php">Đăng Ký</a>
                                </div> 

                                
                                <?php 
                                        include('control.php');
                                        require "../connect.php";
                                        
                                        session_start();
                                        if(isset($_SESSION['username'])){
                                            header('location:index_1.php');
                                        }
                                        elseif(isset($_SESSION['username']))
                                        {
                                            header('location:../Admin/Admin.php');
                                        }

                                        if(isset($_POST['btn-login-copy'])){
                                            $getdata = new data();
                                            $contact = $getdata->select_passcp(
                                            $_POST['username'],
                                            $_POST['password']
                                        );  
                                            
                                        $row = mysqli_fetch_assoc($contact); //sẽ tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp.
                                        if (empty($_POST['username']) || empty($_POST['password'])) {
                                            echo '<script>alert("Bạn chưa nhập mật khẩu or tên tài khoản")</script>';
                                        }else{
                                        
                                                if(mysqli_num_rows($contact) > 0){ 

                                                    if($row['role'] == 'User')
                                                    {
                                                        // echo "user";
                                                        $_SESSION['username'] = $username;

                                                        header('location:index_1.php');
                                                    }elseif($row['role'] == 'admin')
                                                    {
                                                        $_SESSION['username'] = $username;

                                                        header('location:../Admin/Admin.php');
                                                    }
                                                    }else{
                                                    echo "<script>alert('Sai tài khoản hoặc mật khẩu !!!')</script>";
                                                }
                                            }            
                                        }
                                    ?>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end wp-content -->
        <div id="footer">
            <div class="container-footer">
                <div><img src="img/logo_white_117_32.png" alt=""></div>
                <div class="flex-footer">
                        <ul class="text">
                            <li>©2022 by ChoXe.net. Công Ty Cổ Phần Ô Tô Xuyên Việt;<br> Mã số thuế: 099999999</li><br>
                            <li>Lầu 1, B5-B6 Khu Kim Sơn - Đường Nguyễn Hữu Thọ,<br> phường Tân Phong, Quận 7, TPHCM</li><br>
                            <li style="display: flex;justify-content: space-between;">
                                <div><a href="#"><img src="img/phone_white_14_14.png" alt="phone">&nbsp;&nbsp;092.345.6789</a></div>
                                <div><a href="#"><img src="img/email_white_14_10.png" alt="email">&nbsp;&nbsp;cskh_ChoXe@gmail.com.vn</a></div>
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
                                    <img src="img/phone_red_16_16.png" alt="phone-red">
                                    <span class="hover">&nbspHotline: 092.345.6789</span>
                               </div>
                            </a></li><br><br>
                            <li><a href="#">
                                <div class="button_2">
                                    <img src="img/agent_18_16.png" alt="agent">
                                    <span>&nbspDành cho Salon, môi giới</span>
                                </div>
                                
                            </a></li>
                        </ul>
                </div>
                <div><img src="img/logo-bct.png" alt=""></div>
            </div>
        </div>
        <!-- end footer -->
    </div>
<script src="script/index.js"></script>
<script src="script/Accordion.js"></script>
</body>
</html>
