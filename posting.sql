drop table posting;

create table posting (
    id INT AUTO_INCREMENT,
    name VARCHAR(100) not null,
    price DEC(10 , 2 ) NOT NULL,
    statis VARCHAR(100),
    PRIMARY KEY(id)
);



#insert into posting (id , name , price ) values (000,   'admin' , 312 )  ;
insert into posting (id , name , price, statis ) values (id ,   name , price, statis)  ;
#insert into posting (id , name , price ) values (id ,   name , price )  ;
show tables;
select *
from posting; 
