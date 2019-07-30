Drop database if EXISTS Projectdb;
CREATE DATABASE Projectdb;
Use Projectdb;

CREATE TABLE users
( userid INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username CHAR(50) NOT NULL,
  password CHAR(100) not null
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
   FOREIGN KEY (albumid) REFERENCES Album(albumid)
);



insert into users (userid, username, password) values (1, 'jlabroue0', 'vc5PBMQ');
insert into users (userid, username, password) values (2, 'eausher1', 'OvGDu3M2');
insert into users (userid, username, password) values (3, 'bbachura2', 'ntUxhUZc');
insert into users (userid, username, password) values (4, 'kdignall3', '0k36I6yxR');
insert into users (userid, username, password) values (5, 'jcronkshaw4', 'kcGqwC');
insert into users (userid, username, password) values (6, 'apermain5', 'vt9e7pg');
insert into users (userid, username, password) values (7, 'cleicester6', 'O5gSXF');
insert into users (userid, username, password) values (8, 'vdefond7', 'APJ1Gp');
insert into users (userid, username, password) values (9, 'cjunifer8', 'HGwrSBIz');
insert into users (userid, username, password) values (10, 'ddesorts9', '7IhUO66rsAL3');
insert into users (userid, username, password) values (11, 'klindstroma', 'S9WuLLdFg');
insert into users (userid, username, password) values (12, 'sfokerb', 'dfFAgwSvrK');
insert into users (userid, username, password) values (13, 'lclelandc', 'c8tVBNtO3');
insert into users (userid, username, password) values (14, 'cbawmed', 'oz0XbVX8');
insert into users (userid, username, password) values (15, 'dfoystere', 'iwSYCi6JxSE7');
insert into users (userid, username, password) values (16, 'amccluinf', 'tk79kgM');
insert into users (userid, username, password) values (17, 'dmaierg', 'JiBY100K3aQ');
insert into users (userid, username, password) values (18, 'gbeaglesh', 'A0fAfLtNxs');
insert into users (userid, username, password) values (19, 'tvanni', 'VPBV9D2pvoB');
insert into users (userid, username, password) values (20, 'cfrancescuzzij', 'KvMZs2');
insert into users (userid, username, password) values (21, 'pstrattenk', 'x26En9w9gr');
insert into users (userid, username, password) values (22, 'tbirchilll', 'cibV2e');
insert into users (userid, username, password) values (23, 'mcasperrim', 'nSniLBwVXp');
insert into users (userid, username, password) values (24, 'thandrikn', 'reChEyE');
insert into users (userid, username, password) values (25, 'dgerascho', 'BybvY97U');
insert into users (userid, username, password) values (26, 'thanckep', 'LR4eXxx');
insert into users (userid, username, password) values (27, 'slawtonq', 'XyirbzEs');
insert into users (userid, username, password) values (28, 'mcousher', 'mOXMQkippIku');
insert into users (userid, username, password) values (29, 'awestmans', '3i54J7siNEF');
insert into users (userid, username, password) values (30, 'mbollandst', 'RmU2z3Sj1tLW');




