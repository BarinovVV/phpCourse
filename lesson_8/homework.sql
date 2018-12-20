# Основное задание
CREATE SCHEMA `homework` DEFAULT CHARACTER SET utf8 ;
CREATE TABLE `homework`.`books` (
  `idbooks` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `author` VARCHAR(100) NOT NULL,
  `rate` INT(2) NOT NULL,
  `yearRead` INT(4) NOT NULL,
  PRIMARY KEY (`idbooks`));
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 1', 'Автор 1', '1', '2010');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 2', 'Автор 2', '2', '2011');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 3', 'Автор 3', '3', '2012');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 4', 'Автор 4', '4', '2013');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 5', 'Автор 5', '5', '2014');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 6', 'Автор 6', '6', '2015');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 7', 'Автор 7', '7', '2016');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 8', 'Автор 8', '8', '2017');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 9', 'Автор 9', '9', '2018');
INSERT INTO `homework`.`books` (`title`, `author`, `rate`, `yearRead`) VALUES ('Книга 10', 'Автор 10', '10', '2019');
ALTER TABLE homework.books ADD country CHAR(50);
ALTER TABLE homework.books MODIFY country INT(2);
ALTER TABLE homework.books DROP country;
SELECT * FROM homework.books;
SELECT title, author FROM homework.books;
SELECT * FROM homework.books WHERE rate>5;
SELECT * FROM homework.books ORDER BY rate DESC;
SELECT * FROM homework.books WHERE rate>7 and yearRead>2015 ORDER BY yearRead;
# Усложненное задание
SELECT COUNT(yearRead) FROM homework.books WHERE yearRead<2015;
SELECT author, COUNT(*) FROM homework.books GROUP BY author;
UPDATE homework.books SET rate=rate+1 WHERE yearRead!=2012;
SELECT yearRead, COUNT(*) as count FROM homework.books GROUP BY yearRead ORDER BY count DESC;
DELETE FROM homework.books WHERE rate<5;
DROP TABLE homework.books;
