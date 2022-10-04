-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 09:33 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_phongkham`
--
CREATE DATABASE IF NOT EXISTS `website_phongkham` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `website_phongkham`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bacsi`
--

CREATE TABLE `bacsi` (
  `ID` int(11) NOT NULL,
  `MaBacSi` varchar(10) NOT NULL,
  `TenBacSi` varchar(50) NOT NULL,
  `GioiTinh` varchar(4) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` text NOT NULL,
  `MaKhoa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bacsi`
--

INSERT INTO `bacsi` (`ID`, `MaBacSi`, `TenBacSi`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `MaKhoa`) VALUES
(17, 'BS11', 'Đào Xuân Mạnh', 'Nam', '038492394', 'xnxaksk@gmail.com', 'Hà Nội', 1),
(18, 'BS21', 'Nguyễn Minh Đức', 'Nam', '09329843', 'xbabxjaj@gmail.com', 'Hưng Yên', 2),
(19, 'BS31', 'Phạm Ngọc Huế', 'Nam', '09786428', 'bcajkjkhfi@gmail.com', 'Ninh Bình', 3),
(20, 'BS41', 'Đặng Thị Quỳnh Anh', 'Nữ', '03472687', 'cjagdj@gmail.com', 'Hưng Yên', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` int(10) NOT NULL,
  `TenKhoa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
(1, 'Khoa Mắt'),
(2, 'Khoa tai mũi họng'),
(3, 'Khoa nội soi'),
(4, 'Phòng X quang'),
(5, 'Phòng xét nhiệm'),
(6, 'Phòng khám phụ sản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhen`
--

CREATE TABLE `lichhen` (
  `MaLichHen` int(11) NOT NULL,
  `TenKhachHang` varchar(50) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `MaKhoa` int(10) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `NgayKham` date NOT NULL,
  `ThoiGian` time NOT NULL,
  `MoTa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lichhen`
--

INSERT INTO `lichhen` (`MaLichHen`, `TenKhachHang`, `SDT`, `MaKhoa`, `DiaChi`, `NgayKham`, `ThoiGian`, `MoTa`) VALUES
(31, 'Bệnh Nhân 1', '03792876', 1, 'Thái Bình', '2021-11-29', '00:55:00', 'Đau mắt'),
(32, 'Bệnh Nhân 2', '023783232', 1, 'Hà Nam', '2021-11-30', '00:57:00', 'CBA'),
(34, 'Bệnh Nhân 4', '03993242', 1, 'SFS', '2021-12-03', '04:59:00', 'Đau cccs');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Quyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`, `Quyen`) VALUES
(3, 'BS1', '1234', 1),
(10, 'admin', '1234', 0),
(18, 'BS11', '123456', 1),
(19, 'BS21', '1234', 1),
(20, 'BS31', '1234', 1),
(21, 'BS41', '1234', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ID_BaiViet` int(10) NOT NULL,
  `TieuDe` varchar(500) DEFAULT NULL,
  `NoiDung` text DEFAULT NULL,
  `User_ID` varchar(20) DEFAULT NULL,
  `Is_Public` int(11) DEFAULT 0,
  `Ngay_Tao` datetime DEFAULT NULL,
  `Ngay_Sua` datetime DEFAULT NULL,
  `AnhThumbnail` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`ID_BaiViet`, `TieuDe`, `NoiDung`, `User_ID`, `Is_Public`, `Ngay_Tao`, `Ngay_Sua`, `AnhThumbnail`) VALUES
(60, 'Phát hiện rủi ro sức khỏe bằng qua khám chuyên khoa Tim Mạch', '<p>Bệnh mạch v&agrave;nh thường được gọi l&agrave; &ldquo;s&aacute;t thủ&rdquo; đ&aacute;ng gờm của nh&acirc;n loại v&igrave; đ&acirc;y l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y tử vong h&agrave;ng đầu tr&ecirc;n thế giới. Nếu đ&atilde; được chẩn đo&aacute;n c&oacute; nguy cơ mắc bệnh tim mạch, bệnh nh&acirc;n n&ecirc;n đi&nbsp;<a href=\"https://ocaclinic.vn/dich-vu/kham-tim-mach\">kh&aacute;m tim mạch</a>&nbsp;sớm để được r&agrave; so&aacute;t to&agrave;n diện nhằm hiểu r&otilde; bệnh, c&aacute;c biện ph&aacute;p ph&ograve;ng ph&ograve;ng ngừa cần phải c&oacute; v&agrave; tr&aacute;nh rủi ro cho sức khỏe.</p>\r\n\r\n<p><strong>NGUY CƠ TỪ BỆNH MẠCH V&Agrave;NH?</strong></p>\r\n\r\n<p>Khi kết quả x&eacute;t nghiệm đ&aacute;nh gi&aacute; nguy cơ tim mạch cao, điều đ&oacute; đồng nghĩa mang việc bệnh nh&acirc;n c&oacute; khả năng mắc c&aacute;c bệnh mạch v&agrave;nh cao hơn. Những yếu tố ảnh hưởng đến kết quả&nbsp; c&oacute; thể bao gồm tuổi t&aacute;c, giới t&iacute;nh, mắc c&aacute;c bệnh li&ecirc;n quan (như cao huyết &aacute;p v&agrave; tiểu đường), chỉ số khối cơ thể (BMI), c&aacute;c yếu tố di truyền, h&uacute;t thuốc, v&agrave; lối sống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p><br />\r\nNh&oacute;m đối tượng c&oacute; nguy cơ mắc bệnh mạch v&agrave;nh cần c&oacute; c&aacute;c biện ph&aacute;p ph&ograve;ng ngừa v&agrave; tr&aacute;nh rủi ro sức khỏe. Bệnh nh&acirc;n n&ecirc;n tập thể dục đều đặn v&agrave; duy tr&igrave; chế độ ăn uống c&acirc;n bằng để giảm nguy cơ mắc bệnh. Nếu đ&atilde; mắc bệnh, bệnh nh&acirc;n c&oacute; thể được k&ecirc; toa đặc trị nhằm kiểm so&aacute;t v&agrave; kh&ocirc;ng cho bệnh tiến triển, v&iacute; dụ như uống thuốc ổn định hoặc đ&aacute;nh tan<br />\r\nmảng b&aacute;m th&agrave;nh mạch.</p>\r\n\r\n<p><strong>KH&Aacute;M TẦM SO&Aacute;T BỆNH TIM MẠCH</strong></p>\r\n\r\n<p>G&oacute;i tầm so&aacute;t v&agrave; trả lời bệnh tim mạch bao gồm c&aacute;c hạng mục sau:<br />\r\n+ Tư vấn chuy&ecirc;n s&acirc;u mang B&aacute;c Sĩ Nội Tim Mạch<br />\r\n+ Đo&nbsp;<a href=\"https://ocaclinic.vn/dich-vu/dien-tam-do\">điện t&acirc;m đồ</a>&nbsp;12 chuyển đạo l&uacute;c nghỉ<br />\r\n+&nbsp;<a href=\"https://ocaclinic.vn/dich-vu/sieu-am-tim\">Si&ecirc;u &acirc;m tim</a><br />\r\n+ Si&ecirc;u &acirc;m Doppler động mạch cảnh</p>\r\n\r\n<p><img alt=\"TEst\" src=\"https://th.bing.com/th/id/R.34929f78fb5b6dd4fc02a77f06dae8a7?rik=upPocOtB9r2Qcw&amp;pid=ImgRaw&amp;r=0\" style=\"height:400px; margin:3px; width:600px\" /></p>\r\n\r\n<p>B&aacute;c sĩ tim mạch sẽ giải đ&aacute;p chuy&ecirc;n s&acirc;u về c&aacute;c thủ thuật hoặc k&ecirc; toa thuốc cần thiết ngay khi c&oacute; kết quả. Ngo&agrave;i ra, b&aacute;c sĩ c&oacute; thể chỉ định thực h&agrave;nh th&ecirc;m một số x&eacute;t nghiệm kh&ocirc;ng bao gồm trong g&oacute;i kh&aacute;m như:</p>\r\n\r\n<p>+ Đ&aacute;nh gi&aacute; chuyển h&oacute;a lipid m&aacute;u trong cơ thể<br />\r\n+ X&eacute;t nghiệm Glucose<br />\r\n+ Điện t&acirc;m đồ Holter 24h<br />\r\n+ Đo điện tim gắng sức<br />\r\n+ Chụp mạch v&agrave;nh</p>\r\n', 'admin', 1, '2021-11-29 11:41:04', '2021-11-29 11:41:04', '../public/image/image_SinhTo.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_bs_khoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD PRIMARY KEY (`MaLichHen`),
  ADD KEY `fk_lichhen_khoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID_BaiViet`),
  ADD KEY `User_ID` (`User_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKhoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  MODIFY `MaLichHen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID_BaiViet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bacsi`
--
ALTER TABLE `bacsi`
  ADD CONSTRAINT `fk_bs_khoa` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD CONSTRAINT `fk_lichhen_khoa` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `login` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
