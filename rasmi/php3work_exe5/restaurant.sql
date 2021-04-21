-- create database
DROP DATABASE IF EXISTS restaurant_php3;
CREATE DATABASE restaurant_php3 DEFAULT CHARACTER SET utf8;


-- create parent table
CREATE TABLE dishes(dishID int UNSIGNED NOT NULL AUTO_INCREMENT,
name varchar(100) NOT NULL, # must have
image varchar(300) NOT NULL,
price decimal(5,2) NOT NULL,
info varchar(100) NOT NULL,
PRIMARY KEY (dishID)
);

CREATE TABLE employee(empID int UNSIGNED NOT NULL AUTO_INCREMENT,
firstName varchar(50),
lastName varchar(50),
PRIMARY KEY (empID)
);


-- insert values
INSERT INTO dishes
VALUES -- dishID, name, image, price, info
(NULL,'Black Bubble Milk Tea', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/64527467_789714544790782_3556609164518096896_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=973b4a&_nc_ohc=f3yXs0uU3UIAX9vLRI-&_nc_ht=scontent-vie1-1.xx&oh=1c64cf9bd05ad3f2e813f9c63d7fbd4b&oe=60A5B89A', 4.50, 'Black Tea + Milk + Bubble'),
(NULL,'Taro Bubble Milk Tea', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/66758388_809185749510328_6551617669655691264_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=973b4a&_nc_ohc=1eLUTTVz3zYAX9o7__w&_nc_ht=scontent-vie1-1.xx&oh=193fc53b1bdf532269c8fae580f4ccb0&oe=60A74F55', 4.90, 'Taro Flavour + Black Tea + Milk + Bubble'),
(NULL,'Strawberry Bubble Milk Tea', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/75572095_896851907410378_4141163636661944320_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=973b4a&_nc_ohc=4mhjaQWm2xAAX-9hvDZ&_nc_ht=scontent-vie1-1.xx&oh=f3ab4f371ea4cb59576c40a3a37fd5d3&oe=60A3A2B8', 4.90, 'Strawberry Syrup + Black Tea + Milk + Bubble'),
(NULL,'Lychee Infused Tea', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/67087884_809184862843750_4328247958194618368_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=973b4a&_nc_ohc=nsrRKjUi9RwAX_LN_og&_nc_ht=scontent-vie1-1.xx&oh=d1229b2247e9d853ce40238a60dcd495&oe=60A62A06', 4.90, 'Lychee Infusion + Black Tea + Lychee Slices + Cream Cheese'),
(NULL,'Grapefruit Infused Tea', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/73342913_872532383175664_3753648679077019648_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=973b4a&_nc_ohc=wIZsLUEJz74AX-X1Amx&_nc_ht=scontent-vie1-1.xx&oh=c86c4454dacbd5aa17907468dc7aaaab&oe=60A399E7', 4.20, 'Grapefruit Infusion + Black Tea + Grapefruit Slices + Cream Cheese'),
(NULL,'Rose Oolong Cream Cheese Tea', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/73164967_872559973172905_5289080821469151232_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=973b4a&_nc_ohc=F36hA90vq5QAX9SU-9c&_nc_ht=scontent-vie1-1.xx&oh=858e9263401ea3d379ea33e1496d83d5&oe=60A6EA1A', 4.50, 'Rose Oolong Tea + Cream Cheese')

INSERT INTO employee
VALUES -- empID, firstName, lastName
(NULL,'Anna', 'Landt'),
(NULL,'Bill', 'Mayer'),
(NULL,'Clara', 'Neumann'),
(NULL,'Dean', 'Obers')



-- extra data for dishes if wanna try create-delete
(NULL,'Mochi', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/96364813_1040199293075638_8745830875368783872_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=973b4a&_nc_ohc=3uiZyJ_9iEYAX-BuCu_&_nc_ht=scontent-vie1-1.xx&oh=defb6c54e4059e47d366b3524b4ef98c&oe=60A75CE3', 3.50, 'Homemade Mochi')
(NULL,'Mango Infused Tea', 'https://scontent-vie1-1.xx.fbcdn.net/v/t1.6435-9/120553546_1150682718693961_947634241012293404_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=973b4a&_nc_ohc=putG1YhdEAQAX_brgCB&_nc_ht=scontent-vie1-1.xx&oh=571c6b21143712f6430d3b4939be6cdd&oe=60A707C9
', 4.90, 'Mango Infusion + Black Tea + Mango Slices + Bubble'),



