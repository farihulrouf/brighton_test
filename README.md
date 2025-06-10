# 📘 SQLite Setup untuk Project

## 🎯 Tujuan
Membuat dan mengelola database SQLite bernama `brighton.db` untuk menyimpan data proyek dan kategorinya.

---

## 📦 1. Buat Database SQLite

Buka terminal dan jalankan perintah berikut:

```bash
sqlite3 brighton.db


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
