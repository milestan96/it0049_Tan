CREATE DATABASE IF NOT EXISTS pos_db
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE pos_db;

CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
    ('Ana Reyes', 'ana.reyes@example.com', '0917-123-4501', '2026-01-10 09:00:00'),
    ('Ben Santos', 'ben.santos@example.com', '0917-123-4502', '2026-01-11 09:00:00'),
    ('Carla Mendoza', 'carla.mendoza@example.com', '0917-123-4503', '2026-01-12 09:00:00'),
    ('Diego Cruz', 'diego.cruz@example.com', '0917-123-4504', '2026-01-13 09:00:00'),
    ('Ella Garcia', 'ella.garcia@example.com', '0917-123-4505', '2026-01-14 09:00:00');

INSERT INTO users (username, full_name, created_at) VALUES
    ('admin', 'Alex Dela Cruz', '2026-01-10 08:00:00'),
    ('manager01', 'Bianca Flores', '2026-01-10 08:15:00'),
    ('cashier01', 'Carlo Ramos', '2026-01-10 08:30:00'),
    ('cashier02', 'Diana Lim', '2026-01-10 08:45:00'),
    ('stock01', 'Enzo Navarro', '2026-01-10 09:00:00');
