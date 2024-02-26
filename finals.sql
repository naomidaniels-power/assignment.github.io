CREATE DATABASE IF NOT EXISTS classScoreDb;

USE classScoreDb;

CREATE TABLE IF NOT EXISTS scoreTable (
    regno VARCHAR(10) NOT NULL,
    name VARCHAR(30) NOT NULL,
    english INT(3) NOT NULL,
    physics INT(3) NOT NULL,
    chemistry INT(3) NOT NULL,
    maths INT(3) NOT NULL,
    PRIMARY KEY (regno)
) ENGINE=InnoDB;
