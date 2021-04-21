

CREATE DATABASE my_database_name DEFAULT CHARACTER SET utf8;

CREATE TABLE dishes (
`dishID` int(11) NOT NULL AUTO_INCREMENT,
`dishName` varchar(50) NOT NULL,
`image` TEXT, 
`price` DECIMAL (20 , 2),
`mealDesription` TEXT,
PRIMARY KEY (`dishID`),
 UNIQUE KEY(`dishName`)
)

INSERT INTO dishes
VALUES  
(1, 'Burger', 'https://images.pexels.com/photos/1893557/pexels-photo-1893557.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', '9.90', 'Juicy Beef Burger with lots of veg.' );