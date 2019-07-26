CREATE TABLE customers (
	customer_id INTEGER PRIMARY KEY,
	customer_name VARCHAR(255),
	phone VARCHAR(10),
	favorite_dish_id int);
	
INSERT INTO customers (customer_name, phone, favorite_dish_id)
	VALUES ('Parneet', '16045551234',2),
	('Rahim','17785551234',5),
	('Sam','1604445-8856',6),
	('Keitaro','16047242554',4),
	('Jen','12183947785',6);