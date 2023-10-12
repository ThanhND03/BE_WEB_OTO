<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index_1.css">
    <link rel="stylesheet" href="css/hiden_show.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Trang Chủ </title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    ?>  
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

        <!-- Form -->
        
        <!-- End form -->

        <div id="wp-content">
            <div class="container-content">
                <div id="search-top">
                    <b>Từ khóa tìm kiếm nhiều nhất</b>
                    <div class="flex-bt">
                        <p><a href="#">Huyndai Accent</a></p>
                        <p><a href="#">Mercedes</a></p>
                        <p><a href="#">Xe dưới 250 triệu</a></p>
                        <p><a href="#">VinFat VF5</a></p>
                        <p><a href="#">Xe 7 chỗ</a></p>
                        <p><a href="#">Xe bán tải cũ giá rẻ</a></p>
                    </div>
                </div>
                <!-- end search-top -->
                <div id="hotnew">
                    <b class="text-top">Tin đăng mới nhất</b>
                    <ul class="menu-hotnew">
                        <div class="img-hot"><a href="KiaMorning.html"><img src="img/kia4.jpg" alt="img-xe"><span style="right:150px;">Kia Morning 2018</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2018
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Tự dộng</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>40.000 km</li>
                                </ul>
                                <b class="money">500 Triệu </b>
                                <p>Hà Nội - 29/6/2023</p>
                            </div>
                        </div>
                        <div class="img-hot"><a href="BMW2.html"><img src="img/MiUlHLsvwLJyXIeMpxPoxJh12B6DgVrGtnW1GdVv.jpg" alt="img-xe"><span style="right:55px;">BWM 3 Series 320l SX 12/2016</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2016
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Bán tự dộng</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>40.000 km</li>
                                </ul>
                                <b class="money">999 Triệu</b>
                                <p>Hồ Chí Minh- 12/6/2023</p>
                            </div>
                        </div>
                        <div class="img-hot"><a href="AudiA4.html"><img src="img/A4-1,46.jpg" alt="img-xe"><span style="right:222px;">Audi A4</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    Tự Động
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Mới</li>
                                </ul>
                                <b class="money">1,46 Tỷ</b>
                                <p>Hồ Chí Minh- 12/7/2023</p>
                            </div>
                        </div>
                        <!-- <div class="img-hot"><a href="/#"><img src="img/ZXjusycdAXcfeYZNM1koeUyrMdQM0Cwh9ld7DwEV.jpg" alt="img-xe"><span style="right:35px;">Huyndai Sonata 2016 Nhập khẩu</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2016
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Tự dộng</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>50.000 km</li>
                                </ul>
                                <b class="money">500 Triệu</b>
                                <p>Thanh Hóa - 11/6/2023</p>
                            </div>
                        </div> -->
                        <div class="img-hot"><a href="HuyndaiAccent.html"><img src="img/huyndai1.jpg" alt="img-xe"><span style="right:150px;">Huyndai ACCENT</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2015
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Tự dộng</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>100.000 km</li>
                                </ul>
                                <b class="money">1,2 Tỷ</b>
                                <p>Biên Hòa - 03/6/2023</p>
                            </div>
                        </div>
                    </ul>

                    <ul class="menu-hotnew">
                        <div class="img-hot"><a href="CX-5Luxury.html"><img src="img/ttx2.jpg" alt="img-xe"><span style="right:134px;">Mazda CX-5 Luxury</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2022
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Tự động</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>10.000 km</li>
                                </ul>
                                <b class="money">1,5 Tỷ </b>
                                <p>Lai châu - 18/6/2023</p>
                            </div>
                        </div>
                        <div class="img-hot"><a href="#"><img src="img/white.png" alt="img-xe"><span style="right:60px;">Misubishi GLS 2017 Tự động</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2017
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Tự dộng</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>77.777 km</li>
                                </ul>
                                <b class="money">425 Triệu</b>
                                <p>Hòa Bình- 16/6/2023</p>
                            </div>
                        </div>
                        <div class="img-hot"><a href="#"><img src="img/black.png" alt="img-xe"><span style="right:42px;">Xe Alltis chính chủ cần bán gấp</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2009
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Tự dộng</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>99.000 km</li>
                                </ul>
                                <b class="money">300 Triệu</b>
                                <p>Hà Nội - 01/6/2023</p>
                            </div>
                        </div>
                        <div class="img-hot"><a href="#"><img src="img/Al8dJY01Ops8SucB4GTlOiOxNe5KIQRsHxvhTJgG.jpg" alt="img-xe"><span style="right:15px;">Huyndai Tucson 2.0L Đặc biệt 2021</span></a>
                            <div class="text-card">
                                <ul class="text-card-1">
                                    2021
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>Tự dộng</li>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>99.999 km</li>
                                </ul>
                                <b class="money">850 Triệu</b>
                                <p>Hà Nội - 10/6/2023</p>
                            </div>
                        </div>
                    </ul>
                    <ul style="list-style: none; display: flex; text-align: center;" class="xemthem">
                        <li><a href="Toyota.html">Xem thêm</a></li>
                        <li><img src="img/chevrons-down_20_20.png" alt="" width="23px" ></li>
                    </ul>
                </div>
                <div id="content">   
                    <div id="salon">
                        <b>Salon Ô tô</b>
                            <div class="flex-ngang">
                                <div class="img-flex">
                                    <a href="/#">
                                        <img src="img/BQLT4XgHxTkx15gjiFzdK1ln63658dlMIYDoleQP.png" alt="logo bien hoa"  width="250px" class="pic">
                                    </a>
                                    <p style="margin-top: 0px;">
                                        <a href="#">Chợ xe kiểu mỹ</a><br><br>
                                        <img src="img/location_12_13.png" alt=""><span>&nbsp&nbsp135 Nguyễn trãi</span><br>
                                        <img src="img/phone_14_14.png" alt="" ><span>&nbsp&nbsp0923345555</span>
                                    </p>
                                </div>
                                <div class="img-flex"> 
                                    <a href="#">
                                        <img src="img/Toyota pmh.png" alt="logo toyota"  width="250px" class="pic">
                                    </a>
                                    <p  style="margin-top: 0px;">
                                        <a href="#">Toyota Phú Mỹ Hưng</a><br><br>
                                        <img src="img/location_12_13.png" alt=""><span>&nbsp&nbsp290 Nguyễn Văn Linh</span><br>
                                        <img src="img/phone_14_14.png" alt="" ><span>&nbsp&nbsp0923456789</span>
                                    </p>
                                </div>
                            </div>
                            <div class="flex-ngang">
                                <div class="img-flex">
                                    <a href="#">
                                        <img src="img/ESo9T7cn4MBa8YHaruYJDLU1vWuwKWKu3GObFvm5.jpg" alt=""  width="250px" class="pic">
                                    </a>
                                    <p  style="margin-top: 0px;">
                                        <a href="#">Mitsubishi Thủ Đức</a><br><br>
                                        <img src="img/location_12_13.png" alt=""><span>&nbsp&nbsp120 Thủ Đức</span><br>
                                        <img src="img/phone_14_14.png" alt="" ><span>&nbsp&nbsp0911311333</span>
                                    </p>
                                </div>
                                <div class="img-flex">
                                    <a href="#">
                                    <img src="img/Screenshot 2023-07-01 130927.png" alt="logo lexus luot"  width="250px" class="pic">
                                    </a>
                                    <p  style="margin-top: 0px;">
                                        <a href="#">Lexus Lướt Hà Nội</a><br><br>
                                        <img src="img/location_12_13.png" alt=""><span>&nbsp&nbsp135 Nguyễn trãi</span><br>
                                        <img src="img/phone_14_14.png" alt="" ><span>&nbsp&nbsp0912349999</span>
                                    </p>
                                </div>
                            </div>
                            <div class="flex-ngang">
                                <ul style="list-style: none; display: flex;" >
                                    <li><a href="#">Xem thêm</a></li>
                                    <li><img src="img/chevrons-right_20_20.png" alt="" width="23px"></li>
                                </ul>
                            </div>
                    </div>
                </div>

             <!-- Table logo xe -->
             <section class="home">
                    <div class="down_up_container">
                        <b>Bảng giá xe các hãng</b>
                        <div > 
                            <ul class="menu-logo">
                                <div class="shadow" ><a href="Toyota.html"><img src="img/eOSjSo0gO8zg3aHRY4hpcC5hoLIfgYB47RZLyJF4.png" alt="logo-xe"  ><span style="right: 65px;">Toyota</span></a></div>
                                <div class="shadow" ><a href="Huyndai.html"><img src="img/hxYUSrBgsJGbgHENtd1chtBB19r1ksXHzQaPEAwr.png" alt="logo-xe"  ><span style="right: 55px;">Huyndai</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/uvICoTdobRIpiAXOixCuqkkLZz3s31JrMXLcm4Ap.png" alt="logo-xe"  ><span style="right: 75px;">Kia</span></a></div>
                                <div class="shadow" ><a href="Vinfast.html"><img src="img/b1jG5dKj26eRha1W4N18eDTmnRFtpQv4WaYoAQvx.png" alt="logo-xe"  ><span style="right: 65px;">Vinfat</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/SyCd75asAUtvOi47Xo8hhRwrUMFCzqVyMdTX4v1n.png" alt="logo-xe"  ><span style="right: 46px;">Mitsubishi</span></a></div>
                                <div class="shadow" ><a href="Mazda.html"><img src="img/Ivm3NQ38jfj7OB9CnvnrY832QuWVde0VS1zVxD6A.png" alt="logo-xe"  ><span style="right: 60px;">Mazda</span></a></div>
                            </ul>
                            <ul class="menu-logo">
                                <div class="shadow" ><a href="Ford.html"><img src="img/HIsRavXij0eXRvpan2rQ6hhK1x0xE5AQZQulMAwh.png" alt="logo-xe"  ><span style="right: 70px;">Ford</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/EUz8F51M2NxCyY6z4XTb9A2uBGxBRjeUIi6DdrBj.png" alt="logo-xe"  ><span style="right: 63px;">Honda</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/6gUqToXRpeo5wtrKZA7AerqzFRZWvDAOHvedLR8L.png" alt="logo-xe"  ><span style="right: 60px;">Suzuki</span></a></div>
                                <div class="shadow" ><a href="Mersedes-Benz.html"><img src="img/rflImCxyuFYRqhhufOzm49pxkBlTFElThgyp4gvz.png" alt="logo-xe"  ><span style="right: 20px;">Mercedes-Benz</span></a></div>
                                <div class="shadow" ><a href="BMW.html"><img src="img/GKp6EsreSG6EE6M4FGbwyTqtqW92dgs0gySJrgIm.png" alt="logo-xe"  ><span style="right: 68px;">BMW</span></a></div>
                                <div class="shadow" ><a href="Audi.html"><img src="img/B1WGu56r65M1CX2G7MwdsZBlsdtAn8sYkC6I7iz2.png" alt="logo-xe"  ><span style="right: 70px;">Audi</span></a></div>
                            </ul>

                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="img/RUaGWHaM7ITdK32Ym8C2CcQYex1TRltUG0TPNyiB.png" alt="logo-xe"  ><span style="right: 55px;">Peugeot</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/AObF7Z5iuO7k7LnLzHf04yK4afd72Z6KlZO3x6O7.png" alt="logo-xe"  ><span style="right: 65px;">Isuzu</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/6Iv4VKqCyIeHqokGF5hfRUkcd8sVhE5l7myc2gm2.png" alt="logo-xe"  ><span style="right: 60px;">Subaru</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/66WARwSXjFfhTS8Gd2Ze2bSzW05W4NB1JPE0TXHL.png" alt="logo-xe"  ><span style="right: 60px;">Nissan</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/bEniM1nfBsq6vBjO61Emk2kRTl0q8doZAV4HBaLm.png" alt="logo-xe"  ><span style="right: 75px;">MG</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/JhRTYkecAKtFQwmBMj6gTy996ZhjdBnYTyytlv77.png" alt="logo-xe"  ><span style="right: 65px;">Lexus</span></a></div>
                            </ul>
                        </div>
                        
                        <div id="btnShow">
                            <div class="hiden-show">
                                <button onclick="toggleShow()">Xem Thêm<img src="img/chevrons-down_20_20.png" alt="" ></button>
                            </div>
                        </div>
                        <!-- End form Down -->
                        <div id="btnHide" style="display: none;">
                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="img/lhb1UKRgVtLBmSbgejXh8KMT7Y1n10pnWjtc74GC.png" alt="logo-xe"  ><span style="right: 65px;">Acura</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/sNQQLeQlI0V92Bo5j4xUHhLwJ0hfJcGbZ5BeeUZa.jpg" alt="logo-xe"  ><span style="right: 48px;">Đô Thành</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/WtVMdr3zGFYCJYgwhnd3363643rJUDMBXkarqQdi.png" alt="logo-xe"  ><span style="right: 70px;">Hino</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/AxX6JwcNkq90Sh8LXffj9xgWpGIPJwbw5VRDE689.png" alt="logo-xe"  ><span style="right: 65px;">Volvo</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/yEUrcyAltI05Ms7iKAzgAzMDWkCpXYJYVR8r2AvO.png" alt="logo-xe"  ><span style="right: 35px;">Volkswagen</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/cYMrrMLBWgYKKju8imZiTSuec8Ketkld19SrCE0L.png" alt="logo-xe"  ><span style="right: 55px;">Bentley</span></a></div>
                            </ul>

                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="img/xP4BPDMQtJICmodpZ4z98MtdK1nN97nATjWnTL2Q.png" alt="logo-xe"  ><span style="right: 75px;">Mini</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/vfHWbuxbCaGyvCsqbiJKf0ix4vWbS76tnNox1xRv.png" alt="logo-xe"  ><span style="right: 70px;">Jeep</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/TDiHU9lqDxlyD74Iul1hVxtFElDC7LhK9MzXtyo8.png" alt="logo-xe"  ><span style="right: 35px;">Land Rover</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/TcFuubTaDmAh4fdMu2GDliLqlgdKZkcVOqrgkk6V.png" alt="logo-xe"  ><span style="right: 50px;">Dongben</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/rVIyp5kLRXmGOHpFlinPAUtd8PAUIt37oAbMyWdd.png" alt="logo-xe"  ><span style="right: 55px;">Porsche</span></a></div>
                                <div class="shadow" ><a href="Maserati.html"><img src="img/j4rPTwqOB5HsjMQOFfrNTt3frH2xUj1jrzd3wAUx.png" alt="logo-xe"  ><span style="right: 55px;">Maserati</span></a></div>
                            </ul>

                            <ul class="menu-logo">
                                <div class="shadow" ><a href="#"><img src="img/dzy60miFK4sJewVCRpAehjPOCk1sGWrDohWnBbep.png" alt="logo-xe"  ><span style="right: 50px;">Chevrolet</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/DHg3m1HXxu5qLZQCM6xSHbCabccJjrmOrvCfhQ6o.png" alt="logo-xe"  ><span style="right: 60px;">Jaguar</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/DDsGtA9u9cJGtHyQW0GX2kavHfAthqCIxmd1Mxpv.png" alt="logo-xe"  ><span style="right: 68px;">RAM</span></a></div>
                                <div class="shadow" ><a href="#"><img src="img/bTSWdI08orNpdut09fWv4LFsi7hfjtwng29h8RPz.png" alt="logo-xe"  ><span style="right: 50px;">Kawasaki</span></a></div>
                                <div style="border: none;"><a href="#"><img src=""></a></div>
                                <div style="border: none;"><a href="#"><img src=""></a></div>
                            </ul>

                            <div class="hiden-show">
                                <button onclick="toggleHiden()">Thu Gọn<img src="img/chevrons-up_20_20.png" alt=""></button>
                            </div>

                        </div>
                        <!-- End form hiden -->
                    </div>
                </section>
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
<script src="script/Accordion.js"></script>
<script src="script/hiden-show.js"></script>
</body>
</html>