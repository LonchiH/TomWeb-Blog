# TomasinoWeb Blog

## Quick Start 
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
install js dependencies
```
npm install && npm run dev
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
start server
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
Features
```
Create a Post
View All Posts
View a Single Post
Update a Single Post
Delete a Single Post
Download data
```

# That's all!



