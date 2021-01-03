CREATE DATABASE testing;

use testing;

create table users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname varchar(30) NOT NULL,
  lastname varchar(30) NOT NULL,
  email varchar(50) NOT NULL,
  age INT(3),
  location varchar(50),
  date timestamp
);