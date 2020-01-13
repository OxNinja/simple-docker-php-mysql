drop database if exists `database`;
create database `database`;
use `database`;

drop table if exists `database`.`users`;
create table `database`.`users` (
	id int not null auto_increment,
	username text not null,
	password text not null,
	primary key (id)
);
insert into `database`.`users` (username, password) values
	("admin","password"),
    ("alice","bite de poulet"),
    ("bob","K0N4SS3!");
