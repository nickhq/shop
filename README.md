# shop
Advanta Africa Job Interview stage 1

This repo showcases a simple CRUD application. It's made in accordance to the requirements by
Advanta Africa for the Stage One of A Job Interview

## Technologies Tools Used
- Laravel framework (PHP)
- VueJs
- MySQL Database
- CSS
- HTML

I use [VS Code](https://code.visualstudio.com) as my primary editor of choice

## Setting Up
> Ensure that you have PHP(obviously), composer, mysql and NodeJs installed on your computer.
Follow this steps in order to run this project locally.

1. Clone or download this repository
2. Copy the contents of `.env.example` to `.env`
3. Modify the database credentials **DB_USERNAME** and **DB_PASSWORD** as required by your database instance.
4. Install larave dependencies by running `composer install` on the root project folder
5. Generate the App Key by running `php artisan key:generate`
6. Create a database named `shop`
7. run `php artisan migrate`
8. Seed the database to in order to show the first initial files by running `php artisan db:seed`
9. run `npm install && npm run dev` to install npm modules
10. finally run `php artisan serve`

visit [http://localhost:8888](http://localhost:8888) in your favourite webrowser to preview the App :wink: 
