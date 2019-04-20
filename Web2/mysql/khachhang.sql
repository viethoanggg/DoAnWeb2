-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 07:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(10) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `TenDangNhap` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `TrangThai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTen`, `TenDangNhap`, `MatKhau`, `Email`, `TrangThai`) VALUES
('KH0', 'Lê Lai', 'lelai2010', 'lai123456', 'lelai2010@gmail.com', '0'),
('KH1', 'Hoàng Minh', 'minhcute123456', '123456789', 'minhhoang@gmail.com', '0'),
('KH10', 'Đoàn Nhật Minh', 'MinhL1', 'minh123456', 'minhdoan@gmail.com', '0'),
('KH11', 'Cao Quốc Đạt', 'datcao', '147777999', 'caodat@gmail.com', '0'),
('KH12', 'Nguyễn Khanh ', 'khanhkhanh', 'khanh123456', 'khanhnguyen@gmail.com', '0'),
('KH13', 'Nguyễn Nguyên Bình', 'binhgold', '123456', 'binhnguyen@gmail.com', '0'),
('KH14', 'Nguyễn Thúy Quỳnh', 'datcao33', 'quynh123456', 'quynhthuy@gmail.com', '0'),
('KH15', 'Nguyễn Nhân', 'nhando123', 'nhan1456', 'nhandinh@gmail.com', '0'),
('KH2', 'Hoàng Hiệp', 'hieppro123654', 'hiep1234', 'hiephhh999@gmail.com', '0'),
('KH3', 'Đỗ Quang Hải', 'haiquang123456', 'haihai123456', 'doquanghai@gmail.com', '0'),
('KH4', 'Bùi Tiến Dũng', 'dungtien456', '147852369', 'buitiendung@gmail.com', '0'),
('KH5', 'Trần Nguyên Chương', 'chuongbolao123456', '123456', 'chuongtran@gmail.com', '0'),
('KH6', 'Vũ Quang Huy', 'huyhuy1111', 'QuangHUy123456', 'vuhuy@gmail.com', '0'),
('KH7', 'Đỗ Hữu Phước', 'phuocbolao123456', 'pbl1999', 'dohuuphuoc@gmail.com', '0'),
('KH8', 'Cù Anh Đức', 'ducanh123', 'duccop123456', 'cuanhduc@gmail.com', '0'),
('KH9', 'Hoàng Nhung', 'nhunghoang123456', 'HoangNhung123456', 'nhungnun@gmail.com', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