insert into Album (AlbumID, UserID, AlbumName) values (1, 5, 'Toughjoyfax');
insert into Album (AlbumID, UserID, AlbumName) values (2, 15, 'Tresom');
insert into Album (AlbumID, UserID, AlbumName) values (3, 16, 'Latlux');
insert into Album (AlbumID, UserID, AlbumName) values (4, 3, 'Keylex');
insert into Album (AlbumID, UserID, AlbumName) values (5, 21, 'Daltfresh');
insert into Album (AlbumID, UserID, AlbumName) values (6, 9, 'Alpha');
insert into Album (AlbumID, UserID, AlbumName) values (7, 12, 'Y-Solowarm');
insert into Album (AlbumID, UserID, AlbumName) values (8, 21, 'Y-find');
insert into Album (AlbumID, UserID, AlbumName) values (9, 11, 'Rank');
insert into Album (AlbumID, UserID, AlbumName) values (10, 10, 'Lotstring');
insert into Album (AlbumID, UserID, AlbumName) values (11, 29, 'Solarbreeze');
insert into Album (AlbumID, UserID, AlbumName) values (12, 4, 'Mat Lam Tam');
insert into Album (AlbumID, UserID, AlbumName) values (13, 26, 'Fix San');
insert into Album (AlbumID, UserID, AlbumName) values (14, 9, 'Lotstring');
insert into Album (AlbumID, UserID, AlbumName) values (15, 17, 'Job');
insert into Album (AlbumID, UserID, AlbumName) values (16, 11, 'Sub-Ex');
insert into Album (AlbumID, UserID, AlbumName) values (17, 11, 'Voltsillam');
insert into Album (AlbumID, UserID, AlbumName) values (18, 4, 'Overhold');
insert into Album (AlbumID, UserID, AlbumName) values (19, 4, 'Viva');
insert into Album (AlbumID, UserID, AlbumName) values (20, 2, 'Viva');
insert into Album (AlbumID, UserID, AlbumName) values (21, 16, 'Lotlux');
insert into Album (AlbumID, UserID, AlbumName) values (22, 23, 'Tres-Zap');
insert into Album (AlbumID, UserID, AlbumName) values (23, 27, 'Flowdesk');
insert into Album (AlbumID, UserID, AlbumName) values (24, 27, 'Toughjoyfax');
insert into Album (AlbumID, UserID, AlbumName) values (25, 2, 'It');
insert into Album (AlbumID, UserID, AlbumName) values (26, 20, 'Sub-Ex');
insert into Album (AlbumID, UserID, AlbumName) values (27, 25, 'Keylex');
insert into Album (AlbumID, UserID, AlbumName) values (28, 22, 'Konklux');
insert into Album (AlbumID, UserID, AlbumName) values (29, 28, 'Holdlamis');
insert into Album (AlbumID, UserID, AlbumName) values (30, 4, 'Prodder');


insert into Post (PostID, AlbumID, ImageURL) values (1, 20, 'http://dummyimage.com/116x155.jpg/cc0000/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (2, 12, 'http://dummyimage.com/151x229.jpg/cc0000/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (3, 29, 'http://dummyimage.com/241x113.png/cc0000/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (4, 4, 'http://dummyimage.com/212x218.jpg/5fa2dd/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (5, 11, 'http://dummyimage.com/197x173.bmp/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (6, 11, 'http://dummyimage.com/234x143.bmp/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (7, 19, 'http://dummyimage.com/250x103.png/ff4444/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (8, 1, 'http://dummyimage.com/161x118.png/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (9, 18, 'http://dummyimage.com/114x161.png/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (10, 15, 'http://dummyimage.com/168x183.bmp/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (11, 7, 'http://dummyimage.com/237x106.png/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (12, 23, 'http://dummyimage.com/243x240.bmp/ff4444/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (13, 4, 'http://dummyimage.com/123x191.jpg/ff4444/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (14, 23, 'http://dummyimage.com/188x128.jpg/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (15, 21, 'http://dummyimage.com/244x103.png/5fa2dd/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (16, 27, 'http://dummyimage.com/132x187.bmp/ff4444/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (17, 11, 'http://dummyimage.com/245x215.bmp/ff4444/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (18, 9, 'http://dummyimage.com/136x183.png/cc0000/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (19, 18, 'http://dummyimage.com/208x209.jpg/cc0000/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (20, 22, 'http://dummyimage.com/175x225.jpg/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (21, 5, 'http://dummyimage.com/218x243.bmp/ff4444/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (22, 9, 'http://dummyimage.com/196x182.bmp/ff4444/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (23, 25, 'http://dummyimage.com/147x201.jpg/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (24, 17, 'http://dummyimage.com/155x126.png/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (25, 29, 'http://dummyimage.com/152x231.jpg/5fa2dd/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (26, 19, 'http://dummyimage.com/136x148.bmp/cc0000/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (27, 14, 'http://dummyimage.com/187x118.bmp/5fa2dd/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (28, 2, 'http://dummyimage.com/186x122.bmp/cc0000/ffffff');
insert into Post (PostID, AlbumID, ImageURL) values (29, 4, 'http://dummyimage.com/219x148.jpg/dddddd/000000');
insert into Post (PostID, AlbumID, ImageURL) values (30, 15, 'http://dummyimage.com/236x138.jpg/dddddd/000000');



