# Library Management System

A web-based Library Management System developed using Laravel and MySQL to organize and manage books and categories efficiently.

## Features

* **Category Management:** Create, view, update, and delete book categories.
* **Book Management:** Manage book records and their details.
* **Database Integration:** Store and manage library data using MySQL.
* **CRUD Operations:** Perform Create, Read, Update, and Delete operations.
* **Laravel MVC Architecture:** Organize application logic using Laravel's Model-View-Controller structure.

## Tech Stack

* **Backend:** PHP, Laravel
* **Database:** MySQL
* **Frontend:** Blade, HTML, CSS, Bootstrap *(keep only the technologies actually used)*

## Getting Started

### Prerequisites

* PHP
* Composer
* MySQL
* XAMPP or another compatible local development environment

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/rabbianawaz90-blip/library-management-system.git
   ```

2. Navigate to the project directory:

   ```bash
   cd library-management-system
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Create your environment file:

   ```bash
   copy .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Create a MySQL database and configure its name and credentials in the `.env` file.

7. Run the database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

9. Open the local URL shown in the terminal in your browser.

## Learning Outcomes

This project demonstrates practical experience with Laravel, database relationships and management, MVC architecture, and CRUD functionality.

## Author

**Rabbia Nawaz**

Aspiring PHP & Laravel Backend Developer
