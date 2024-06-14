# Hobby Work

#### This project is a Laravel 11 application using Docker, PHP 8.3, Node.js 20, Makefile, Bootstrap and Composer.

## Requirements

- Docker
- Docker Compose
- Make
- Composer

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/abhuanco/Hobby-Work.git
cd Hobby-Work

cp .env.example .env

make up

docker compose exec -it hobby composer install
docker compose exec -it hobby php artisan key:generate
docker compose exec -it hobby php artisan migrate
````
