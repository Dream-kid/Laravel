

# ------------------------------------------------------------
/*Drop TABLE*/
/*Php artisan serve*/
DROP TABLE IF EXISTS submission;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS images;
DROP TABLE IF EXISTS university;
DROP TABLE IF EXISTS result_type;
DROP TABLE IF EXISTS problems_list;
DROP TABLE IF EXISTS online_judge_list;




CREATE TABLE products (
  user_id int(110) unsigned NOT NULL AUTO_INCREMENT,
  user_name varchar(250) NOT NULL ,
  email varchar(250) NOT NULL ,
  PRIMARY KEY (user_id)
);
ALTER TABLE products
DROP COLUMN email;

ALTER TABLE products
ADD email varchar(250);

INSERT INTO products ( user_name,email)
VALUES('Tourist','admin@admin.com'),('Sourav','email123@email.com'),
('Rifat_vai','rifat@admin.com'),('Nuhash','nuhash123@email.com'),
('Rudra','Rudra@admin.com'),('Jalal','jalla123@email.com'),
('Ram','Ram@admin.com'),('Harry','harry123@email.com');
	




CREATE TABLE images (
  id int(110) unsigned NOT NULL AUTO_INCREMENT,
  Image varchar(250) NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO images ( Image)
VALUES('9.png'),('10.png'),
('3.png'),('4.png'),
('5.png'),('6.png'),
('7.png'),('8.png');






CREATE TABLE university (
  user_id int(110) unsigned NOT NULL AUTO_INCREMENT,
  university_name varchar(250) NOT NULL,
  PRIMARY KEY (user_id)
);
INSERT INTO university ( university_name)
VALUES('Itmo'),('Khulna University of Engineering & Technology'),('Khulna University of Engineering & Technology'),('Khulna University of Engineering & Technology'),('Khulna University of Engineering & Technology'),('Khulna University of Engineering & Technology'),('Buet'),('Ruet');





CREATE TABLE online_judge_list (
  judge_id int(110) unsigned NOT NULL AUTO_INCREMENT,
  judge_name varchar(250) NOT NULL,
  PRIMARY KEY (judge_id)
);
INSERT INTO online_judge_list ( judge_name)
VALUES('Codeforces'),
      ('Uva Online Judge'),
	  ('Hacker Earth'),
	  ('Light Online Judge'),
	  ('Spoj Online Judge');





CREATE TABLE problems_list (
  problem_id int(110) unsigned NOT NULL AUTO_INCREMENT,
  problem_name varchar(250) NOT NULL,
  judge_id int(110) unsigned NOT NULL,
  PRIMARY KEY (problem_id),
  FOREIGN KEY (judge_id) REFERENCES online_judge_list(judge_id)
  ON DELETE NO ACTION 
  ON UPDATE CASCADE
);
INSERT INTO problems_list ( problem_name,judge_id)
VALUES('Petrya And Strings',1),('Life Of Pi 3.14165',2),
('Game code Rest',3),('Binary Tree Root-2',4),
('Triangle of Points',5),('Petrrya And Memory',2),
('Life Of Stone Rank',1),('Source Codes Games',4),
('Query Tree Pointer',5),('Circle over Points',3);





CREATE TABLE result_type (
  result_id int(110) unsigned NOT NULL AUTO_INCREMENT,
  result_name varchar(250) NOT NULL,
  PRIMARY KEY (result_id)
);
INSERT INTO result_type ( result_name)
VALUES('Accepted'),('Wrong answer'),('Time limit excced'),('Compilation error'),('Memory limit exceed');






CREATE TABLE submission (
  user_id int(110) unsigned NOT NULL,
  result_id int(110) unsigned NOT NULL,
  problem_id int(110) unsigned NOT NULL,
  point int(110) DEFAULT 0,
  FOREIGN KEY (result_id) REFERENCES result_type(result_id)
  ON DELETE NO ACTION 
  ON UPDATE CASCADE,
  
  FOREIGN KEY (user_id) REFERENCES products(user_id) 
  ON DELETE NO ACTION
  ON UPDATE CASCADE,
  
  FOREIGN KEY (problem_id) REFERENCES problems_list(problem_id)
  ON DELETE NO ACTION 
  ON UPDATE CASCADE
);
INSERT INTO submission
VALUES
 (1,1,1,1),(1,2,2,0),(1,3,3,0),(1,4,4,0),(1,5,5,0),(1,1,6,2),(1,2,7,0),(1,1,8,3),
 (2,2,1,0),(2,1,2,1),(2,3,1,0),(2,4,4,0),(2,1,5,2),(2,5,6,0),(2,1,7,3),(2,1,8,4),
 (3,1,1,1),(3,2,2,0),(3,3,3,0),(3,4,4,0),(3,5,5,0),(3,1,6,2),(3,1,7,3),(3,3,8,0),
 (4,1,1,1),(4,2,2,0),(4,3,3,0),(4,4,1,2),(4,5,5,0),(4,1,6,2),(4,1,7,3),(4,1,8,4),
 (5,1,1,1),(5,2,2,0),(5,4,3,0),(5,5,4,0),(5,3,5,0),(5,1,6,2),(5,1,7,3),(5,1,8,4),
 (6,1,1,1),(6,2,2,0),(6,3,3,0),(6,4,4,0),(6,5,5,0),(6,1,6,2),(6,4,7,0),(6,1,8,3),
 (7,1,1,1),(7,2,2,0),(7,3,3,0),(7,4,4,0),(7,5,5,0),(7,1,6,2),(7,1,7,3),(7,1,8,4),
 (8,1,1,1),(8,2,2,0),(8,4,3,0),(8,3,4,0),(8,5,5,0),(8,1,6,2),(8,1,7,3),(8,5,8,4);


