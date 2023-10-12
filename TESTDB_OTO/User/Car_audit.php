<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Car_Audit_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Car Audit</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    ?>  
    <!-- end form  -->
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <nav>
                    <ul class="menu-top">
                        <li><a href="index_1.php">
                            <img src="img/logo_white_117_32.png" alt="">
                        </a></li>
                        <li><a href="Car_audit.php">
                            <div class="flex-menu-top">
                                <div><img src="img/car_check_white_19_19.png" alt=""></div>&nbsp&nbsp
                                <div>Car Aduit</div>
                            </div>
                        </a></li>
                        <li><a href="#">
                            <div class="flex-menu-top">
                                <div><img src="img/add_listing_white_16_18.png" alt=""></div>&nbsp&nbsp
                                <div>Danh sách sản phẩm</div>
                            </div>
                            <ul class="sub-menu">
                                <li><a href="Toyota.html"><img src="img/eOSjSo0gO8zg3aHRY4hpcC5hoLIfgYB47RZLyJF4.png" alt="">Toyota</a> </li>
                                <li><a href="Huyndai.html"> <img src="img/hxYUSrBgsJGbgHENtd1chtBB19r1ksXHzQaPEAwr.png" alt="">Huyndai</a></li>
                                <li><a href="BMW.html"><img src="img/GKp6EsreSG6EE6M4FGbwyTqtqW92dgs0gySJrgIm.png" alt="">BMW</a></li>
                                <li><a href="Porsche.html"><img src="img/rVIyp5kLRXmGOHpFlinPAUtd8PAUIt37oAbMyWdd.png" alt="">Porsche</a></li>
                                <li><a href="Audi.html"><img src="img/B1WGu56r65M1CX2G7MwdsZBlsdtAn8sYkC6I7iz2.png" alt="">Audi</a>
                                <li><a href="Vinfast.html"><img src="img/b1jG5dKj26eRha1W4N18eDTmnRFtpQv4WaYoAQvx.png" alt="">Vinfast</a>
                                <li><a href="Maserati.html"><img src="img/j4rPTwqOB5HsjMQOFfrNTt3frH2xUj1jrzd3wAUx.png" alt="">Maserati</a>
                                <li><a href="Ford.html"><img src="img/HIsRavXij0eXRvpan2rQ6hhK1x0xE5AQZQulMAwh.png" alt="">Ford</a>
                                <li><a href="Mazda.html"><img src="img/Ivm3NQ38jfj7OB9CnvnrY832QuWVde0VS1zVxD6A.png" alt="">Mazda</a>
                                <li><a href="Mersedes-Benz.html"><img src="img/rflImCxyuFYRqhhufOzm49pxkBlTFElThgyp4gvz.png" alt="">Mercedes-Benz</a>
                            </ul>
                        </a></li>
                        <li><a href="#">
                            <div class="flex-menu-top">
                                <div><img src="img/support_white_24_24.png" alt=""></div>&nbsp&nbsp
                                <div>Thủ tục mua bán</div>
                            </div>
                        </a></li>
                        <li><a href="TintucNew.html">
                            <div class="flex-menu-top">
                                <div><img src="img/news_white_20_16.png" alt=""></div>&nbsp&nbsp
                                <div>Tin tức</div>
                            </div>
                        </a></li>
                    </ul>
                </nav>
                <div class="nav-bottom">
                    <div class="search">
                        <input type="text" class="form-input" placeholder="Tìm kiếm trong chợ xe ..." >
                        <span><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                        <a href="#" style="text-decoration: none;"><i class="fa-solid fa-sliders"></i></a>
                    </div>
                    <div class="menu_right">
                        <div class="logout">
                            <img src="img/photosmile.vn__final_78465929967864021_.jpg" alt="Dang nhap" width="40px" style="border-radius: 50%;">
                            <ul class="dangxuat">
                                <li><a href="logout.php"
                                    onclick=" return(confirm('Bạn có chắc muốn đăng xuất ?')) ">
                                    Đăng xuất&nbsp<img src="img/log-out.png" alt="" width="20px" style="margin-top: 3px;position: relative; top: 3px;"></a>
                                </li>
                            </ul>      
                        </div>
                        <div class="dangtin">       
                                <a href="dangtin.php">Đăng tin <img src="img/add_listing_white_16_18.png" alt="Đăng tin" width="20px" style="position: relative; top: 3px;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end header -->
        <div id="wp-content">
            <div class="container-wp_content">
                <!-- Top -->
                <div class="top">
                    <div class="container_top">
                        <div class="text_top">
                            <h1>TRÁNH MUA NHẦM XE ĐÂM ĐỤNG, NGẬP NƯỚC</h1>
                            <p><b>Dịch vụ Kiểm tra xe ô tô cũ Car Audit của Chợ Xe</b>  giúp bạn hiểu rõ hơn về tình trạng chiếc xe bạn định mua</p>
                            <ul class="menu_text_top">
                                <li><img src="img/check_pink_12_12.png" alt="logo_check">Thông tin đâm đụng, ngập nước</li>
                                <li><img src="img/check_pink_12_12.png" alt="logo_check">Tình trạng chức năng hoạt động</li>
                                <li><img src="img/check_pink_12_12.png" alt="logo_check">Mức giá tham khảo cho xe</li>
                            </ul>   
                        </div>
                        <div class="img_top"><img src="img/car_accident.png" alt=""></div>
                    </div>
                </div>
                <!--End top  -->
                <!-- Colum_1 -->
                <div class="Colum_1">
                    <div class="container_Colum_1">
                        <div class="text_colum_1">
                            <h1>CAR AUDIT LÀ GÌ?</h1>
                            <ul class="menu_colum_1">
                                <li>
                                    <div class="img_cl_1"><img src="img/car_check_white.png" class="img-all" alt="logo_check"></div>
                                    <span>Là dịch vụ kiểm tra và thẩm định ô tô cũ của Chợ Xe</span>
                                </li>
                                <li>
                                    <div class="img_cl_1" style=" padding-left: 5px;"><img src="img/medal.png"  class="medal"       alt="logo_check"></div>
                                    <span>Được thực hiện bởi chuyên gia kiểm tra xe nhiều năm kinh nghiệm</span>
                                </li>
                                <li>
                                    <div class="img_cl_1"><img src="img/car_commitment.png" class="img-all"  alt="logo_check"></div>
                                    <span>Giúp thông tin tình trạng xe rõ ràng và minh bạch              </span>
                                </li>
                            </ul>   
                        </div>
                        <div class="form_colum_1">
                           <form method="post">
                                <div class="container_form_cl">
                                    <h2 >Đăng ký kiểm tra xe</h2>
                                    <div class="input_box_1">
                                        <label for="name">Họ và tên <span>*</span></label>
                                        <input type="text" id="name" name="username" required>
                                    </div>
    
                                    <div class="input_box_1">
                                        <label for="SDT">Số điện thoại <span>*</span></label>
                                        <input type="text" id="SDT" name="SDT" required>
                                    </div>

                                    <div class="input_select">
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
                                    </div>

                                    <div class="input_box_1">
                                        <label for="tenxe">Tên dòng xe cần kiểm tra <span>*</span></label>
                                        <input type="text" id="tenxe" name="tenxe" required>
                                    </div>
    
                                    <div class="input_box_1">
                                        <label for="date">Ngày dự kiến xem xe <span>*</span></label>
                                        <input type="date" id="date" name="date" required>
                                    </div>

                                    <div class="Textarea_1">
                                        <label for="note">Ghi chú</label>
                                        <textarea name="note" id="note" cols="70" rows="7"></textarea>
                                    </div>
                                    <button class="button_1" type="submit" name="btn_sub_car">Gửi yêu cầu</button>
                                </div>    

                                <?php 
                                    include('control.php');
                                    if (isset($_POST['btn_sub_car'])) {
                                        $getdata = new data();
                                        if (empty($_POST['username']) || empty($_POST['SDT'] || empty($_POST['date']))) {
                                            echo '<script>alert("Bạn chưa nhập đủ Thông tin")</script>';
                                        } else {
                                            // move_uploaded_file($_FILES['txtpicture']['tmp_name'],'uploads_img'.$_FILES['txtpicture']['name']);
                                            $insert = $getdata->in_car(
                                                $_POST['username'],
                                                $_POST['SDT'],
                                                $_POST['khuvuc'],
                                                $_POST['tenxe'],
                                                $_POST['date'],
                                                $_POST['note']
                                            );
                                            $username = $_POST['username'];
                                            if ($insert) {
                                                echo '<script>alert("Bạn ' . $username . ' nhập Thành Công")</script>';
                                                } else {
                                                echo '<script>alert("Bạn nhập Thất Bại")</script>';
                                            }
                                        }
                                    }
                                ?>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Colum_1 -->
                <!-- Colum_2 -->
                <div class="Colum_2">
                    <div class="title_colum_2">CAR AUDIT GIÚP NGƯỜI MUA</div>
                    <div class="all_container_colum_2">
                        <div class="container_colum2_1">
                            <div class="text_colum_2">
                                <h2>Không lo mua phải xe đã mông má, đại tu</h2>
                                <p>Car Audit sẽ giúp bạn biết được tình trạng xe</p>
                                <ul class="menu_text_colum_2">
                                    <li><img src="img/check_red_12_12.png" alt="logo_check"> Thông tin đâm đụng, ngập nước</li>
                                    <li><img src="img/check_red_12_12.png" alt="logo_check">Tình trạng chức năng hoạt động</li>
                                    <li><img src="img/check_red_12_12.png" alt="logo_check"> Mức giá tham khảo cho xe</li>
                                </ul>   
                            </div>
                            <div class="img_colum_2"><img src="img/car_audit1_pc.png" alt=""></div>
                        </div>
                        <div class="container_colum2_2">
                            <div class="img_colum_2_2"><img src="img/car_audit2_pc.png" alt=""></div>
                            <div class="text_colum_2_2">
                                <h2>Đánh giá đúng giá trị thực tế của chiếc xe</h2>
                                <p>Sau khi kiểm tra, bạn sẽ được tư vấn về giá trị của chiếc xe</p>
                                <ul class="menu_text_colum_2_2">
                                    <li><img src="img/check_red_12_12.png" alt="logo_check">Mức giá hợp lý cho chiếc xe đó</li>
                                    <li><img src="img/check_red_12_12.png" alt="logo_check">Các chi phí có thể phát sinh sau khi mua</li>
                                </ul>   
                            </div>
                        </div>
                        <div class="container_colum2_3">
                            <div class="text_colum_2_3">
                                <h2>An tâm đưa ra quyết định mua xe</h2>
                                <p>Car Audit giúp bạn giải quyết những nỗi lo khi mua xe cũ</p>
                                <ul class="menu_text_colum_2_3">
                                    <li><img src="img/check_red_12_12.png" alt="logo_check">An tâm về chất lượng xe</li>
                                    <li><img src="img/check_red_12_12.png" alt="logo_check">Chi phí hợp lí</li>
                                    <li><img src="img/check_red_12_12.png" alt="logo_check">Xe không phát sinh lỗi</li>
                                </ul>   
                            </div>
                            <div class="img_colum_2_3"><img src="img/car_audit3_pc.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <!-- End Colum_2 -->
                <!--  Colum_3 -->
                <div class="Colum_3">
                    <div class="container_Colum_3">
                        <div class="img_Colum_3"><img src="img/quy_trinh_check_xe.png" alt=""></div>
                        <div class="text_Colum_3">
                            <h1>QUY TRÌNH CHECK XE Ô TÔ CŨ VỚI 8 HẠNG MỤC</h1>
                            <p>Và 136 tiêu chí giúp thông tin xe trở nên minh bạch, rõ ràng, đáng tin cậy</p>
                        </div>
                    </div>
                </div>
                <!-- End Colum_3 -->
                <!--  Colum_4 -->
                <div class="Colum_4">
                    <div class="container_Colum_4">
                        <p class="title_colum_4">BẢNG GIÁ DỊCH VỤ KIỂM TRA Ô TÔ CŨ CAR AUDIT</p>
                       <div class="flex_box_cl_4">
                            <div class="box_cl_4">
                                <div class="img_colum_4"><img src="img/price_tag.png" alt=""></div>
                                <div class="text_colum_4">
                                    <h2>Các dòng xe phổ thông</h2>
                                    <p>
                                        Các dòng xe phổ thông Nhật Bản, Hàn Quốc, Mỹ, Đài Loan, Trung Quốc có tầm giá dưới 1,2 tỷ (tính theo giá xe cũ).
                                    </p>
                                    <div class="money_cl_4">
                                        <b>1.900.000 VND</b>
                                        <span>2.400.000 VND</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box_cl_4">
                                <div class="img_colum_4"><img src="img/white_star_circle.png" alt=""></div>
                                <div class="text_colum_4">
                                    <h2>Các dòng xe Đức, xe sang</h2>
                                    <p> Các dòng xe BMW, Mercedes, Volkswagen, Lexus, Acura, Infinity, Mini Cooper, … Hoặc các xe có giá từ 1,2 tỷ trở lên.</p>
                                    <div class="money_cl_4">
                                        <b>2.999.999 VND</b>
                                        <span>3.490.000 VND</span>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class="box_center">
                            <p>Lưu ý:</p>
                            <ul class="list_note_Colum_4">
                                <li>
                                    <div><img src="img/info_14_14.png" alt=""></div>
                                    <div class="text_list_note">Áp dụng cho các quận trung tâm TP. HCM, các quận vùng ven hoặc tỉnh sẽ tính thêm chi phí di chuyển. <a href="#">Tham khảo phí di chuyển.</a></div>
                                </li>
                                <li>
                                    <div><img src="img/info_14_14.png" alt=""></div>
                                    <div class="text_list_note">Mức giá áp dụng ngay cả khi giao dịch mua bán xe giữa người bán và người mua không thành công.</div>
                                </li>
                                <li>
                                    <div><img src="img/info_14_14.png" alt=""></div>
                                    <div class="text_list_note">Đối với những xe cần nâng Khung gầm để kiểm tra chi tiết, cần thực hiện tại các Garage đối tác của Chợ Xe sẽ phụ phí 200.000đ.</div>
                                </li>
                            </ul>
                       </div>
                    </div>
                </div>
                <!-- End Colum_4 -->
                <!-- Colum_5 -->
                <div class="Colum_5">
                    <div class="container_Colum_5">
                        <p class="title_colum_5">KIỂM TRA XE CÙNG CAR AUDIT VỚI CHỈ 3 BƯỚC</p>
                        <div class="flex_box_colum_5">
                            <div class="box_1_cl_5">
                                <img src="img/half_circle.png" class="half_circle" >
                                <img src="img/checklist.png" class="logo_half_circle">
                                <div class="text_box_cl_5">
                                    <h3>BƯỚC 1: ĐĂNG KÝ THÔNG TIN</h3>
                                    <p><span>Cách 1:</span> Điền form đăng ký tại website</p>
                                    <p><span>Cách 2:</span> Liên hệ với Hotline: 0936.66.11.60</p>
                                </div>
                            </div>
                            <div class="box_2_cl_5">
                                <img src="img/half_circle.png" class="half_circle" >
                                <img src="img/appointment.png" class="logo_half_circle">
                                <div class="text_box_cl_5">
                                    <h3>BƯỚC 2: LÊN LỊCH HẸN</h3>
                                    <p>Trung tâm CSKH của Chợ Xe sẽ liên hệ với bạn để đặt lịch hẹn kiểm tra xe với Chuyên viên Car Audit</p>
                                </div>
                            </div>
                            <div class="box_3_cl_5">
                                <img src="img/half_circle.png" class="half_circle" >
                                <img src="img/tool.png" class="logo_half_circle">
                                <div class="text_box_cl_5">
                                    <h3>BƯỚC 3: TIẾN HÀNH KIỂM TRA XE</h3>
                                    <p>Bạn cùng với Chuyên viên Car Audit sẽ gặp nhau theo thời gian và địa điểm đã hẹn để tiến hành kiểm tra xe.</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- End Colum_5 -->
                <!-- Colum_6 -->
                <div class="Colum_6">
                    <div class="container_Colum_6">
                        <p class="title_colum_6">HÌNH ẢNH KIỂM TRA XE</p>
                        <div class="slideshow-container">
                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                              <!-- <div class="numbertext">1 / 3</div> -->
                              <img src="img/slide_1.jpg" style="width:100%">
                            </div>
                          
                            <div class="mySlides fade">
                              <!-- <div class="numbertext">2 / 3</div> -->
                              <img src="img/slide_2.jpg" style="width:100%">
                            </div>
                          
                            <div class="mySlides fade">
                              <!-- <div class="numbertext">3 / 3</div> -->
                              <img src="img/slide_3.jpg" style="width:100%">
                            </div>
                          
                            <div class="mySlides fade">
                                <!-- <div class="numbertext">3 / 3</div> -->
                                <img src="img/slide_4.jpg" style="width:100%">
                            </div>

                            <div class="mySlides fade">
                                <!-- <div class="numbertext">3 / 3</div> -->
                                <img src="img/slide_5.jpg" style="width:100%">
                            </div> 
                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                          </div>
                          <br>
                          
                          <!-- The dots/circles -->
                          <div style="text-align:center" class="dotted">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                            <span class="dot" onclick="currentSlide(4)"></span>
                            <span class="dot" onclick="currentSlide(5)"></span>
                          </div>
                    </div>
                </div>
                <!-- End Colum_6 -->
                <!--  Colum_7 -->
                <div class="Colum_7">
                    <div class="container_Colum_7">
                        <p class="title_colum_7">CÂU HỎI THƯỜNG GẶP</p>
                        
                        <button class="accordion">
                            <div>Car Audit của Chợ Xe có kiểm tra được xe đâm đụng, thủy kích không?</div>
                        </button>
                        <div class="panel">
                        <p>Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</p>
                        </div>

                        <button class="accordion">
                            <div>Gói dịch vụ xuống tận nơi kiểm tra hay tôi mang xe đến Garage của Chợ Xe?</div>
                        </button>
                        <div class="panel">
                        <p>Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</p>
                        </div>

                        <button class="accordion">
                            <div>Thời gian kiểm tra 1 chiếc ô tô cũ mất khoảng bao lâu?</div>
                        </button>
                        <div class="panel">
                        <p>Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</p>
                        </div>

                        <button class="accordion">
                            <div>Tôi cần đặt lịch hẹn kiểm tra xe trước bao lâu?</div>
                        </button>
                        <div class="panel">
                        <p>Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</p>
                        </div>

                        <button class="accordion">
                            <div>Nếu tôi không mua được xe thì có mất phí kiểm tra không?</div>
                        </button>
                        <div class="panel">
                        <p>Dịch vụ Car Audit của Chợ xe hoàn toàn có khả năng kiểm tra được tình trạng xe bị đâm đụng, thủy kích. Một chiếc xe dù mông má đại tu cỡ nào thì cũng sẽ lộ ra những điểm không như trạng thái ban đầu được.</p>
                        </div>
                    </div>
                </div>
                <!-- End Colum_7 -->
            </div>
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
<script src="script/Car_audit.js"></script>

</body>
</html>