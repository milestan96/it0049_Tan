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
    ('Ana Reyes', 'ana.reyes@example.com', '0917-123-4501', '2026-01-10 09:00:00'),
    ('Ben Santos', 'ben.santos@example.com', '0917-123-4502', '2026-01-11 09:00:00'),
    ('Carla Mendoza', 'carla.mendoza@example.com', '0917-123-4503', '2026-01-12 09:00:00'),
    ('Diego Cruz', 'diego.cruz@example.com', '0917-123-4504', '2026-01-13 09:00:00'),
    ('Ella Garcia', 'ella.garcia@example.com', '0917-123-4505', '2026-01-14 09:00:00');

INSERT INTO users (username, full_name, email, created_at) VALUES
    ('miles.tan', 'Miles Tan', 'miles.tan@example.com', '2026-10-01 09:00:00');

INSERT INTO tasks (title, status, task_date, created_at) VALUES
    ('Review project requirements', 'completed', '2026-10-11', '2026-10-10 09:00:00'),
    ('Plan the week', 'completed', '2026-10-12', '2026-10-10 09:15:00'),
    ('Check database records', 'pending', '2026-10-13', '2026-10-12 08:00:00'),
    ('Finish task list page', 'in-progress', '2026-10-13', '2026-10-12 08:15:00'),
    ('Review responsive layout', 'pending', '2026-10-13', '2026-10-12 08:30:00'),
    ('Write project documentation', 'pending', '2026-10-14', '2026-10-12 09:00:00'),
    ('Prepare demo walkthrough', 'pending', '2026-10-14', '2026-10-12 09:15:00'),
    ('Submit technical assessment', 'pending', '2026-10-15', '2026-10-12 09:30:00');
