# Content-Management-System
A total blog website

How to run:
1. Open command prompt or git:Bash from the directory you want to setup this project.
2. Run Command: git clone https://github.com/kzshoibal/Task3.git
3. Run Command: cd Task3
4. Run Command: Composer install
5. Run Command: copy .env.example .env
6. Run Command: php artisan key:generate
7. (Optional) Open .env change the DB_DATABASE to any other database name
8. Create a database(name: Laravel or given_database_name) in the mysql server
or Run command at mysql directory: mysql>create database database_name
9. from Command prompt, Run Command: php artisan serve
10. Run Command: php artisan migrate --seed
