-- schema.sql
-- Run this once to create the database and the contacts table.
-- Example (MySQL CLI): mysql -u root -p < schema.sql

CREATE DATABASE IF NOT EXISTS anto_showroom
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE anto_showroom;

CREATE TABLE IF NOT EXISTS contacts (
    id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(150)  NOT NULL,
    email      VARCHAR(190)  NOT NULL,
    message    TEXT          NOT NULL,
    created_at DATETIME      NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ip_address VARCHAR(45)   NULL
) ENGINE=InnoDB;
