DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id INTEGER NOT NULL PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	street VARCHAR(255),
	city VARCHAR(255),
	postal_code VARCHAR(10),
	country VARCHAR(255),
	phone VARCHAR(255),
	created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

DROP TABLE IF EXISTS emails;
CREATE TABLE emails (
	id INTEGER NOT NULL PRIMARY KEY,
	user_id INTEGER,
	email VARCHAR(255)
);

INSERT INTO users
(id, first_name,last_name,street,city,postal_code,country,phone)
VALUES
(1,'Dave', 'Jones', '123 Any Street', 'Winnipeg', 'R3Y 1J4', 'Canada', '204-123-1234'),
(2,'Sally', 'Miller', '125 Any Blvd', 'Brandon', 'R3N 2JG', 'Canada', '204-123-5432'),
(3,'Steve', 'George', '166 Mallory Way', 'Winnipeg', 'R5T 7Y5', 'Canada', '204-111-1111'),
(4,'Tom', 'McBride', '126 Any Street', 'Churchill', 'R3Y 2J3', 'Canada', '204-124-1122'),
(5,'Banu', 'Sharma', '222 Portage Ave', 'Winnipeg', 'R3N 0Y4', 'Canada', '204-222-1738'),
(6,'Crystal', 'Donalds', '126 Any Street', 'Brandon', 'R3N 2J34', 'Canada', '204-124-3333');

INSERT INTO emails
(user_id,email)
VALUES
(1,'dave@example.com'),
(1, 'djones@hotmail.com'),
(2, 'sally@example.com'),
(2, 'smiller@gmail.com'),
(3, 'steve@pagerange.com'),
(3, 'steve@glort.com'),
(4, 'tmcbride@yahoo.com'),
(4, 'tom@example.com'),
(5, 'banu@example.com'),
(6, 'crystal@example.com'),
(6, 'cdonalds@eatons.ca');

