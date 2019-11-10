# Content-Management-System
A Complete blog website made by using Laravel framework. Includes 
-> CRUD for Posts, Category and Tags
-> Image file upload system
-> Trash Post and Restore post system
-> 2 types of User
-> A welcome page to show the blog posts
-> View each posts individually
-> Search option with Pagination
-> One-to-one & Many-to-Many relationship implimentation


How to run:
1. Open command prompt or git:Bash from the directory you want to setup this project.
2. Run Command: git clone https://github.com/kzshoibal/Content-Management-System.git
3. Run Command: cd Content-Management-System
4. Run Command: Composer install
5. Run Command: copy .env.example .env
6. Run Command: php artisan key:generate
7. (Optional) Open .env change the DB_DATABASE to any other database name
8. Create a database(name: Laravel or given_database_name) in the mysql server
or Run command at mysql directory: mysql>create database database_name
9. Run command: php artisan storage:link
10. Run Command: php artisan migrate --seed
11. from Command prompt, Run Command: php artisan serve

* Use Valet for Mac/Windows If the image files dont show on the website.
