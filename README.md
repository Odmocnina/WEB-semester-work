# Semester Project - E-shop

This project is a simple e-shop web application created as a university semester project. The application is written in PHP using a custom object-oriented programming (OOP) architecture and custom routing through a main front controller.

@Author: Michael Hladky

## 🌟 Key Features
* **Product Catalog:** Browsing and listing available products in the e-shop.
* **User Accounts:** Customer registration and login system (featuring forced SSL for secure authentication).
* **Shopping Process:** Adding items to the shopping cart and submitting orders.
* **Admin Interface:** Managing e-shop content (products, users) for accounts with administrator privileges.

## 📂 Project Structure
* `index.php` – The main entry point (front controller) of the entire application. It handles and routes all incoming requests.
* `settings.inc.php` – The main configuration file used to set up paths and database connection details.
* `app/` – A directory containing the application's core logic and classes (e.g., the startup class `ApplicationStart.class.php`).
* `sql/` *(or similar directory)* – Contains `.sql` scripts for the initial generation of database tables.

## 🛠️ Technologies and Requirements
* **Backend:** PHP (built on a custom architecture without utilizing large frameworks).
* **Database:** MySQL / MariaDB (connection handled ideally via PDO).
* **Server:** Apache / Nginx.

## 🚀 How to Deploy and Run
1. **Database Preparation:** In your database management tool (e.g., phpMyAdmin or Adminer), create a new empty database and execute the provided initialization `.sql` script to set up the table structure.
2. **Configuration:** Open the `settings.inc.php` file and enter your actual database credentials (server address, username, password, database name).
3. **Server Upload:** Upload the entire project folder to your web server.
4. **Launch:** Open your web browser and navigate to the website's URL (the application will load through `index.php`).

---

*💡 Development Tip: In the `index.php` file, there is a commented-out line `ini_set('display_errors', 1);` at the top. If the application shows a blank white screen (especially on the students.kiv.zcu.cz server), uncomment this line to display detailed error messages.*