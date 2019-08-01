Drop database if EXISTS Projectdb;
CREATE DATABASE Projectdb;
Use Projectdb;

CREATE TABLE users
( userid INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username CHAR(50) NOT NULL,
  password CHAR(255) not null
);

CREATE TABLE Album
( albumid INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  userid INT UNSIGNED NOT NULL,
  albumname CHAR(50) NOT NULL,
  FOREIGN KEY (userid) REFERENCES users(userid)
);

CREATE TABLE Post
(  postid INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   albumid INT NOT NULL,
   imageurl CHAR(100) NOT NULL,
   imagetype CHAR(100) NOT NULL,
   FOREIGN KEY (albumid) REFERENCES Album(albumid)
);

insert into users (userid, username, password) values (1, 'jlabroue0', '$2y$10$s.xFdHGsR1AMDlE3yE37Be2yWKuU./Bra1qJC/s7QIFr.NXyj.Jsu');
insert into users (userid, username, password) values (2, 'eausher1', '$2y$10$j0eP2feGqTYrovkWsddYb.iOqAhyXJXf0mx722Dj9CWlS9H.1FNq6');
insert into users (userid, username, password) values (3, 'bbachura2', '$2y$10$kBO21sTZbWmPXe6ugNCjr.5zMvm2KRQTx5lEPmBlr62Jh0T/lemV.');

insert into Album (AlbumID, UserID, AlbumName) values (1, 2, 'Toughjoyfax');
insert into Album (AlbumID, UserID, AlbumName) values (2, 1, 'Tresom');
insert into Album (AlbumID, UserID, AlbumName) values (3, 1, 'Latlux');
insert into Album (AlbumID, UserID, AlbumName) values (4, 3, 'Keylex');
insert into Album (AlbumID, UserID, AlbumName) values (5, 2, 'Daltfresh');
insert into Album (AlbumID, UserID, AlbumName) values (6, 3, 'Alpha');


insert into Post (PostID, AlbumID, ImageURL, ImageType) values (1, 5, 'http://dummyimage.com/154x241.bmp/cc0000/ffffff', 'image/jpeg');
insert into Post (PostID, AlbumID, ImageURL, ImageType) values (2, 4, 'http://dummyimage.com/135x213.bmp/ff4444/ffffff', 'image/jpeg');
insert into Post (PostID, AlbumID, ImageURL, ImageType) values (3, 3, 'https://i.imgur.com/8e3l97e.mp4', 'video/mp4');
insert into Post (PostID, AlbumID, ImageURL, ImageType) values (4, 1, 'https://i.imgur.com/HxmitLe.mp4', 'video/mp4');
insert into Post (PostID, AlbumID, ImageURL, ImageType) values (5, 2, 'http://dummyimage.com/131x178.jpg/dddddd/000000', 'image/jpeg');


