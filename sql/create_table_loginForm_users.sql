create table users(
  id int auto_increment not NULL primary key,
  name varchar(15) not NULL,
  mail varchar(100) not NULL,
  pass varchar(15) not NULL,
  create_at timestamp not NULL default current_timestamp
  );