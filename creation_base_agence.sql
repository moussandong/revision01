--
-- base de donn�es: 'baseagence'
--
create database if not exists baseagence default character set utf8 collate utf8_general_ci;
use baseagence;
-- --------------------------------------------------------
-- creation des tables

set foreign_key_checks =0;

-- table vendre
drop table if exists vendre;
create table vendre (
	ve_id int not null auto_increment primary key,
	ve_type varchar(50),
	ve_caracteristique varchar(50),
    ve_adresse varchar(100)
)engine=innodb;

-- table acheter
drop table if exists acheter;
create table acheter (
	ac_id int not null auto_increment primary key,
	ac_type varchar(50),
	ac_caracteristique varchar(50),
    ac_adresse varchar(100)
)engine=innodb;

-- table louer
drop table if exists louer;
create table vendre (
	lo_id int not null auto_increment primary key,
	lo_type varchar(50),
	lo_caracteristique varchar(50),
    lo_adresse varchar(100)
)engine=innodb;

-- table contact
drop table if exists contact;
create table contact (
	co_id int not null auto_increment primary key,
	co_type varchar(50),
	co_caracteristique varchar(50),
    co_adresse varchar(50)
)engine=innodb;

set foreign_key_checks =1;
