# SparrowowBlog

## About Repository

SparrowowBlog is simple blog based on Laravel 8.

## Tech Specification

- Laravel 8
- Tailwindcss
- docker

## Installation

- `git clone https://github.com/SBTHDR/sparrowowblog.git`
- `cd sparrowowblog/`
- `composer install`
- `cp .env.example .env`
- Update `.env` and set your database credentials
- `php artisan key:generate`
- `php artisan migrate`
- `npm install`
- `npm run dev`
- `php artisan serve`

## Install with Docker

- `docker-compose up -d`
- `docker-compose exec app sh`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
- Application http://localhost:88/
- DBhost: yourIP:3307, user: root, Password: root

## License

[MIT license](https://opensource.org/licenses/MIT).