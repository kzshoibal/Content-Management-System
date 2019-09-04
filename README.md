# Content-Management-System
A total blog website

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

* Change the App URL to https://127.0.0.1:8000 if necessary. If the image files dont show on the website.
