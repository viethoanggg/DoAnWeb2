-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2019 lúc 09:58 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

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
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(20) NOT NULL,
  `TenKH` varchar(100) NOT NULL,
  `TenDangNhap` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `MaQuyen` int(1) NOT NULL,
  `NgaySinh` date NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `TenDangNhap`, `MatKhau`, `MaQuyen`, `NgaySinh`, `SDT`, `Email`) VALUES
('KH001               ', 'Lê Việt Hoàng', 'viethoang', '123456', 1, '1999-01-01', '01234567890', 'viethoang@gmail.com'),
('KH002', 'Hoàng Minh Triết', 'triet123', '654321', 1, '1999-01-01', '09876543210', 'hoangminhtriet@gmail.com'),
('KH003', 'Ninh Ngọc Hiếu', 'ninhngochieu', '987654', 1, '1999-01-01', '01239876540', 'ninhngochieu@gmail.com'),
('KH004', 'Nguyễn Văn A', 'nguyenvana', '789456', 2, '1998-02-02', '01236549870', 'nguyenvana@gmail.com'),
('KH005', 'Hán Thái Diêm', 'hanthaidiem123', '11223344', 3, '1999-03-02', '0397536541', 'diem123@gmail.com'),
('KH006', 'Trịnh Đức Hiếu', 'hieu456', '123456', 3, '1999-12-01', '0376547891', 'hieucute@gmail.com'),
('KH007', 'Nguyễn Đắc Toàn', 'dactoan', '789456', 2, '1999-08-08', '03465987632', 'dactoan@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
