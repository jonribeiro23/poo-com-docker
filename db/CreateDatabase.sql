CREATE DATABASE IF NOT EXISTS gallery;

USE gallery;

CREATE TABLE IF NOT EXISTS users (
    id int primary key not null auto_increment,
    username varchar(255),
    user_password varchar(255),
    first_name varchar(255),
    last_name varchar(255)
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;