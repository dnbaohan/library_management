
create table author (
    au_id int primary key auto_increment,
    au_name varchar(150),
    au_address varchar(150),
    au_gender varchar(150),
    au_nationality varchar(150)
);

create table category (
    cat_id int primary key auto_increment,
    cat_name varchar(150),
    cat_keyword varchar(150),
    cat_language varchar(150)
);

create table storage (
    sto_id int primary key auto_increment,
    sto_shelf varchar(150),
    sto_block varchar(150)
);

create table book (
    book_id int primary key auto_increment,
    book_edition varchar(150),
    book_publisher varchar(150),
    book_year varchar(50),
    book_title varchar(150),
    sto_id int
);

create table book_author (
    au_id int,    
    book_id int
);

create table book_cate ( 
    cat_id int,
    book_id int
);

alter table book_author add foreign key (au_id) references author(au_id) ON DELETE CASCADE ON UPDATE CASCADE;
alter table book_author add foreign key (book_id) references book(book_id) ON DELETE CASCADE ON UPDATE CASCADE;
    
alter table book_cate add foreign key (cat_id) references category(cat_id) ON DELETE CASCADE ON UPDATE CASCADE;
alter table book_cate add foreign key (book_id) references book(book_id) ON DELETE CASCADE ON UPDATE CASCADE;

alter table book add foreign key (sto_id) references storage(sto_id) ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO author (au_id, au_name, au_address, au_gender, au_nationality)
VALUES
(1, 'John Doe', '123 Main St, Cityville', 'Male', 'American'),
(2, 'Jane Smith', '456 Oak St, Townsville', 'Female', 'Canadian'),
(3, 'Robert Johnson', '789 Pine St, Villagetown', 'Male', 'British'),
(4, 'Alice Brown', '101 Elm St, Hamletville', 'Female', 'Australian'),
(5, 'David White', '202 Maple St, Countryside', 'Male', 'Irish'),
(6, 'Eva Martinez', '303 Cedar St, Riverside', 'Female', 'Spanish'),
(7, 'Michael Lee', '404 Birch St, Hillside', 'Male', 'Chinese'),
(8, 'Olivia Taylor', '505 Oak St, Mountainview', 'Female', 'French'),
(9, 'George Wilson', '606 Pine St, Lakeside', 'Male', 'German'),
(10, 'Sophia Kim', '707 Cedar St, Seaside', 'Female', 'Korean'),
(11, 'William Anderson', '808 Birch St, Valleytown', 'Male', 'Canadian'),
(12, 'Emma Clark', '909 Elm St, Meadowville', 'Female', 'American'),
(13, 'Daniel Turner', '111 Maple St, Grovetown', 'Male', 'Italian'),
(14, 'Ava Hernandez', '222 Cedar St, Rivertown', 'Female', 'Mexican'),
(15, 'James Moore', '333 Birch St, Hilltop', 'Male', 'Swedish');

INSERT INTO category (cat_id, cat_name, cat_keyword, cat_language)
VALUES
(1, 'Science Fiction', 'Sci-Fi', 'Vietnamese'),
(2, 'History', 'Historical', 'Hungarian'),
(3, 'Mystery', 'Detective', 'Lithuanian'),
(4, 'Romance', 'Love Story', 'Danish'),
(5, 'Biography', 'Life Story', 'Romanian'),
(6, 'Fantasy', 'Magical', 'Thai'),
(7, 'Thriller', 'Suspenseful', 'Portuguese'),
(8, 'Science', 'Scientific', 'Italian'),
(9, 'Adventure', 'Exploration', 'Russian'),
(10, 'Poetry', 'Poetic', 'Korean'),
(11, 'Comedy', 'Funny', 'German'),
(12, 'Drama', 'Serious', 'Japanese'),
(13, 'Horror', 'Scary', 'American'),
(14, 'Self-Help', 'Motivational', 'Spanish'),
(15, 'Travel', 'Journey', 'English');

INSERT INTO storage (sto_id, sto_shelf, sto_block)
VALUES
(1, 'A', '1'),
(2, 'B', '2'),
(3, 'C', '3'),
(4, 'D', '4'),
(5, 'E', '5'),
(6, 'F', '6'),
(7, 'G', '7'),
(8, 'H', '8'),
(9, 'I', '9'),
(10, 'J', '10'),
(11, 'K', '11'),
(12, 'L', '12'),
(13, 'M', '13'),
(14, 'N', '14'),
(15, 'O', '15');

INSERT INTO book (book_id, book_edition, book_publisher, book_year, book_title, sto_id)
VALUES
(1, 'First Edition', 'Penguin Random House', '2020', 'The Mystery of the Lost Key', 1),
(2, 'Second Edition', 'HarperCollins', '2018', 'Space Odyssey', 2),
(3, 'Third Edition', 'Simon & Schuster', '2022', 'History of Ancient Civilization', 3),
(4, 'Fourth Edition', 'Hachette Book Group', '2019', 'Love Beyond Time', 4),
(5, 'Fifth Edition', 'Oxford University Press', '2021', 'The Life of a Scientist', 5),
(6, 'Sixth Edition', 'Penguin Classics', '2017', 'The Magical Kingdom', 6),
(7, 'Seventh Edition', 'Routledge', '2023', 'In the Shadows', 7),
(8, 'Eighth Edition', 'Little, Brown and Company', '2016', 'Exploring New Frontiers', 8),
(9, 'Ninth Edition', 'Dark Horse Comics', '2020', 'Poems of the Soul', 9),
(10, 'Tenth Edition', '	Kensington Publishing Corp.', '2018', 'Laugh Out Loud', 10),
(11, 'Eleventh Edition', 'Graywolf Press', '2021', 'Dramatic Tales', 11),
(12, 'Twelfth Edition', 'Open Book Publishers', '2019', 'Horror Nightmares', 12),
(13, 'Thirteenth Edition', 'University Press of America', '2017', 'Self-Help Wonders', 13),
(14, 'Fourteenth Edition', 'Melville House', '2022', 'Journey to Unknown Lands', 14),
(15, 'Fifteenth Edition', 'Charlesbridge Publishing', '2018', 'The Traveler in Diary', 15);

INSERT INTO book_author (au_id, book_id)
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);

INSERT INTO book_cate (cat_id, book_id)
VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);
