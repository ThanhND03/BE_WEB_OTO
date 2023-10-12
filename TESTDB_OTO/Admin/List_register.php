<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/form_admin.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/phantrang_1.css">


    <title>ADMIN-Register</title>
</head>
<body>

    <?php
        session_start();
        if(!isset($_SESSION['username'])){
            header('location:../User/login.php');
        }
    ?>  

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
            <div class="container">
                <div class="form_table">
                    <!-- FORM SEARCH -->
                    <style>
                         /* SEARCH */
                            
                            form#search{
                                width: 100%;
                                margin: 0 auto;
                            }

                            input.txtsearch{
                                width: 85%;
                                height: 40px;
                                outline: none;
                                border: 1px solid #F05626;
                                box-shadow: 0 0 3px black;
                                border-radius: 5px;
                                cursor: pointer;
                                padding-left: 10px;
                            }

                            input.submit-search{
                                position: relative;
                                top: 2px;
                                width: 14%;
                                height: 40px;
                                margin-left: 5px;
                                background-color: #F05626;
                                border: none;
                                outline: none;
                                font-size: 20px;
                                font-weight: 600;
                                letter-spacing: 2px;
                                color: white;
                                border-radius: 5px;
                                box-shadow: 0 0 3px black;
                            }
                        /* END SEARCH */
                    </style>

                    <form action="" method="post" id="search">
                        <input type="text" name="txtsearch" class="txtsearch">
                        <input type="submit" name="search" value="Tìm Kiếm" class="submit-search">
                    </form>
                    <!-- END FORM SEARCH -->
                    
                    <?php
                        include('../User/control.php');
                        if(isset($_POST['search'])){
                            $noidung = $_POST['txtsearch'];
                            $sql = "SELECT * FROM `ni_register` WHERE username LIKE '%$noidung%'";
                            $result = mysqli_query($conn,$sql);
                            $count = mysqli_num_rows($result);
                            // if($count <= 0){
                            //     echo "<br>Không tìm thấy kết quả nào với từ khóa , <b>'$noidung'</br> ";
                            // }
                            //     // echo "Tìm thấy <b>$count</b> kết quả với từ khóa , <b>$noidung</br> ";
                        

                            if($noidung === ""){
                                echo "<br><b>Vui lòng nhập từ khóa vào thanh tìm kiếm !!!</b>";
                                if($count <= 0){
                                    echo "<br>Không tìm thấy kết quả nào với từ khóa , <b>'$noidung'</br> ";
                                }
                            }else{
                                echo "<br>Tìm thấy <b>$count</b> kết quả với từ khóa , <b>$noidung</br> ";

                                ?>
                                <!-- <div class="panel-body">
                                    <div class="table-responsive"> -->
                                        <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row["ID"] ?></td>
                                                <td><?php echo $row["username"] ?></td>
                                                <td><?php echo $row["phone"] ?></td>
                                                <td><?php echo $row["email"] ?></td>
                                                <td><?php echo $row["pass"] ?></td>
                                                <td><?php echo $row["role"] ?></td>
                                                <td><a href="delete_all.php?del_register=<?php echo $row['ID']?>"
                                                onclick=" return(confirm('Bạn có chắc muốn xóa')) ">
                                            <span class="glyphicon glyphicon-remove"></span></a>
                                            </td>
                                            </tr>
                                            <?php } ?>
                                            <!-- End foreach -->
                                        </tbody>
                                        </table>
                                    <a href="List_register.php">Quay Lại</a>
                                <?php   
                            }
                        }else{
                        require "search_reg.php";
                        }
                    ?>
                    <!-- END FORM --> 
                </div>
                <!-- END CLASS FORM -->
            </div>
            <!-- END CONTAINER -->
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
</body>
</html>