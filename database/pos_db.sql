CREATE DATABASE IF NOT EXISTS pos_db
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE pos_db;

DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS customers;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
    ('Nadia Natividad', 'nadia.natividad@example.com', '0917-638-2140', '2026-02-03 09:00:00'),
    ('Marco Sis', 'marco.sis@example.com', '0917-742-5816', '2026-02-04 09:00:00'),
    ('Vhong Navarro', 'vhong.navarro@example.com', '0917-315-9072', '2026-02-05 09:00:00'),
    ('Jonas Mercado', 'jonas.mercado@example.com', '0917-864-2035', '2026-02-06 09:00:00'),
    ('Tessa Valdezsissimo', 'tessa.valdezsissimo@example.com', '0917-529-7461', '2026-02-07 09:00:00');

INSERT INTO users (username, full_name, email, created_at) VALUES
    ('miles.tan', 'Miles Tan', 'miles.tan@example.com', '2026-10-01 09:00:00');

INSERT INTO tasks (title, status, task_date, created_at) VALUES
    ('Wash the dishes', 'completed', '2026-10-11', '2026-10-10 09:00:00'),
    ('Sweep the living room', 'completed', '2026-10-12', '2026-10-10 09:15:00'),
    ('Fold the clean laundry', 'pending', '2026-10-13', '2026-10-12 08:00:00'),
    ('Clean the kitchen counters', 'in-progress', '2026-10-13', '2026-10-12 08:15:00'),
    ('Take out the trash', 'pending', '2026-10-13', '2026-10-12 08:30:00'),
    ('Dust the bookshelves', 'pending', '2026-10-14', '2026-10-12 09:00:00'),
    ('Water the house plants', 'pending', '2026-10-14', '2026-10-12 09:15:00'),
    ('Organize the pantry', 'pending', '2026-10-15', '2026-10-12 09:30:00');
