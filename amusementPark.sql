create database amusementPark;
use amusementPark;
create table users (
	name		char(32)  	character set utf8,
	childEnterance		int(3),
	adultEnterance 		int(3),
	childBIG3		int(3),
	adultBIG3 		int(3),
	childFree		int(3),
	adultFree 		int(3),
	childYear		int(3),
	adultYear 		int(3),
	total           int(3)
);
describe users;

