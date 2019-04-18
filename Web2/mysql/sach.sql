-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 06:47 AM
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
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `MaSach` varchar(10) NOT NULL,
  `MaTheLoai` varchar(10) NOT NULL,
  `MaTacGia` varchar(10) NOT NULL,
  `TenSach` varchar(100) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MaSach`, `MaTheLoai`, `MaTacGia`, `TenSach`, `HinhAnh`, `Gia`) VALUES
('CN0', 'CN', 'TG44', '101 Bộ Phim Việt Nam Hay Nhất', 'CN0.png', 178500),
('CN1', 'CN', 'TG45', 'Vật Lý Thiên Văn Cho Người Vội Vã', 'CN1.png', 68000),
('CN10', 'CN', 'TG54', 'Cửa Hàng Kỳ Ảo', 'CN10.png', 49600),
('CN11', 'CN', 'TG56', 'Các Thế Giới Song Song', 'CN11.png', 94400),
('CN12', 'CN', 'TG57', 'Khu Vườn Thời Gian', 'CN12.png', 55200),
('CN13', 'CN', 'TG58', 'Haiku - Đồng Vọng Bốn Mùa', 'CN13.png', 64000),
('CN14', 'CN', 'TG59', 'Thiên Đường Nhiệt Đới', 'CN14.png', 54400),
('CN15', 'CN', 'TG00', 'Lịch Sử Tự Nhiên', 'CN15.png', 586500),
('CN16', 'CN', 'TG60', 'Lịch Sử Việt Nam, Từ Nguồn Gốc Đến Giữa Thế Kỷ XX', 'CN16.png', 144000),
('CN17', 'CN', 'TG61', 'Khoa Học Khám Phá - Một Vũ Trụ Lạ Thường', 'CN17.png', 126650),
('CN18', 'CN', 'TG62', 'Ai Cập Sinh Tử Kỳ Thư', 'CN18.png', 76000),
('CN2', 'CN', 'TG46', 'Xã Hội Việt Nam', 'CN2.png', 73100),
('CN3', 'CN', 'TG47', 'BÀN VỀ VĂN MINH', 'CN3.png', 118150),
('CN4', 'CN', 'TG48', 'Sự Trỗi Dậy Và Suy Tàn Của Đế Chế Thứ Ba - Lịch Sử Đức Quốc Xã', 'CN4.png', 276000),
('CN5', 'CN', 'TG49', 'NAPOLEON Đại Đế', 'CN5.png', 346800),
('CN6', 'CN', 'TG50', 'Lịch Sử Chiến Tranh Peloponnese', 'CN6.png', 207200),
('CN7', 'CN', 'TG51', 'Trí Tuệ Giả Tạo - Internet Đã Làm Gì Chúng Ta?', 'CN7.png', 72250),
('CN8', 'CN', 'TG52', 'Chuyện Nhỏ Trong Thế Giới Lớn', 'CN8.png', 93500),
('CN9', 'CN', 'TG53', 'Chín Tháng Mười Ngày', 'CN9.png', 52000),
('KNS0', 'KNS', 'TG01', 'YÊU X SỐNG X PHONG CÁCH', 'KNS0.png', 169150),
('KNS1', 'KNS', 'TG02', 'LAGOM – BIẾT ĐỦ MỚI LÀ TỰ DO', 'KNS1.png', 127200),
('KNS10', 'KNS', 'TG11', 'Bản Kế Hoạch Thay Đổi Định Mệnh', 'KNS10.png', 63200),
('KNS11', 'KNS', 'TG12', 'Nghệ Thuật Tư Duy Rành Mạch', 'KNS11.png', 87150),
('KNS12', 'KNS', 'TG13', 'Nói Luôn Cho Nó Vuông', 'KNS12.png', 64000),
('KNS2', 'KNS', 'TG03', 'Hộ chiếu hạnh phúc', 'KNS2.png', 55200),
('KNS3', 'KNS', 'TG04', 'Công Thức Nấu Ăn Tặng Con Gái', 'KNS3.png', 117300),
('KNS4', 'KNS', 'TG05', 'Những Câu Hỏi Triết Học Từ Bé Tới Lớn', 'KNS4.png', 93500),
('KNS5', 'KNS', 'TG06', 'Thả Thính Là Phải Dính! - 54 Cách Giúp Bạn Tán Đổ \"Crush\"', 'KNS5.png', 95200),
('KNS6', 'KNS', 'TG07', 'Bộ Sách - Elmer Và Những Người Bạn (Bộ 6 Cuốn)', 'KNS6.png', 140400),
('KNS7', 'KNS', 'TG08', 'Mình Là Cá, Việc Của Mình Là Bơi', 'KNS7.png', 71200),
('KNS8', 'KNS', 'TG09', 'Mặc Kệ Thiên Hạ - Sống Như Người Nhật', 'KNS8.png', 63200),
('KNS9', 'KNS', 'TG10', 'The Secret – Sức Mạnh', 'KNS9.png', 178200),
('KT0', 'KT', 'TG16', 'Quyền Năng Làm Giàu', 'KT0.PNG', 84150),
('KT1', 'KT', 'TG17', 'Bí Quyết Của Các Tỷ Phú Tư Thân Lập Nghiệp', 'KT1.PNG', 95200),
('KT10', 'KT', 'TG00', 'Lý Thuyết Trò Chơi Trong Kinh Doanh', 'KT10.PNG', 88000),
('KT11', 'KT', 'TG25', 'Nhật Bản Duy Tân 30 Năm', 'KT11.PNG', 87200),
('KT12', 'KT', 'TG26', 'Nóng, Phẳng, Chật (Tái Bản 2014)', 'KT12.PNG', 140250),
('KT13', 'KT', 'TG27', 'Tình Yêu Hàng Hiệu', 'KT13.PNG', 176800),
('KT14', 'KT', 'TG28', 'Hùng Biện Kiểu Ted 1 - Bí Quyết Diễn Thuyết Trước Đám Đông “Chuẩn” Ted (Tái Bản 2018)', 'KT14.PNG', 135200),
('KT15', 'KT', 'TG29', 'Tương Lai Nghề Nghiệp Của Tôi', 'KT15.PNG', 103200),
('KT16', 'KT', 'TG30', 'Lãnh Đạo Giỏi Hỏi Câu Hỏi Hay', 'KT16.PNG', 103200),
('KT17', 'KT', 'TG31', 'Nhà Đào Tạo Sành Sỏi', 'KT17.PNG', 119200),
('KT18', 'KT', 'TG32', 'Khả Năng Cải Thiện Nghịch Cảnh', 'KT18.PNG', 170000),
('KT2', 'KT', 'TG16', 'Làm Giàu', 'KT2.PNG', 90100),
('KT3', 'KT', 'TG18', 'Bí Mật Dotcom', 'KT3.PNG', 142800),
('KT4', 'KT', 'TG19', 'Tỷ Phú \"Khùng\" Jack Ma Và Đế Chế Alibaba', 'KT4.PNG', 82170),
('KT5', 'KT', 'TG20', 'Uber - Chuyến Đi Bão Táp', 'KT5.PNG', 159200),
('KT6', 'KT', 'TG21', 'Gã Nghiện Giày - Tự Truyện Của Nhà Sáng Lập NIKE', 'KT6.PNG', 136000),
('KT7', 'KT', 'TG22', 'Con Đường Tỷ Phú - Hồi Ký Rich Devos', 'KT7.PNG', 134300),
('KT8', 'KT', 'TG23', 'Tiến Bước', 'KT8.PNG', 123250),
('KT9', 'KT', 'TG24', 'Siêu dự báo', 'KT9.PNG', 175200),
('LS0', 'LS', 'TG63', 'Lịch sử Việt Nam', 'LS0.png', 160000),
('LS1', 'LS', 'TG64', 'Bão táp triều Trần', 'LS1.png', 600000),
('LS2', 'LS', 'TG65', 'Lịch sử của sức mạnh trên biển', 'LS2.png', 161500),
('LS3', 'LS', 'TG66', 'SÀI GÒN - CHỢ LỚN QUA NHỮNG TƯ LIỆU QUÝ TRƯỚC 1945', 'LS3.png', 119000),
('LS4', 'LS', 'TG67', 'Việt sử diễn nghĩa ', 'LS4.png', 151200),
('LS5', 'LS', 'TG68', 'Giao điểm giữa hai nên văn hóa Việt Nam - Nhật Bản', 'LS5.png', 100000),
('NN0', 'NN', 'TG33', 'Thần Chú Ngữ Pháp Của Winnie - Học Tiếng Anh Dễ Như Ăn Bánh', 'NN0.PNG', 74700),
('NN1', 'NN', 'TG34', 'Master Toefl Junior Basic (CEFR Level A2) - Kèm 1 CD', 'NN1.PNG', 158000),
('NN2', 'NN', 'TG00', 'IELTS Success Formula - Academic (Kèm 1 CD)', 'NN2.PNG', 298000),
('NN3', 'NN', 'TG00', 'Model Essays For IELTS Writing', 'NN3.PNG', 198000),
('NN4', 'NN', 'TG00', 'TOEFL 600 Essential Flashcards For Toefl iBT', 'NN4.PNG', 185300),
('NN5', 'NN', 'TG00', 'Developing Skills For The TOEFL iBT Intermediate (Kèm 10 CD)', 'NN5.PNG', 272000),
('TN0', 'TN', 'TG39', 'Ở Tiệm Những Tấm Bản Đồ Bị Lãng Quên', 'TN0.png', 87200),
('TN1', 'TN', 'TG40', 'Chó Xanh Lông Dài', 'TN1.png', 78000),
('TN2', 'TN', 'TG41', 'Atlas Muôn Loài', 'TN2.png', 123250),
('TN3', 'TN', 'TG42', 'Dế Mèn Phiêu Lưu Ký', 'TN3.png', 108000),
('TN4', 'TN', 'TG00', 'Những Nàng Tiên Trên Cây Màu Nhiệm', 'TN4.png', 127500),
('TN5', 'TN', 'TG44', 'Tom Sawyer Trên Khinh Khí Cầu & Tom Sawyer Làm Thám Tử', 'TN5.png', 56000),
('TT0', 'TT', 'TG69', 'Bạn Trai Bản Giới Hạn', 'TT0.PNG', 74800),
('TT1', 'TT', 'TG70', 'Con Mèo Số Một Thế Giới', 'TT1.PNG', 69700),
('TT10', 'TT', 'TG76', 'Chuỗi Hạt Azoth', 'TT10.PNG', 56700),
('TT11', 'TT', 'TG73', 'Chúc Một Ngày Tốt Lành', 'TT11.PNG', 84150),
('TT12', 'TT', 'TG73', 'Ngồi Khóc Trên Cây', 'TT12.PNG', 93500),
('TT13', 'TT', 'TG73', 'Có Hai Con Mèo Ngồi Bên Cửa Sổ', 'TT13.PNG', 72250),
('TT14', 'TT', 'TG73', 'Lá Nằm Trong Lá', 'TT14.PNG', 59500),
('TT15', 'TT', 'TG73', 'Cô Gái Đến Từ Hôm Qua', 'TT15.PNG', 38250),
('TT16', 'TT', 'TG73', 'Những Cô Em Gái', 'TT16.PNG', 43350),
('TT17', 'TT', 'TG73', 'Quán Gò Đi Lên', 'TT17.PNG', 52700),
('TT18', 'TT', 'TG73', 'Ngôi Trường Mọi Khi', 'TT18.PNG', 50150),
('TT2', 'TT', 'TG71', 'Ngàn Hạc Giấy Của Sadako', 'TT2.PNG', 58500),
('TT3', 'TT', 'TG72', 'Đống Mềm Nhũn Hạnh Phúc', 'TT3.PNG', 61200),
('TT4', 'TT', 'TG73', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 'TT4.PNG', 69700),
('TT5', 'TT', 'TG73', 'Con Chó Nhỏ Mang Giỏ Hoa Hồng', 'TT5.PNG', 76500),
('TT6', 'TT', 'TG74', 'Nana Du Ký', 'TT6.PNG', 72000),
('TT7', 'TT', 'TG73', 'Tôi Là Bêtô', 'TT7.PNG', 51000),
('TT8', 'TT', 'TG73', 'Cho Tôi Xin Một Vé Đi Tuổi Thơ', 'TT8.PNG', 53550),
('TT9', 'TT', 'TG75', 'Trời Xanh Của Táo', 'TT9.PNG', 63200),
('VH0', 'VH', 'TG77', '1987 Rồi', 'VH0.PNG', 126400),
('VH1', 'VH', 'TG78', 'Thành Long Chưa Lớn Đã Già', 'VH1.PNG', 124000),
('VH10', 'VH', 'TG87', 'Điểm Dối Lừa (Tái Bản 2018)', 'VH10.PNG', 148000),
('VH11', 'VH', 'TG88', 'Dị Chủng', 'VH11.PNG', 96000),
('VH12', 'VH', 'TG89', 'Hành Trình Tarot – Hiểu Về Quá Khứ, Tin Ở Hiện Tại, Nắm Lấy Tương Lai', 'VH12.PNG', 79200),
('VH13', 'VH', 'TG90', 'Đỏ Và Đen', 'VH13.PNG', 110700),
('VH14', 'VH', 'TG91', 'Jane Eyre', 'VH14.PNG', 108000),
('VH15', 'VH', 'TG92', 'Bài Hát Tuổi 17', 'VH15.PNG', 75200),
('VH16', 'VH', 'TG00', 'Dear Your Love - Gửi Người Yêu Dấu', 'VH16.PNG', 95200),
('VH17', 'VH', 'TG93', 'Tất Cả Đều Là Sự Sắp Xếp Tốt Nhất ', 'VH17.PNG', 94400),
('VH18', 'VH', 'TG94', 'Ngày Mười Tháng Mười Hai', 'VH18.PNG', 64780),
('VH2', 'VH', 'TG79', 'Thế Giới Ngầm Tokyo', 'VH2.PNG', 127200),
('VH3', 'VH', 'TG80', 'Nhật Ký Tuổi Trẻ - Lắng Nghe Gió Hát', 'VH3.PNG', 67500),
('VH4', 'VH', 'TG81', 'Ở Đây Sửa Kỷ Niệm Xưa - Tập 1', 'VH4.PNG', 92650),
('VH5', 'VH', 'TG82', 'Cùng Nhau Lớn Lên, Cùng Nhau Già Đi', 'VH5.PNG', 76000),
('VH6', 'VH', 'TG83', 'Chuyến tàu sinh tử', 'VH6.PNG', 119200),
('VH7', 'VH', 'TG84', 'Tội ác ở Orcival', 'VH7.PNG', 125600),
('VH8', 'VH', 'TG85', 'Ảo Dạ', 'VH8.PNG', 126640),
('VH9', 'VH', 'TG86', 'Sinh Tử (Chạng Vạng Mới)', 'VH9.PNG', 153000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
