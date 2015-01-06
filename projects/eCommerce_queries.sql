SELECT * FROM ecommercesports.orders;

SELECT * FROM ecommercesports.customers;

SELECT * FROM ecommercesports.addresses;

select * from orders a join customers b
			on a.cust_id = b.id;
            
select * from customers b join addresses c
			on b.id = c.cust_id; 
            
select * from orders a join addresses c
			on a.cust_id = b.cust_id
				and c.id = a.bill_to_address;

select * from orders a join customers b
			on a.cust_id = b.id 
		 join addresses c
			on c.id = a.bill_to_address 
			and c.cust_id = a.cust_id 
            and c.cust_id = b.id
		where a.id = 1001;
            
            
select a.id, a.order_status, a.order_total, a.bill_to_address, b.first_name, a.created_at
	,c.address, c.address2, c.city, c.state, c.zip_Code
 from orders a, customers b ,addresses c
	where a.cust_id = b.id 
	and c.id = a.bill_to_address
    and c.cust_id = a.cust_id;


SELECT * FROM ecommercesports.orders LIMIT 10, 5;




