# Laravel ToDo Project

## Introduction

Welcome to the Laravel ToDo project! This is a simple ToDo application built using Laravel PHP framework with Laravel Breeze for authentication.

## Author

- **Name:** Dusan Lukic
- **Student ID:** SI 15/20

## Project Overview

This project is a basic ToDo application where users can create, edit, and delete tasks. It utilizes Laravel Breeze for user authentication, making it easy to get started with user registration, login, and password reset functionalities.

## Features

- User authentication using Laravel Breeze
- Create, read, update, and delete tasks
- User-specific tasks
- Simple and intuitive user interface

## Installation

1. Clone the repository:

git clone https://github.com/dusanlukic404/todo-laravel.git

2. Install dependencies:

cd todo-laravel
composer install

3. Set up environment file

cp .env.example .env

4. Generate application key:

php artisan key:generate

5. Migrate the database 

php artisan migrate

6. Seed the database with sample data (optional):

php artisan db:seed

7. Start the development server:

php artisan serve 

8. Visit http://127.0.0.1:8000 in your browser to see the application.

## Usage 

- Register a new account or log in if you already have one.
- Once logged in, you can create, edit, and delete your tasks.
- Logout when you're done.

## Contribution

If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.

## License

This project is open-source and available under the MIT License.