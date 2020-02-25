Creation Database

create table Categories(
	idCategory int primary key auto_increment,
	nameCategory varchar(30) not null unique,
	descriptionCategory text default '',
	statusCategory enum('Active','Inactive') not null default 'Active',creationDateCategory timestamp default current_timestamp,lastUpdateCategory timestamp default current_timestamp on update current_timestamp
);

create table Products(
	idProuct int primary key auto_increment,nameProduct varchar(100)not null,
	buyPriceProduct decimal(10,2) not null,
	sellPriceProduct decimal(10,2) not null,
	stockProduct int not null default 0,
	statusProduct enum('Active','Inactive') not null default 'Active',
	creationDateProduct timestamp default current_timestamp,
	lastUpdateProduct timestamp default current_timestamp on update current_timestamp,
	fkProductsCategories int not null,
	foreign key(fkProductsCategories) references Categories(idCategory) on delete restrict
);

create or replace view vw_ProductCategory as select p.*,c.nameCategory from Categories as c, 
Products as p where p.fkProductsCategories = c.idCategory