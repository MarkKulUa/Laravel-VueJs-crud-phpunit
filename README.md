# Laravel-VueJs-crud-phpunit

## How to use

Clone this project to your local computer.

```ps
git clone https://github.com/mark-kul/Laravel-VueJs-crud-phpunit
```

Navigate to the project folder.

```ps
cd Laravel-VueJs-crud-phpunit
```

Install required packages.

```ps
composer install
```

```ps
npm install
```

create new .env file and edit database credentials there.

```ps
cp .env.example .env
```

Generate new app key.

```ps
php artisan key:generate
```

Run migrations. (it has some seeded data for your testing)

```ps
php artisan migrate --seed
```

To run server 

```ps
php artisan serve
```

### P.s.

Login test credentials:
```ps
login: "test@test.test", pass: "password"
```

Run tests with coverage
```ps
./vendor/bin/phpunit --coverage-html storage/app/coverage
```

When changing JS files run
```ps
npm run dev
```
### License
Please use and re-use however you want.
