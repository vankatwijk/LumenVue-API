# Lumen

> This is the Lumen backend authentication system for the GDPR web platform project, it works in a statless manner using web tokens for authentication.

## Build Setup

``` bash
# install dependencies
composer install

#db settings
in the .env file set the database 'DB_DATABASE=lumen-jwt2'

#run the migration
php artisan migrate

#seed the users table
php artisan db:seed
note: password for faker users are username@username.com

# serve with hot reload at localhost:8000
php -S localhost:8000 -t public

```

# Database
in the inital webplateform a simple Mysql relational database is used to manage the users, the users table contains :
```
username
email
password
api_token
```
The token which is generated each time during login is tracked to allow only one connection per user to the api server, if the user logs in again with another computer the inital login will be terminated.



