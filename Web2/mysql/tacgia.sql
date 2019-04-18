-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2019 at 04:16 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webbansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE IF NOT EXISTS `tacgia` (
  `MaTacGia` varchar(10) NOT NULL,
  `TenTacGia` varchar(100) NOT NULL,
  PRIMARY KEY (`MaTacGia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`MaTacGia`, `TenTacGia`) VALUES
('TG01', 'Garance Doré'),
('TG02', 'Niki Brantmark'),
('TG03', 'Ehara Hiroyuki'),
('TG04', 'Gong Ji Young'),
('TG05', 'Michel Piquemal, Thomas Baas'),
('TG06', 'Windy'),
('TG07', 'David McKee'),
('TG08', 'Takeshi Furukawa'),
('TG09', 'Mari Tamagawa'),
('TG10', 'Rhonda Byrne'),
('TG11', 'Michael Hyatt - Daniel Harkavy'),
('TG12', 'Rolf Dobelli'),
('TG13', 'Steve Harvey'),
('TG16', 'Napoleon Hill'),
('TG17', 'John Sviokla, Mitch Cohen'),
('TG18', 'Russell Brunson'),
('TG19', 'Duncan Clark'),
('TG20', 'Adam Lashinsky'),
('TG21', 'Phil Knight'),
('TG22', 'Rich DeVos'),
('TG23', 'Howard Schultz'),
('TG24', 'Philip E. Tetlock, Dan Gardner'),
('TG00', 'Nhiều tác giả'),
('TG25', 'Đào Trinh Nhất'),
('TG26', 'Thomas Friedman'),
('TG27', 'Radha Chadha, Paul Husband'),
('TG28', 'Chris Anderson'),
('TG29', 'Kim Rando'),
('TG30', 'John C Maxwell'),
('TG31', 'Đỗ Huân'),
('TG32', 'Nassim Nicholas Taleb'),
('TG33', 'Romi Park'),
('TG34', 'Richie Hahn'),
('TG39', 'Ulysses Moore'),
('TG40', 'Hwang Sun-mi'),
('TG41', 'Virginie Aladjidi - Emmanuelle Tchoukriel'),
('TG42', 'Tô Hoài'),
('TG43', 'Mark Twain'),
('TG44', 'Nhã Nam'),
('TG45', 'Neil deGrasse Tyson'),
('TG46', 'Lương Đức Thiệp'),
('TG47', 'Fukuzawa Yukichi'),
('TG48', 'William L. Shirer'),
('TG49', 'Andrew Roberts'),
('TG50', 'Thucydides'),
('TG51', 'Thucydides'),
('TG52', 'E. H. Gombrich'),
('TG53', 'Juliet Jue - Sunghee Shin'),
('TG54', 'Ji Soo-Yeon'),
('TG56', 'Michio Kaku'),
('TG57', 'Song Ji Hye'),
('TG58', 'Nancy Peña'),
('TG59', 'Millie Marotta'),
('TG60', 'Lê Thành Khôi'),
('TG61', 'Robert B.Laughlin'),
('TG62', 'Minh Quang'),
('TG63', 'Đào Duy Anh'),
('TG64', 'Hoàng Quốc Hải'),
('TG65', 'Alfred Thayer Mahan'),
('TG66', 'Nguyễn Đức Hiệp'),
('TG67', 'Tôn Thất Hân - Hồng Nhung - Hồng Thiết'),
('TG68', 'Vĩnh Sính'),
('TG69', 'MISA'),
('TG70', 'Higuchi Yuko'),
('TG71', 'Sasaki Masahiro'),
('TG72', 'Sarah Anderson'),
('TG78', 'Chu Mặc'),
('TG77', 'Lý Dịch Phong'),
('TG76', 'Phan Hồn Nhiên'),
('TG75', 'Vũ Hữu Nhân'),
('TG74', 'Arikawa Hiro'),
('TG73', 'Nguyễn Nhật Ánh'),
('TG79', 'Jake Adelstein'),
('TG80', 'Haruki Murakami'),
('TG81', 'Tani Mizue'),
('TG82', 'Thủy Miểu'),
('TG83', 'Next Entertainment World'),
('TG84', 'Émile Gaboriau'),
('TG85', 'Higashino Keigo'),
('TG86', 'Stephenie Meyer'),
('TG87', 'Dan Brown'),
('TG88', 'Guillermo Del Toro - Chuck Hogan'),
('TG89', 'TADA Project'),
('TG90', 'Stendhal'),
('TG91', 'Charlotte Bronte'),
('TG92', 'Sakai Kikuko'),
('TG93', 'Cinderella'),
('TG94', 'George Saunders');
