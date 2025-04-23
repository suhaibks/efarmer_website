# 🌾 Farmer's Friend – Web Project

A responsive, full-stack Farmer Support Website built with **HTML, CSS, JavaScript, PHP, and MySQL**.  
This project helps farmers access farming equipment, fertilizers, seeds, and useful agricultural content online.

---

## 🚀 Features

- ✅ User Signup & Login (with session handling)
- ✅ Public homepage (no login needed)
- ✅ Equipment, Fertilizer, and Seed listings with images
- ✅ Detail pages for each item (using ID-based routing)
- ✅ Contact & Feedback form (requires login)
- ✅ Responsive UI with modern styling
- ✅ Admin-ready structure (future scope)

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP (Apache Server)
- **Database:** MySQL (via phpMyAdmin / XAMPP)
- **IDE:** Apache NetBeans
- **Server:** XAMPP (localhost)

---

## 📁 Folder Structure




---

## 🧩 Database Setup (Run via phpMyAdmin)

```sql
CREATE DATABASE farmer_site;
USE farmer_site;

-- Users table
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  dob DATE NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  address VARCHAR(255),
  password VARCHAR(255) NOT NULL
);

-- Feedback table
CREATE TABLE feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  message TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


##🔐 Login Credentials (for testing)
You can register via the signup page or manually insert a test user into the database:

sql
Copy
Edit
INSERT INTO users (username, dob, email, address, password)
VALUES ('Test User', '2000-01-01', 'test@example.com', 'Farmville', ''); 
-- Use PHP's password_hash() to generate a secure password

##📦 How to Run Locally

Clone this repo:
git clone https://github.com/yourusername/farmer-website.git
Start XAMPP, ensure Apache & MySQL are running.

Place the folder in:
C:\xampp\htdocs\farmer-website\
Open http://localhost/phpmyadmin and import the SQL schema.

Visit:
http://localhost/farmer-website/index.php

##📝 License
This project is built for educational purposes. You may customize and reuse with credit.

##🙌 Contribute
Pull requests are welcome! For major changes, please open an issue first to discuss what you’d like to change.
