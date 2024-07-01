
https://petto.kr/

//회원정보 members
create table `members` (no int(6) unsigned auto_increment primary key, 
id varchar(20) not null,
name varchar(30) not null, 
pass varchar(30) not null,
pass2 varchar(30) not null,
email varchar(255) not null,
address varchar(255) not null,
phone varchar(10) not null,
regist_day datetime DEFAULT current_timestamp()
);

insert into `members` values (2, 'test1', '홍길동', '1234', '1234', 'jeon@naver.com','서울시 종로구','0222222222', '2023-04-09');
insert into `members` values (3, 'test2', '이순신', '1234', '1234', 'jeon@naver.com','서울시 종로구','0222222222', '2023-04-09');
insert into `members` values (4, 'test3', '강감찬', '1234', '1234', 'jeon@naver.com','서울시 종로구','0222222222', '2023-04-09');

-----------------------------------------------------------------------------------
//상품정보 shop_data
create table `shop_data` (no int(6) unsigned auto_increment primary key, 
cate varchar(100) DEFAULT NULL,
img varchar(255) not null,
name varchar(20) not null,
parent varchar(20) not null,
price double not null,
comment varchar(500) not null,
memo varchar(255) not null,
regist_day datetime DEFAULT NULL
);

insert into `shop_data` values (1, 'a01', './images/shop/product1.jpg', '미끄럼방지매트', '미끄럼방지매트', 10000, '설명2', '메모', '2023-04-09');
insert into `shop_data` values (2, 'a02', './images/shop/product2.jpg', '계단', '계단', 15000, '설명2', '메모', '2023-04-09');
insert into `shop_data` values (3, 'a03', './images/shop/product3.jpg', '침대', '침대', 99000, '설명2', '메모', '2023-04-09');
-----------------------------------------------------------------------------------
//장바구니 shop_temp=cart
create table `shop_temp` (no int(6) unsigned auto_increment primary key, 
name varchar(20) not null,
parent varchar(20) not null,
count varchar(10) not null,
price double not null,
money double not null,
regist_day datetime DEFAULT NULL,
img varchar(255) not null,
comment varchar(500) not null,
session_id varchar(10) not null
);


insert into `shop_temp` values (1, '침대', '설명', '1', 9000, 9000, '2023-01-01', './images/shop/product3.jpg', '부가설명', 'guest');

-----------------------------------------------------------------------------------
//상품리스트 shop_list
create table `shop_list` (order_id int(6) unsigned auto_increment primary key,
name varchar(20) not null,
email varchar(255) not null,
phone varchar(11) not null,
address varchar(255) not null,
memo varchar(255) not null,
regist_day datetime DEFAULT NULL,
total double not null
);

insert into `shop_list` values (1, '침대', 'jeon9897@naver.com', '01022224444', '서울시 종로구', '메모내용', '2023-04-10', 50000);
