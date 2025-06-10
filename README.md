# 📘 SQLite Setup for Project

## 🎯 Goal
Im using Sqlite because there is not order for create database in mysql databse, or porstgre, so simple sqlite and running


## 🎯 Goal
Create and manage an SQLite database named `brighton.db` to store project data and their associated categories.

---

## 📦 1. Create the SQLite Database

Open your terminal and run the following command:

```bash
sqlite3 brighton.db



## 📦 1. Create the SQLite table

Open crate table:

```bash
-- Tabel Project
CREATE TABLE Project (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT NOT NULL,
    tanggal TEXT NOT NULL,  -- Format: YYYY-MM-DD
    biaya REAL NOT NULL
);

-- Tabel Category
CREATE TABLE Category (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT NOT NULL
);

-- Tabel relasi many-to-many: ProjectCategory
CREATE TABLE ProjectCategory (
    project_id INTEGER,
    category_id INTEGER,
    PRIMARY KEY (project_id, category_id),
    FOREIGN KEY (project_id) REFERENCES Project(id),
    FOREIGN KEY (category_id) REFERENCES Category(id)
);



-- Insert Projects
INSERT INTO Project (name, date, cost) VALUES ('Project A', '2017-06-19', 100000);
INSERT INTO Project (name, date, cost) VALUES ('Project B', '2018-01-01', 200000);
INSERT INTO Project (name, date, cost) VALUES ('Project C', '2019-12-31', 300000);

-- Insert Categories
INSERT INTO Category (name) VALUES ('Website');
INSERT INTO Category (name) VALUES ('Android');
INSERT INTO Category (name) VALUES ('Internet Marketing');
INSERT INTO Category (name) VALUES ('Redesign');
INSERT INTO Category (name) VALUES ('iOS');
INSERT INTO Category (name) VALUES ('Advertising');

-- Associate Projects with Categories
INSERT INTO ProjectCategory VALUES (1, 1); -- Project A - Website
INSERT INTO ProjectCategory VALUES (1, 2); -- Project A - Android
INSERT INTO ProjectCategory VALUES (1, 3); -- Project A - Internet Marketing
INSERT INTO ProjectCategory VALUES (1, 4); -- Project A - Redesign
INSERT INTO ProjectCategory VALUES (2, 6); -- Project B - Advertising
INSERT INTO ProjectCategory VALUES (3, 5); -- Project C - iOS
INSERT INTO ProjectCategory VALUES (3, 4); -- Project C - Redesign



-- displays all projects and the total category for each project

SELECT 
    p.id,
    p.name AS project_name,
    COUNT(pc.category_id) AS total_categories
FROM 
    Project p
LEFT JOIN 
    ProjectCategory pc ON p.id = pc.project_id
GROUP BY 
    p.id, p.name;
