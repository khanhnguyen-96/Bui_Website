CREATE DATABASE Bui;
USE Bui;
CREATE TABLE KhachHang(
  MaKhachHang INT     NOT NULL,
  NgaySinh    Date,
  DiaChi      VarChar(30),   
  PRIMARY KEY(MaKhachHang)
);

CREATE TABLE DiaDiem(
  MaDiaDiem   INT     NOT NULL,
  Thongtin    VarChar(100),
  PRIMARY KEY(MaDiaDiem)
);

CREATE TABLE DatVe (
  MaVe        INT   NOT NULL,
  MaKhachHang INT   NOT NULL,
  MaDiaDiem     INT   NOT NULL,
  Thoigian    Date,
  Gia         DECIMAL(10),
  PRIMARY KEY(MaVe),
  FOREIGN KEY(MaKhachHang) REFERENCES KhachHang (MaKhachHang),
  FOREIGN KEY(MaDiaDiem)  REFERENCES DiaDiem(MaDiaDiem)
);