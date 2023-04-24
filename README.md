
* Trusty Med

* requirements
    * php
    * mysql
    * laravel

* install 
    * composer install

* database configuration
    * create mysql database called "TrustyMed"
    * add this to .env file
    * DB_DATABASE=TrustyMed
    * DB_USERNAME=root
    * DB_PASSWORD=

* migrate
    * php artisan key:generate
    * php artisan migrate:fresh --seed

* run
    * php artisan serve

