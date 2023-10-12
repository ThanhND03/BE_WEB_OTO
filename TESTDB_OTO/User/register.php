<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Register</title>
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
                                <h2>Đăng Ký</h2>
                                <hr width="100%">
                                <div class="input_button">
                                    <img src="img/facebook.png" alt="Facebook" >
                                    <input type="button" value="Đăng ký bằng Facebook" required>
                                </div>

                                <div class="input_button">
                                    <img src="img/google.png" alt="google">
                                    <input type="button" value="Đăng ký bằng Google" required>
                                </div>

                                <div class="text_note">
                                    <span><hr class="left"> Hoặc <hr class="right"></span>
                                </div>

                                <div class="input_box">
                                    <label for="username">Họ tên</label>
                                    <input type="text" id="username" name="username" >
                                    <!-- placeholder="Nhập số điện thoại ..." -->
                                </div>

                                <div class="input_box">
                                    <label for="SDT">Số điện thoại</label>
                                    <input type="text" id="SDT" name="SDT">
                                    <!-- placeholder="Nhập số điện thoại ..." -->
                                </div>

                                <div class="input_box">
                                    <label for="email">Email</label>
                                    <input type="email" id="email"  name="email">
                                    <!-- placeholder="Nhập số điện thoại ..." -->
                                </div>

                                <div class="input_box">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" id="password" name="password">
                                    <!-- placeholder="Nhập mật khẩu ..." -->
                                    <i class="fa-sharp fa-solid fa-eye-slash pw_hide"></i>
                                </div>

                                    <button class="button" name="btn-register" type="submit">Đăng Kí</button>

                                <div class="login_signup">
                                    Bạn đã có tài khoản ? <a href="login.php" id="login">Đăng Nhập</a>
                                </div> 

                                <?php
                                    include('control.php');
                                    if(isset($_POST['btn-register'])){
                                        $getdata = new data();
                                        if (empty($_POST['username']) || empty($_POST['SDT']) || empty($_POST['email']) || empty($_POST['password'])) {
                                            echo '<script>alert("Bạn chưa nhập đủ Thông tin")
                                                    
                                                  </script>';
                                        } else {
                                                $checkusername = $getdata -> select_username();
                                                foreach ($checkusername as $check) {
                                                    if($check['username'] == $_POST['username']) {
                                                        echo "<script>alert('Tài khoản đã tồn tại hãy chọn tài khoản khác')
                                                                    window.location='register.php';
                                                              </script>";
                                                        return;
                                                    }
                                                }
                                                $contact = $getdata->insert_tt(
                                                    $_POST['username'],
                                                    $_POST['SDT'],
                                                    $_POST['email'],
                                                    $_POST['password']
                                                );
                                                $name = $_POST['username'];
                                                if ($contact) {
                                                    echo "<script>alert('Cảm ơn bạn " . $name . " đã đăng ký thành công!')
                                                                  window.location='login.php';
                                                          </script>"; 
                                                } else {
                                                   echo "<script>alert('Tài khoản đã có vui lòng đăng ký lại!') </script>";
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
