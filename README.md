## About the project

Company ABC is looking to create a complaint management portal. Users will be able to register, login, send a complaint
and check the status of the complaint.


## Getting started

###Installation

Please check the official laravel installation guide for server requirements before you start. [documentation](https://laravel.com/docs) 

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

Clone the repository
```
git clone https://github.com/AhmadTaani/CMS.git
```

Install all the dependencies using composer
```
composer install
```

Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```

Generate a new application key
```
php artisan key:generate
```

Run the database migrations (Set the database connection in .env before migrating)
```
php artisan migrate
```

Start the local development server
```
php artisan serve
```
You can now access the server at http://localhost:8000


##Database seeding
Populate the database with seed data with relationships which includes users, complaints, categories and other screens. This can help you to quickly start testing the website and start using it with ready content.

Open the database seeder files inside **database/seeders** and set the property values as per your requirement

```
database/seeders/UserSeeder.php
database/seeders/CategorySeeder.php
database/seeders/ComplaintSeeder.php
```
**or** you can use the values I already created

Run the database seeder, and you're **done**
```
php artisan db:seed
```

**Note** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command
```
php artisan migrate:refresh
```

##Code overview
###Folders

-<code>app</code> - Contains all the Eloquent models

-<code>app/Http/Controllers/Admin</code> - Contains all the admin controllers

-<code>app/Http/Controllers/User</code> - Contains all the user controllers

-<code>app/Http/Controllers/Auth</code> - Contains all the auth controllers

-<code>app/Http/Middleware</code> - Contains all auth middlewares

-<code>app/Http/Requests</code> - Contains all the form requests

-<code>app/Http/Models</code> - Contains all models used

-<code>database/migrations</code> - Contains all the database migrations

-<code>database/seeders</code> - Contains the database seeder

-<code>resources/views/admin</code> - Contains all admin views

-<code>resources/views/user</code> - Contains all user views

-<code>resources/views/layouts</code> - Contains all common view code

-<code>routes</code> -  Contains all the web routes defined in web.php file



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
