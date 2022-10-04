<?php
$page_title = 'Trang chủ';
include "./includes/header.php";
?>
<!-- container -->
<div id="click">
<div class="container">
        <!-- Slide container -->
        <div class="slider-container">
            <div class="menu">
                <label for="slide-dot-1"></label>
                <label for="slide-dot-2"></label>
                <label for="slide-dot-3"></label>
            </div>

            <input id="slide-dot-1" class="slide__input" type="radio" name="slides" checked>
            <div class="slide slide-1"></div>

            <input id="slide-dot-2" class="slide__input" type="radio" name="slides">
            <div class="slide slide-2"></div>

            <input id="slide-dot-3" class="slide__input" type="radio" name="slides">
            <div class="slide slide-3"></div>
        </div>

        <!-- Image container -->
        <div class="image-container">
            <!-- Heading -->
            <div class="heading__img-post">
                <div class="post-title">
                    <p>Dịch vụ nổi bật</p>
                </div>
                <div class="post__note">
                    <p>Chú ý: Trong tháng 6 một số quận tại Hà Nội đang có chương trình ưu đãi, bạn vui lòng nhập
                        chính
                        xác thông tin quận để nhận nhiều quyền lợi hơn nhé</p>
                </div>
            </div>
            <!-- Image post -->
            <div class="image-wrap">
                <div class="image-item">
                    <div class="post__thumbail">
                        <!-- <a href="" class="image-link"> -->
                            <img class="post__thumbail-img" src="https://benhvienphusanhanoi.com/wp-content/uploads/2021/06/ung-thu.jpg" alt="" onerror="this.onerror=null;this.src='./asset/img/ung-thu.jpg'">
                        <!-- </a> -->
                    </div>
                    <div class="post__text">
                        <h3>
                            <a href="" class="post__title-link">Sàng lọc ung thư phụ khoa :
                                tầm soát vô cùng cần thiết</a></h3>
                    </div>
                </div>
                <div class="image-item">
                    <div class="post__thumbail">
                        <a href="" class="image-link">
                            <img class="post__thumbail-img" src="https://benhvienphusanhanoi.com/wp-content/uploads/2021/06/31-1-e1623692307481.jpg" alt="" onerror="this.onerror=null;this.src='./asset/img/bungbau.jpg'">
                        </a>
                    </div>
                    <div class="post__text">
                        <h3><a href="" class="post__title-link">Dịch vụ sàng lọc, chẩn đoán
                                trước sinh và sơ sinh</a></h3>
                    </div>
                </div>
                <div class="image-item">
                    <div class="post__thumbail">
                        <a href="" class="image-link">
                            <img class="post__thumbail-img" src="https://benhvienphusanhanoi.com/wp-content/uploads/2021/06/bac-si.jpg" alt="" onerror="this.onerror=null;this.src='./asset/img/bac-si.jpg'">
                        </a>
                    </div>
                    <div class="post__text">
                        <h3><a href="" class="post__title-link">Sàng lọc tiền sản giật –
                                tránh biến chứng trong thai kì</a></h3>
                    </div>
                </div>
                <div class="image-item">
                    <div class="post__thumbail">
                        <a href="" class="image-link">
                            <img class="post__thumbail-img" src="https://benhvienphusanhanoi.com/wp-content/uploads/2021/06/download.jpeg" alt="" onerror="this.onerror=null;this.src='./asset/img/download.jpeg'">
                        </a>
                    </div>
                    <div class="post__text">
                        <h3><a href="" class="post__title-link">Điều trị hiếm muộn – Điều
                                ước không còn xa vời</a></h3>
                    </div>
                </div>
                <div class="image-item">
                    <div class="post__thumbail">
                        <a href="" class="image-link">
                            <img class="post__thumbail-img" src="https://benhvienphusanhanoi.com/wp-content/uploads/2021/06/dieutribenhphukhoa.jpg" alt="" onerror="this.onerror=null;this.src='./asset/img/dieutribenhphukhoa.jpg'">
                        </a>
                    </div>
                    <div class="post__text">
                        <h3><a href="" class="post__title-link">Dịch vụ khám bệnh phụ khoa
                                – điều trị chính xác và an toàn</a></h3>
                    </div>
                </div>
                <div class="image-item">
                    <div class="post__thumbail">
                        <a href="" class="image-link">
                            <img class="post__thumbail-img" src="https://benhvienphusanhanoi.com/wp-content/uploads/2021/06/z2544450906451_23a0b71ad964fcccdfadae264e9636e5-e1623322328293.jpg" alt="" onerror="this.onerror=null;this.src='./asset/img/quyenloikhachhang.jpg'">
                        </a>
                    </div>
                    <div class="post__text">
                        <h3><a href="" class="post__title-link">Quyền lợi của khách hàng
                                khi sử dụng dịch vụ đẻ/mổ đẻ</a></h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video container -->
        <div class="video-container">

            <!-- Video content wrapper-->
            <div class="video__content-wrapper">
                <!-- video heading -->
                <div class="video__heading">
                    <h4>MỖI NGÀY MỘT CÂU CHUYỆN</h4>
                </div>
                <!-- ./ video heading -->

                <!-- video playlist -->
                <div class="video__wrap">

                    <!-- video iframe -->
                    <div class="video__iframe">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLBXww9xAamNi3ZkaHht45AXytH8-kXQw8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Bh_3Nf0SGO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    </div>
                    <!-- ./ video iframe -->

                    <!-- video menu -->
                    <div class="video__menu">
                        <div class="video__menu-heading">
                            <span class="menu-heading__left">Mỗi ngày một câu chuyện</span>
                            <span class="menu-heading__right">8 video</span>
                        </div>
                        <ul class="video-menu__list">
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                            <li class="video-menu__item">
                                <img class="video-item__thumbail" src="https://img.youtube.com/vi/EWpd5y_Ohco/maxresdefault.jpg" alt="">
                                <span class="video-item__title">[Mỗi ngày 1 câu chuyện] Tớ đã đến với thế giới này
                                    như thế nào?</span>
                                <span class="video-item__time">1:41</span>
                            </li>
                        </ul>
                    </div>
                    <!-- ./ video menu -->
                </div>
                <!-- ./ video playlist -->

                <!-- video link youtube -->
                <div class="video__linkplus">
                    <div class="video__linkplus-title">
                        <h5>Xem thêm nhiều hơn những câu chuyện hàng ngày 👉</h5>
                    </div>
                    <div class="video__linkplus-btn">
                        <a href="" class="linkplus__link">
                            <span class="linkplus-link__content">
                                <span>
                                    <i class="fab fa-youtube"></i>
                                </span>
                                <span>Xem thêm</span>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- ./ video link youtube -->

                <!-- video message -->
                <div class="video__message">
                    <p>Phòng khám FStack là phòng khám chuyên khoa hạng I của thành phố trong lĩnh vực Sản
                        Phụ
                        Khoa và Kế hoạch hóa gia đình. Với sứ mệnh "<span class="video-message__strong"> Phát triển,
                            bảo vệ và giữ gìn sức khỏe phụ nữ và
                            trẻ
                            em Việt Nam </span>", các y bác sỹ bệnh viện đã cùng nhau tạo ra những điều kì diệu
                        trong suốt 40
                        năm nỗ
                        lực phát triển.</p>
                </div>
                <!-- ./ video message -->
            </div>
            <!-- ./ Video content wrapper -->
        </div>
        <!-- ./ Video container -->

        <!-- Mail container -->
        <div class="mail-container">
            <div class="mail-title">
                <p>Nhập địa chỉ email để nhận ưu đãi mới nhất từ phòng khám</p>
            </div>
            <form action="./includes/guiMail.php" method="post">
                <div class="mail-content">
                    <label for="email">Nhập địa chỉ email:</label>
                    <input type="email" name="email" id="email">
                    <button type="submit" name="send">Gửi</button>
                </div>
            </form>
        </div>
        <!-- ./ Mail container -->

        <!-- Message container -->
        <div class="message-container">
            <div class="message-text">
                <p>Trong từng viên gạch của bệnh viện này có nhịp đập của hàng vạn trái tim phụ nữ trên toàn thế
                    giới, hướng về phụ nữ và trẻ em Việt Nam anh hùng.</p>
            </div>
            <div class="message-logo">
                <div>
                    <img class="logo-image" src="https://benhvienphusanhanoi.com/wp-content/plugins/elementor/assets/images/placeholder.png" alt="Không thể hiển thị" onerror="this.onerror=null;this.src='./asset/img/placeholder.jpg'">
                </div>
                <div class="logo-brand">
                    <span class="logo-brand__name">Federa Brown</span>
                    <span class="logo-brand__title">Chủ tịch Liên đoàn phụ nữ </span>
                </div>
            </div>
        </div>
        <!-- ./ Message container -->

        <!-- End container -->
        <div class="end-container"></div>
        <!-- ./ End container -->
    </div>
</div>
<!-- ./ container -->
<?php include "./includes/footer.php" ?>