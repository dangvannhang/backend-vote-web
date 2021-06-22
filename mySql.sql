drop database if exists backend_vote_web;
create database backend_vote_web;
use backend_vote_web;

create table users(
	id int auto_increment,
    email varchar(100),
    pass varchar(50),
    rolee varchar(20),
    remember_token varchar(255),
    primary key(id)
);

create table topics (
	id int auto_increment,
    title_topic varchar(50),
    image_topic varchar(250),
    descr_topic varchar(255),
    primary key(id)
);

create table selections(
	id int auto_increment,
    id_topic int,
	title_selection varchar(50),
    descr_selection varchar(100),
    image_selection varchar(250),
    count_vote_selection int,
    primary key(id),
    foreign key(id_topic) references topics(id)
); 

create table user_voted(
	id int auto_increment,
    id_user int,
    id_selection int,
    primary key (id),
    foreign key(id_user) references users(id),
    foreign key(id_selection) references selections(id)
    );




