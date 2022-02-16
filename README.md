## Account

I think something, that have a question that I ask myself during this test working and the second. We can talk about it after may be we call me to the technical interview.

- PHP version 7.3 and higher
- MySQL
- Composer

1) You need go to the folder terminal and run 

````
composer install
````

2) You need to configure your ````env```` file to your username, password and database that you will create in your system. 

3) Go to the folder account in terminal and migrate all your tables

````
php artisan migrate
````

4) You need to seed up SQL information by ````DatabaseSeeder.class```` you can see here ````database/seeders````

````
php artisan db:seed
````

5) You need to working and run your laravel locally.

````
php artisan serve

````

6) You need to run the test and see some passes Feature Test you can find ````tests/Feature/UserDetailTest.php````

````
php artisan test

````

7) Go to the routes and see more information in the ````routes/web.php````. 

8) You need the Postman or curl request for delete and update information

````
GET
http://localhost:8000/users

````


````
UPDATE
http://localhost:8000/userDetail/edit/1

````

````
DELETE
http://localhost:8000/userDetail/delete/1

````