create table if not exists customers (
    email varchar(80) not null,
	password varchar(80) not null,
    username varchar(80) not null,
	category varchar(80) not null,
    firstname varchar(80) not null,
	lastname varchar(80) not null,
	phone  int (20) not null,
	details varchar(80) not null,
    primary key (username),
	key (password)
);
