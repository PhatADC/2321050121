<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">

        <style>
            .dangnhap:hover {
                color: orange;
            }

            .muagoi:hover {
                background-color: brown;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="header-container">
            <!-- Danh mục trang WEB -->
                <nav class="danhmuc">
                    <img class="logo" src="c457cb0846f4cdaa94e5.jpg" alt="">
                    <ul class="danhmuc-danhsach">
                        <li class="danhmuc-lienket">
                            <a href="#">Trang chủ</a>
                        </li>
                        <li class="danhmuc-lienket">
                            <a href="#">Truyền hình</a>
                        </li>
                        <li class="danhmuc-lienket">
                            <a href="#">Phim bộ</a>
                        </li>
                        <li class="danhmuc-lienket">
                            <a href="#">V.Leguage</a>
                        </li>
                        <li class="danhmuc-lienket">
                            <a href="#">Thiếu Nhi</a>
                        </li>
                        <li class="danhmuc-lienket">
                            <a href="#">Xem thêm</a>
                        </li>
                    </ul>
                </nav>
            <div class="chucnang">
                <div>
                    <button class="muagoi">Mua gói</button>
                </div>
                <div>
                    <button class="dangnhap">Đăng nhập</button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="quangcao">
            <img class="anh2" src="world25.jpg" alt="">
            <div class="btn">
                <button>Xem ngay</button>
            </div>
        </div>
        <div class="container">
            <div>
                <div style="display: flex; justify-content: center;">
                    <img class="banner" src="b827cc644198cac69389 copy.jpg" alt="">
                </div>
                <div style="display: flex; justify-content: center;">
                    <img class="qc" src="18_68a2b0a310013f000164c184.jpg" alt="">
                </div>
        </div>
        <div class="theloai">
            <div class="tentheloai">Phim chiếu rạp</div>
                <div class="danhsach">
                    <div class="phim">
                        <div class="anh">
                            <img class="anh1" src="muado.jpg" alt="" onclick="viewTrailer(1)">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                        <div class="phim-info" id=""> <!-- id theo id phim -->
                            <span>Năm: 2025</span>
                            <span>Thời lượng: 120 phút</span>
                            <span>Quốc gia: Việt Nam</span>
                        </div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img class="anh1" src="doraemon1.jpg" alt="" onclick="viewTrailer(2)">
                        </div>
                        <div class="ten">Mưa đỏ</div><div class="phim-info" id="phim-info-1"> <!-- id theo id phim -->
                            <span>Năm: 2016</span>
                            <span>Thời lượng: 117 phút</span>
                            <span>Quốc gia: Việt Nam</span>
                        </div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img class="anh1" src="conan.jpg" alt="" onclick="viewTrailer(3)">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                        <div class="phim-info" id="phim-info-1"> <!-- id theo id phim -->
                            <span>Năm: 2025</span>
                            <span>Thời lượng: 108 phút</span>
                            <span>Quốc gia: Việt Nam</span>
                        </div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img class="anh1" src="queenoftears.jpg" alt="" onclick="viewTrailer(4)">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                        <div class="phim-info" id="phim-info-1"> <!-- id theo id phim -->
                            <span>Năm: 2024</span>
                            <span>Thời lượng: 16 tập (mỗi tập ~90')</span>
                            <span>Quốc gia: Việt Nam</span>
                        </div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img class="anh1" src="tomandjerry.jpg" alt="" onclick="viewTrailer(5)">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                        <div class="phim-info" id="phim-info-1"> <!-- id theo id phim -->
                            <span>Năm: 2021</span>
                            <span>Thời lượng: nhiều tập</span>
                            <span>Quốc gia: Việt Nam</span>
                        </div>
                    </div>
                </div>
            </div>
        <div class="theloai">
            <div class="tentheloai">Phim chiếu rạp</div>
                <div class="danhsach">
                    <div class="phim">
                        <div class="anh">
                            <img src="moon.jpg" alt="">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img src="Marsupilami.jpg" alt="">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img src="onepiece.jpg" alt="">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img src="VitDonald-Donald Duck.jpg" alt="">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                    </div>
                    <div class="phim">
                        <div class="anh">
                            <img src="Mickey.jpg" alt="">
                        </div>
                        <div class="ten">Mưa đỏ</div>
                    </div>
                </div>
        </div> 
        <div class="theloai">
            <div class="tentheloai">Phim chiếu rạp</div>
            <div class="danhsach">
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
            </div>
        </div>
        <div class="theloai">
            <div class="tentheloai">Phim chiếu rạp</div>
            <div class="danhsach">
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
            </div>
        </div>
        <div class="theloai">
            <div class="tentheloai">Phim chiếu rạp</div>
            <div class="danhsach">
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
            </div>
        </div>
        <div class="theloai">
            <div class="tentheloai">Phim chiếu rạp</div>
            <div class="danhsach">
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
                <div class="phim">
                    <div class="anh">
                        <img src="muado.jpg" alt="">
                    </div>
                    <div class="ten">Mưa đỏ</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
skdakdkask
<br><br><br>
        <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
            <h3>Công ty Cổ phần Viễn Thông FPT</h3>
            <img src="/fpt/c457cb0846f4cdaa94e5.jpg" alt="FPT Play" class="footer-logo">
            <div class="footer-cert">
                <img src="/fpt/_dmca_premi_badge_4.png" alt="DMCA">
                <img src="/fpt/logoSaleNoti.cb85045.png" alt="Bộ Công Thương">
            </div>
            </div>

            <div class="footer-column">
            <h3>Về FPT Play</h3>
            <p>Giới thiệu</p>
            <p>Các gói dịch vụ</p>
            <p>Trung tâm hỗ trợ</p>
            <p>Thông tin</p>
            </div>

            <div class="footer-column">
            <h3>Dịch vụ</h3>
            <p>Quảng cáo</p>
            <p>Mua gói</p>
            <p>Bảo hành</p>
            </div>

            <div class="footer-column">
            <h3>Quy định</h3>
            <p>Điều khoản sử dụng</p>
            <p>Chính sách thanh toán</p>
            <p>Chính sách bảo mật</p>
            <p>Cam kết quyền riêng tư</p>
            </div>

            <div class="footer-column">
            <h3>Thông tin</h3>
            <p>Liên hệ</p>
            <p>Hotline: 19006600</p>
            <p>Email: hotrofptplay@fpt.com.vn</p>
            <div class="footer-social">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-youtube"></i>
            </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Người đại diện: Ông Hoàng Việt Anh</p>
            <p>Trụ sở: Tầng 8, tòa nhà FPT Tower, số 10 Phạm Văn Bạch, Cầu Giấy, Hà Nội</p>
            <p>Số giấy chứng nhận đăng ký kinh doanh: 0101778163 do Sở Kế Hoạch Đầu Tư Thành Phố Hà Nội cấp vào ngày 28/07/2005</p>
            <p>Giấy phép Cung cấp Dịch vụ Phát thanh, Truyền hình trên mạng Internet số 377/GP-BTTTT cấp ngày 10/10/2023.</p>
            <div class="footer-apps">
            <img src="/fpt/c457cb0846f4cdaa94e5.jpg" alt="App Store">
            <img src="/fpt/c457cb0846f4cdaa94e5.jpg" alt="Google Play">
            </div>
        </div>
        </footer>
    <div id="videoInBanner">
        <iframe width="100%" height="380"
            src="https://www.youtube.com/embed/HwTCDGcyjs4?autoplay=1"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
    <script src="test.js"></script>
    </body>
</html>
