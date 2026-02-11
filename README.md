# 🏨 The Nexus | Smart Hospitality Management System

A comprehensive web-based hotel management system built with **PHP** and **MySQL**. This application provides a user-friendly interface for guests to book rooms and a powerful admin dashboard for hotel staff to manage bookings, rooms, staff, and payments.

![Home Page](redmiimg/home1.jpg)

## ✨ Features

### 👤 For Users (Guests)

- **User Authentication**: Secure Sign Up and Login.
- **Room Booking**: Browse available rooms and book them easily.
- **Responsive Design**: Works on desktop and mobile.

### 🛠️ For Admin (Hotel Staff)

- **Dashboard**: Overview of hotel status (Dashboard doesn't show in mobile view).
- **Room Management**: Add, edit, or delete rooms (Superior, Deluxe, Guest House, etc.).
- **Booking Management**: Confirm or delete room bookings.
- **Payment Management**: View and manage payments.
- **Staff Management**: Manage hotel staff details.

## 🚀 Getting Started

### Prerequisites

- **PHP** (v8.0 or higher recommended)
- **MySQL Database** (e.g., via XAMPP/WAMP)
- **Web Server** (Apache recommended)

### Installation Guide

1.  **Clone the Repository** (or download the source code).

2.  **Database Setup**
    - Open your database management tool (e.g., phpMyAdmin).
    - Create a new database named `nexushotel`.
    - Import the `Nexus.sql` file provided in the root directory (it will create the `nexushotel` database).

3.  **Database Configuration**
    - The system uses the following default credentials in `config.php`:
      - **Host**: `localhost`
      - **User**: `nexus_user`
      - **Password**: `password`
      - **Database**: `nexushotel`
    - _Step_: You can either create this user in your MySQL database OR update `config.php` to use your existing credentials (e.g., `root` and empty password).

4.  **Run the Application**
    - **Using XAMPP**: Move the project folder to `htdocs` and visit `http://localhost/Hotel-Management-System/`.
    - **Using PHP Built-in Server**:
      ```bash
      php -S localhost:8000
      ```
      Then open [http://localhost:8000](http://localhost:8000) in your browser.

## 🔑 Default Login Credentials

**Admin Account:**

- **Email**: `Admin@gmail.com`
- **Password**: `1234`
- **Login URL**: `/login.php` (or login as "Staff" on login page)

**Demo User Account:**

- **Email**: `tusharpankhaniya2202@gmail.com`
- **Password**: `123`

## 📸 Screenshots

|          Home Page          |          User Login          |
| :-------------------------: | :--------------------------: |
| ![Home](redmiimg/home2.jpg) | ![Login](redmiimg/login.jpg) |

|        Admin Dashboard        |       Room Booking        |
| :---------------------------: | :-----------------------: |
| ![Dashboard](redmiimg/d1.jpg) | ![Rooms](redmiimg/d2.jpg) |

## 🤝 Contribution

Free to use and modify for educational purposes.

---

_The Nexus - Experience Smart Hospitality Reimagined_
