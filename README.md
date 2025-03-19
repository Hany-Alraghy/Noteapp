# Laravel Notes App 

A simple Laravel application that allows users to register, log in, and manage their notes (CRUD functionality).

## Features 
- User authentication (Login, Register, Logout, Password Reset)
- Create, Read, Update, and Delete (CRUD) Notes
- Secure authentication system using Laravel Breeze
- CSRF protection and input validation
- API endpoints for managing notes

---

##  Installation Guide

### Clone the repository:
```bash
git clone https://github.com/Hany-Alraghy/Noteapp.git 
cd Noteapp
```
### Install dependencies :
```bash
composer install
```
### Set up the environment :
```bash

cp .env.example .env
php artisan key:generate
```
### Configure the database
## Edit .env and set your database connection:
```bash

DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Run migrations:
```bash

php artisan migrate
```

### Start the development server:
```bash

php artisan serve
```

## Postman Collection

You can download the Postman collection for testing the APIs from the following link:

[Download Postman Collection](NoteApp2.postman_collection)

