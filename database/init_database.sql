CREATE DATABASE infoCovid;

USE infoCovid;

CREATE TABLE ApiCalls
(
    id            INT AUTO_INCREMENT PRIMARY KEY,
    country       VARCHAR(100) NOT NULL,
    created_at    TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);