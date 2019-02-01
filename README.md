# test-app

## Install

```
git clone git@github.com:AucT/test-app.git
cd test-app
composer install
php artisan migrate
php artisan db:seed
```

### Show list


```
php artisan users:list
```

```
php artisan users:list --id=1
```

```
php artisan users:list --country=Ukraine
```

```
php artisan users:list --age=18
```

```
php artisan users:list --country=Ukraine --age=18
```

### Delete by id

```
php artisan users:delete --id=1
```
