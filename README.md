
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/MovieTone/module-repository-tool/blob/dockerized-app/application/public/images/main-logo.png" width="400"></a></p>

## Table Of Contents
- [Table Of Contents](#table-of-contents)
- [Built with](#built-with)
- [Getting Started](#getting-started)
  - [Installation](#installation)
    - [Using Docker](#using-docker)
    - [Without Docker](#without-docker)
- [License](#license)

## Built with
- [PHP](https://www.php.net)
- [Laravel](https://laravel.com/)

## Getting Started

### Installation

#### Using Docker
1. Clone or download the repo
2. Install Docker Desktop
3. Navigate to the root directory of the project
4. Run ```docker build -t module-repository-tool .```
5. Run ```docker-compose up --build```
6. Migrate the database:
	```sh
	docker exec -it php bash
	```
	And in the same console:
	```sh
	php artisan migrate
	```
7. Run http://127.0.0.1:8080/
   
#### Without Docker
1. Clone or download the repo
2. Download and install [Composer](https://getcomposer.org/download/)
3. Install Laravel:
	```sh
	composer global require "laravel/installer=~1.1"
	```
4. Run the Web server of your choice (XAMPP, Nginx etc.)
5. Navigate to the /app directory of the project and run the following commands in this order:
6. Run ```composer install```
7. Migrate the database: ```php artisan migrate```
8. Run ```php artisan serve```
9. Run http://127.0.0.1:8000/

## License
Licensed under the [Apache, Version 2.0 license](http://www.apache.org/licenses/LICENSE-2.0).
