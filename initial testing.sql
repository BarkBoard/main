#getting ID username and password
select username, password, name, email, user_id, phone_num
from user
where user.username = 'jsmith'
	and user.password = 'password';
    
#inserting into user test_user and test_admin
insert into user values (
	12345, null, 'John Smith', 'jsmith@gmail.com', 'jsmith', 'password', 1234567890);

insert into user values (
	23456, 65432, 'Jerry Smith', 'jerrysmith@gmail.com', 'jerrysmith', 'password', 1234567890);
    
#inserting test_vehicle
insert into item values(12345, 12525.99, 2, 100);
insert into vehicle values(12345, 2005, 'Jeep', 'Liberty', 2, 145000);

select *
from item right outer join vehicle using (item_id)
	left outer join cond on vehicle.cond = cond.numeric_eq
    left outer join category on item.category = category.numeric_eq;


#inserting test_house
insert into item values(12346, 360.00, 2, 3, 23456);
insert into housing values(12346, 050121, 082721, 5, 2, '100 Sesame St.');

select *
from item right outer join housing using (item_id)
	left outer join category on item.category = category.numeric_eq;
    
#inserting test_clothing
insert into item values(12347, 30.99, 3, 25, 12345);
insert into clothing values(12347, 'Shirt', 'XL', 'Mens');

select *
from item right outer join clothing using (item_id)
	left outer join category on item.category = category.numeric_eq;
    
#inserting test_book/supplies
insert into item values(12348, 70.00, 4, 1, 54321);
insert into school_sup values(12348, 'Book', 'CS3141', 2);

select *
from item right outer join school_sup using (item_id)
	left outer join category on item.category = category.numeric_eq;
    
#inserting test electronic
insert into item values(12349, 1250.00, 5, 75, 12345);
insert into electronics values(12349, 1, 'Lenovo Desktop Computer with i7 processor');

select *
from item right outer join electronics using (item_id)
	left outer join category on item.category = category.numeric_eq;
    

#inserting test_misc
insert into item values(12350, 99.99, 6, 4, 54321);
insert into misc values (12350, 5, 14);

select*
from item right outer join misc using (item_id)
	left outer join category on item.category = category.numeric_eq;
