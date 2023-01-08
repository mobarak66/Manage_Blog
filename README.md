## Usage

### Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

## Mobarak Hossain
composer install

### Migrations

To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```
### Running Then App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```
Asking for key generation- Follow below:
## Mobarak Hossain
php artisan key:generate

Finally:
php artisan serve

