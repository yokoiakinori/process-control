DROP SCHEMA IF EXISTS process_control;
CREATE SCHEMA process_control;
USE process_control;

DROP TABLE IF EXISTS user,position,job;

CREATE TABLE user
(
    id  INT(11)
)