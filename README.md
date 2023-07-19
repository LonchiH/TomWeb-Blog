# TomasinoWeb Blog
a simple blog-style website

## Quick Start 
Prerequisites
```
Install the following:
1.PHP
2.Composer - https://getcomposer.org/
3.Laravel - Here is a complete and detailed guide: https://laravel.com/docs/5.0#install-laravel
```
clone the repo
```
git clone git@github.com:LonchiH/TomWeb-Blog.git
```
change current directory

```
cd [path]
```
install dependencies
```
composer install
````
create .env file
```
cp (unix) or copy (Windows) .env.example .env
```
generate env key
```
php artisan key:generate
```
migrate the migration and seed the database
```
php artisan migrate:fresh --seed
```
start server on a separate console
```
php artisan serve
```
.env sample DB values
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=[pass]
```
Troubleshooting and FAQs:
```
PHP errors:
1. "The zip extension and unzip command are both missing, skipping." 
    remove this semicolon, ";extension=zip", on your php.ini
2. PHP Fileinfo extension at php.ini does not exist, PHP 5.4
    Add extension=php_fileinfo.dll on your php.ini

    other things to uncomment may include:
    a. extension=php_pgsql.dll
    b. extension=pgsql
    c. extension=pdo_mysql
```

# Features

- Create a Post
- View All Posts
- View a Single Post
- Update a Single Post
- Delete a Single Post
- Export view data to PDF


# That's all!



