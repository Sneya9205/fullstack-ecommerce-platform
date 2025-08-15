# Fullstack eCommerce Platform

## Introduction
This is a **full-featured eCommerce platform** developed to deepen my understanding of **database design principles**, **fullstack application development**, and **server-side scripting** with PHP.  
It implements a complete online store workflow — from product management and search optimization to secure payment processing and order tracking — simulating the requirements of a real-world business application.

The project also focuses on **performance optimization** (via database indexing), **security best practices** (password hashing, session management), and **scalability** considerations (modular PHP structure, reusable components).

---

## Table of Contents
1. [Introduction](#introduction)  
2. [Technologies](#technologies)  
3. [System Design & Architecture](#system-design--architecture)  
4. [Launch](#launch)  
5. [Motivation](#motivation)  
6. [Scope of Functionalities](#scope-of-functionalities)     
7. [Documentation & References](#documentation--references)  

---

## Technologies
- **Backend:** PHP (procedural + modular scripting), MySQL (with indexing for performance)  
- **Frontend:** HTML, CSS, JavaScript (vanilla)  
- **Payments:** Razorpay API integration  
- **Server:** Apache (via XAMPP)  
- **Security:** PHP `password_hash()` / `password_verify()`, session-based authentication  
- **Other Tools:** phpMyAdmin (for database management), Chart.js (for admin analytics dashboard)

---

## Backend Structure 
Implemented in plain PHP with a feature-based file organization — separate PHP scripts handle database connections, configuration, and specific functionality (e.g., product management, order processing, payment integration).
This loose separation of concerns keeps the code maintainable and allows each feature to be worked on independently.

### 1. **Database Layer (MySQL)**
- **Tables:** `users`, `categories`, `products`, `orders`, `order_items`, `payments`
- **Indexes:**  
  - Category-based indexing on `products.category_id` for faster filtering.  
  - Index on `orders.order_date` for time-based queries in analytics.  
- **Relationships:**  
  - One-to-Many between `categories` and `products`  
  - One-to-Many between `orders` and `order_items`  
  - Foreign keys with cascading updates/deletes for data consistency.

### 2. **Backend Layer (PHP)**
- **Routing Logic:** PHP scripts act as controllers, handling requests for product listings, cart actions, and admin operations.
- **Data Access Layer:** Reusable MySQLi functions for queries, parameterized to prevent SQL injection.
- **Session Handling:** Persistent login sessions stored securely and validated on every request.

### 3. **Frontend Layer**
- Minimalistic HTML/CSS for performance, with JavaScript for:
  - Dynamic category filtering
  - Cart updates without full-page reloads
  - Interactive analytics charts (Chart.js)

### 4. **Payment Gateway Integration**
- Razorpay API integration with:
  - Order creation on the server side
  - Payment verification webhook to confirm transaction authenticity

---

## Launch
To run this project locally:
```bash
# Clone the repository
git clone https://github.com/username/fullstack-ecommerce.git

# Move into project folder and start XAMPP server
cd fullstack-ecommerce

# Import the provided .sql file into MySQL
# Access the project through localhost in your browser

## Motivation
I developed this eCommerce platform as a self-driven initiative to bridge the gap between theoretical knowledge and practical application in fullstack development. My goal was to work end-to-end on a real-world style project that required:

- **Database Management Mastery** – Designing normalized relational schemas, applying indexing for performance optimization, writing efficient SQL queries, and managing transactions for data consistency.  
- **Fullstack Integration Skills** – Implementing a cohesive system where the frontend, backend, and database communicate seamlessly, ensuring both usability and maintainability.  
- **PHP–MySQL Proficiency** – Leveraging PHP for server-side scripting and MySQL for persistent data storage, with mysqli for secure, parameterized queries to prevent SQL injection.  
- **Applied Security Practices** – Incorporating `password_hash()` and `password_verify()` for authentication, using session management for access control, and integrating secure payment gateways.  
- **Realistic System Features** – Handling tasks such as product management, category-based search, order tracking, and analytics, mimicking the challenges faced in production-grade applications.  

This project allowed me to practice **full development lifecycle skills** — from planning database structures to implementing backend logic, building responsive interfaces, and deploying payment workflows — all of which are essential in real-world engineering roles.

---

## Scope of Functionalities

### 1. Admin Dashboard
- Add, remove, and edit categories and products.  
- View detailed order history, including customer information, payment status, and timestamps.  
- Update order statuses (e.g., Pending, Shipped, Delivered, Cancelled).  
- Monitor payment confirmations via Razorpay integration.  
- View sales analytics such as:
  - **Total Revenue** – Calculated by summing the amounts from successful orders.  
  - **Most Sold Products** – Determined by grouping and counting items sold.  
  - **Category-wise Sales** – Aggregated revenue per product category.  

### 2. Category-based Product Filtering
- Enhances product search for better user experience.  

### 3. Indexing on Tables
- Improves database search speed and overall performance.  

### 4. Razorpay Payment Gateway
- Enables secure and smooth payment processing.  

### 5. Password Security
- Uses PHP’s `password_hash()` and `password_verify()` for authentication.  

### 6. Session Management
- Maintains user sessions across multiple pages for consistent user experience.  

### 7. Order Status Tracking
- Tracks payment and order completion status.

---

## Documentation & References

- [PHP Documentation](https://www.php.net/docs.php) – Official reference for PHP syntax, functions, and features.  
- [MySQL Documentation](https://dev.mysql.com/doc/) – Comprehensive guide to SQL syntax, database optimization, and indexing techniques.  
- [Razorpay API Docs](https://razorpay.com/docs/) – Official documentation for integrating and using the Razorpay payment gateway.

