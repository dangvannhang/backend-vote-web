create database backend_vote_web_local;
use backend_vote_web_local;

create table users(
	id int auto_increment,
    email varchar(100),
    primary key(id)
);

create table topic (
	id int auto_increment,
    title varchar(50),
    image varchar(250),
    descr varchar(250),
    primary key(id)
);

create table questionare(
	id int auto_increment,
    id_topic int,
	title varchar(50),
    descr varchar(100),
    image varchar(250),
    vote int,
    primary key(id),
    foreign key(id_topic) references topic(id)
); 

create table user_status(
	id int auto_increment,
    id_user int,
    id_questionare int,
    primary key (id),
    foreign key(id_user) references users(id),
    foreign key(id_questionare) references questionare(id)
);




