#  Book Rental Library

## Exercise 5: 

Expand the book rental library application by adding an API layer. This API will allow users to interact with the application programmatically, enabling actions like viewing available books, and renting books. Testing will ensure that both the web and API components of the application function correctly.

## Installation

- Copy `.env.example` to `.env`
- Run `composer install`
- Run `php artisan key:generate --ansi`
- Run `php artisan migrate`
- Run `php artisan db:seed --class=GenresTableSeeder`
- Run `php artisan db:seed --class=BooksTableSeeder`

## Admin Account

To create an admin account run:

`php artisan db:seed --class=AdminSeeder`

## Run Application

Run `php artisan serve` or visit project `public` directory from the browser.

## Public files

To make public  files accessible run: `php artisan storage:link`
