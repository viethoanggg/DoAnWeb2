-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2019 lúc 02:31 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(10) NOT NULL,
  `MaKH` varchar(10) NOT NULL,
  `NgayDatHang` datetime NOT NULL,
  `DiaChi` varchar(500) NOT NULL,
  `HinhThucThanhToan` varchar(100) NOT NULL,
  `HinhThucGiaoHang` varchar(100) NOT NULL,
  `TongSoLuong` int(10) NOT NULL,
  `TongTien` int(20) NOT NULL,
  `TinhTrang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `NgayDatHang`, `DiaChi`, `HinhThucThanhToan`, `HinhThucGiaoHang`, `TongSoLuong`, `TongTien`, `TinhTrang`) VALUES
('HD0', 'KH0', '2017-02-11 10:33:08', '478 Cách Mạng Tháng Tám, phường 11, Quận 3, TP. Hồ Chí Minh', '3', '1', 4, 530650, 'Chưa thanh toán xong'),
('HD1', 'KH1', '2019-02-12 17:28:25', '12/33 Ngyễn Sỹ Sách , P15, Q.Tân Bình, TP HCM', '3', '1', 3, 240400, 'Đã thanh toán xong'),
('HD2', 'KH2', '2018-01-03 09:23:26', '123 Trường Trinh, Q.Tân Bình, TP HCM', '3', '1', 2, 207400, 'Đã thanh toán xong'),
('HD3', 'KH3', '2019-04-26 14:18:38', '189A Cống Quỳnh, phường Nguyễn Cư Trinh, Quận 1, TP. Hồ Chí Minh', '3', '1', 2, 311200, 'Chưa thanh toán xong'),
('HD4', 'KH4', '2019-04-25 07:44:31', '58 Nguyễn Trãi, Phường 3, Quận 5, TP. Hồ Chí Minh', '3', '1', 5, 422900, 'Chưa thanh toán xong');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
