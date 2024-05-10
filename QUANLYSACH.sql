CREATE DATABASE QUANLYSACH;
USE QUANLYSACH;
CREATE TABLE Sach (
    MaSach INT AUTO_INCREMENT PRIMARY KEY,
    TenSach VARCHAR(255),
    SoLuong INT
);

CREATE TABLE User (
    MaUser INT AUTO_INCREMENT PRIMARY KEY,
    TenUser VARCHAR(255),
    MatKhau VARCHAR(255)
);

INSERT INTO Sach (TenSach, SoLuong) VALUES
('Sách 1', 10),
('Sách 2', 15),
('Sách 3', 20),
('Sách 4', 8),  
('Sách 5', 12);

INSERT INTO User (TenUser, MatKhau) VALUES
('User 1', 'password1'),
('User 2', 'password2'),
('User 3', 'password3'),
('User 4', 'password4'),
('User 5', 'password5');
