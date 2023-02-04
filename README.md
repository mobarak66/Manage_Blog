## Mobarak Hossain
## Usage

### Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

## Composer installation
composer install

### Migrations

To create all the necessary tables and columns, run the following
```
php artisan migrate
```

### Running Then App
php artisan serve

