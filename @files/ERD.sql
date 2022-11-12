CREATE TABLE `sign_up`(
	id int(11) auto_increment primary key,
	username varchar(50),
	password varchar(32),
	status enum('0','1'),
	created_at timestamp DEFAULT CURRENT_TIMESTAMP,
	updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);