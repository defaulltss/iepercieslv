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
INSERT INTO songs(song_name, song_genre , song_author)
VALUES ('The way i see you ',' pop ', 'Leonardo Pegassi'),
		('Smells Liek Teen Spirit ',' pop ', 'Nirvana'),
		('Imagine ', 'rap' , 'John Lennon'),
		('Billie Jean', 'hip-hop', 'Micheal Jackson'),
		(NULL , NULL , NULL );
		
INSERT INTO books(book_name, book_genre, book_author)
VALUES ('To kill a mocking bird', 'Fantasy', 'Harper Lee'),
		('Harry Potter and the Philosophers Stone','Romance','J.K. Rowling'),
		('The Lord of the Rings', 'Sci-Fi','J.R.R. Tolkien'),
		('The Great Gatsby','Fantasy','J.R.R. Tolkien'),
		(NULL , NULL , NULL );