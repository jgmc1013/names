create table names
	(
	id int not null auto_increment primary key,
	name varchar(100) not null,
	status tinyint null default 1
	)engine=innodb;
	
create table meanings ( 
	id int not null auto_increment primary key, 
	description text, 
	audio varchar(100) not null, 
	path varchar(50) not null, 
	status tinyint null default 1, 
	name_id int not null, 
	language_id int not null, 
	foreign key(name_id) references names(id) on update cascade on delete restrict, 
	foreign key(language_id) references languages(id) on update cascade on delete restrict 
	)engine=innodb
	
create table languages(
	id int not null auto_increment primary key,
	description varchar(25) not null,
	status tinyint null default 1
)engine=innodb;
	