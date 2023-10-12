<?php
    require "../connect.php";
    // require "connect_update.php";
    $id = $_GET['ID'];
    global $conn;

    $sql = "SELECT * FROM product WHERE ID = '$id' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/form_admin.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/css/phantrang.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/reg_update_1.css"> -->
    <link rel="stylesheet" href="assets/css/dangtin_update.css">
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
                <form action="#" method="post" class="form_dangtin" enctype="multipart/form-data"> 
                    <h1>Sửa Đăng Tin</h1>
                    <hr>
                    <!-- <div class="input_select">
                        <label for="tinh">Khu vực xem xe <span style="color: red;">*</span></label>
                        <br>
                        <select name="khuvuc" id="tinh">
                            <option selected disabled >Chọn tỉnh thành phố</option>
                            <option value="Bắc Ninh">Bắc Ninh</option>
                            <option value="Bắc Giang">Bắc Giang</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hà Nam">Hà Nam</option>
                            <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
                            <option value="Vũng Tàu">Vũng Tàu</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Hạ Long">Hạ Long</option>
                            <option value="Thái Nguyên">Thái Nguyên</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                        </select>
                        <div class="icon_select">
                            <img src="img/down-filled-triangular-arrow.png" alt="" width="15px" style="position: relative;top: -20px;left: 98%;"> 
                        </div>
                    </div> -->

                    <div class="form_input_chung">
                        <label for="radio_tile_group_4">Tình trạng<span style="color: red;">*</span></label>
                        <div class="radio_tile_group" id="radio_tile_group_4">

                            <div class="input_container_2">
                                <input type="radio" id="cu" name="tinhtrang" value="Xe Cũ" <?php if($row['tinhtrang'] == "Xe Cũ") echo 'checked'; ?>>
                                <div class="radio_tile">
                                    
                                    <label for="cu">Xe cũ</label>
                                </div>
                            </div>

                            <div class="input_container_2">
                                <input type="radio" id="moi" name="tinhtrang" value="Xe Mới" <?php if($row['tinhtrang'] == "Xe Mới") echo 'checked'; ?>>
                                <div class="radio_tile">
                                    
                                    <label for="moi">Xe mới</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form_input_chung">
                        <label for="">Ảnh xe<span style="color: red;">*</span></label>
                        <div class="huongdan">
                            <li>Đăng ít nhất 3 ảnh</li>
                            <li>Ảnh đầu tiên sẽ là ảnh đại diện cho tin đăng</li>
                            <p>Chụp hình đầy đủ và chi tiết sẽ gây ấn tượng tốt với người xem tin : ngoại thất ( mặt trước, mặt sau, hai bên ),
                                nội thất ( khoang lái, hàng ghế trước, hàng ghế sau ),khoang máy.
                                <br><a href="#">Tham khảo hình mẫu</a>     
                            </p>
                        </div>
                        <div class="push_picture">          
                            <div class="upload">
                                <div class="image">
                                <img src="../User/img/uploads/<?php echo $row["txtpicture"]; ?>
                                    "  alt="
                                <?php echo $row["txtpicture"]; ?> " id="img_1" >

                                <img  alt="" id="img_2">

                                <img  alt="" id="img_3">        
                                </div>
                                <div class="content">
                                    <div class="icon"><i class="fa-solid fa-cloud-arrow-up"></i></i></div>
                                    <div class="text">Không có file gì </div>
                                </div>
                                <div id="cancel-btn"><i class="fa-solid fa-xmark"></i></div>
                                <div class="file-name">Tên tập tin ở đây</div>
                            </div>
                            <input  type="file" id="default-btn" name="hinhanh" hidden multiple="multiple" value="<?php echo $row['txtpicture'] ?>">
                            <div class="icon_2"><i class="fa-solid fa-camera"></i></div>
                            <button onclick="defaultBtnActive()" type="button"  id="custom-btn">Bấm để chọn ảnh cần tải</button>
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Hãng sản xuất<span style="color: red;">*</span></label>
                            <input type="text" name="hangsx" value="<?php echo $row['hangsx'] ?>" >
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Dòng xe<span style="color: red;">*</span></label>
                            <input type="text" name="dongxe" value="<?php echo $row['dongxe'] ?>">
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Năm sản xuất<span style="color: red;">*</span></label>
                            <input type="text" name="namsx" value="<?php echo $row['namsx'] ?>">
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Phiên bản<span style="color: red;">*</span></label>
                            <input type="text" name="phienban" value="<?php echo $row['phienban'] ?>">
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box">
                            <label for="text">Số km đã đi<span style="color: red;">*</span></label>
                            <input type="number" name="sokmdadi" value="<?php echo $row['sokmdadi'] ?>"> <span style="position: relative;top: -30px;left: 750px;color: #81808095;">Km</span>
                        </div>
                    </div>

                    <div class="form_input_chung">
                            <label for="radio_tile_group">Hộp số<span style="color: red;">*</span></label>
                        <div class="radio_tile_group" id="radio_tile_group">

                            <div class="input_container">
                                <input type="radio" id="tudong" name="hopso" value="Tự Động" <?php if($row['hopso'] == "Tự Động") echo 'checked'; ?>>
                                <div class="radio_tile">
                                    
                                    <label for="tudong">Tự Động</label>
                                </div>
                            </div>

                            <div class="input_container">
                                <input type="radio" id="sosan" name="hopso" value="Số Sàn" <?php if($row['hopso'] == "Số Sàn") echo 'checked'; ?>>
                                <div class="radio_tile">
                                    
                                    <label for="sosan">Số Sàn</label>
                                </div>
                            </div>

                            <div class="input_container">
                                <input type="radio" id="bantudong" name="hopso" value="Bán Tự Động" <?php if($row['hopso'] == "Bán Tự Động") echo 'checked'; ?>> 
                                <div class="radio_tile">
                                    
                                    <label for="bantudong">Bán Tự Động</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form_input_chung">
                            <div class="input_box">
                                <label for="text">Giá bán<span style="color: red;">*</span></label>
                                <input type="number" name="giaban" value="<?php echo $row['giaban'] ?>"><span style="position: relative;top: -30px;left: 740px;color: #81808095;">VND</span>
                            </div>
                    </div>

                    <div class="form_input_chung">
                        <label for="text">Tiêu đề của tin<span style="color: red;">*</span></label>
                        <div class="input_box_title_tin">
                            <p>Tiêu đề tin cần các thông tin quan trọng nhất để nâng cao hiệu quả tìm kiếm :
                                hãng xe, dòng xe, phiên bản, năm sản xuất, số tự động / số sàn, số km đã đi,...và các đặc tính nổi bật khác.
                            </p>
                            <span style="color:#6d6b6bef;">Ví dụ:</span><b>Toyota Fortuner 2.8V 4x4 AT2019, máy dầu, đã đi 40.000km, nhập khẩu, màu đen...</b>
                        </div>
                        <div class="input_box_tin">
                            <label for="title_tin">Tiêu đề của tin<span style="color: red;">*</span></label>
                            <textarea name="title_tin" id="title_tin" cols="105" rows="5"><?php echo $row['tieudetin'] ?></textarea>
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <div class="input_box_tin">
                            <label for="title_tin">Mô tả chi tiết<span style="color: red;">*</span></label>
                            <textarea name="title_tin_ct" id="title_tin" cols="105" rows="5" 
                            placeholder="Nhập mô tả chi tiểt về xe đăng bán
                            - Tình trạng chiếc xe
                            - Thời gian sử dụng xe
                            - Bảo trì xe bao lâu/lần, Ở đâu
                            - Tình trạng giấy tờ"><?php echo $row['motachitiet'] ?></textarea>
                        </div>
                    </div>

                    <div class="form_input_chung">
                        <button type="submit" name="btn_edit_dangtin">Sửa Đăng tin</button>
                    </div>

                </form>
                       
                    <?php
                        require "../User/control.php";

                        $getdata = new data();

                        if (isset($_POST['btn_edit_dangtin'])) {
                            $getdata = new data();
                            if ( empty($_POST['tinhtrang'] || empty($_POST['giaban']))) {
                                echo '<script>alert("Bạn chưa nhập đủ Thông tin")</script>';
                            } else {

                                if(empty($_FILES['hinhanh']['tmp_name'])) $picture = $row['txtpicture']; //lấy ảnh cũ
                                else{   
                                        $picture = $_FILES['hinhanh']['tmp_name'];
                                }

                                move_uploaded_file($_FILES['hinhanh']['tmp_name'],'./img/uploads/'.$_FILES['hinhanh']['name']);

                                $update_dangtin = $getdata->update_dangtin(
                                    // $_POST['khuvuc'],
                                    $_POST['tinhtrang'],
                                    $_FILES['hinhanh']['name'],
                                    $_POST['hangsx'],
                                    $_POST['dongxe'],
                                    $_POST['namsx'],
                                    $_POST['phienban'],
                                    $_POST['sokmdadi'],
                                    $_POST['hopso'],
                                    // $_POST['dandong'],
                                    // $_POST['nhienlieu'],
                                    $_POST['giaban'],
                                    $_POST['title_tin'],
                                    $_POST['title_tin_ct'],
                                    $id
                                );
                                // $name = $_POST['username'];
                                if ($update_dangtin) {
                                    echo '<script>alert("Bạn đăng tin Thành Công")</script>';
                                    echo '<script>
                                            window.location = "List_dangtin.php";
                                          </script>';
                                    } else {
                                    echo '<script>alert("Bạn đăng tin Thất Bại")</script>';
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

    <script src="assets/js/uploads_dangtin.js"></script>
</body>
</html>