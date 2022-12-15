CREATE DATABASE db_kursadarbs;
USE db_kursadarbs;
CREATE TABLE users (
   users_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   users_firstname VARCHAR(50) NOT NULL,
   users_lastname VARCHAR(50) NOT NULL,
   users_uid VARCHAR(320) NOT NULL,
   users_pwd CHAR(60) NOT NULL,
   type INT(11) NULL Default '0'
);
CREATE TABLE books (
	book_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	book_name VARCHAR(100) NOT NULL,
	book_genre VARCHAR(100) NOT NULL,
	book_author VARCHAR(50) NOT NULL
);
CREATE TABLE songs (
	song_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	song_name VARCHAR(100) NOT NULL,
	song_genre VARCHAR(100) NOT NULL,
	song_author VARCHAR(50) NOT NULL
);
CREATE TABLE post (
	post_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	users_id INT NOT NULL,
	book_id INT NULL Default '0',
	song_id INT NULL Default '0', 
	rating VARCHAR(100) NOT NULL,
	review VARCHAR(600) NOT NULL,
	date_added DATETIME now(), 
	FOREIGN KEY (users_id) REFERENCES users (users_id),
	FOREIGN KEY (book_id) REFERENCES books (book_id),
	FOREIGN KEY (song_id) REFERENCES songs (song_id)
);
CREATE TABLE comments (
	comment_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	post_id INT NOT NULL,
	commentator VARCHAR(50),
	coment VARCHAR(320),
	FOREIGN KEY (post_id) REFERENCES post (post_id)
);