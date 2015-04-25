create database hospital_mgmt;
use hospital_mgmt;
create table siteuser
(
username varchar(30) primary key,
pwd varchar(40),
fname varchar(30),
lname varchar(30),
dob date,
gender varchar(6),
email  varchar(50),
contact varchar(10),
address varchar(100),
guardian_name varchar(30),
guardian_contact varchar(100),
hintq varchar(1),
hinta varchar(50),
role varchar(10),
active varchar(3)
);

insert into siteuser values ('admin','123','anil','kumar','1990-10-20','male','anil@first.com','112233','a-10,gandhinagar','akshay kumar','93747320','hello?','first','admin','yes');