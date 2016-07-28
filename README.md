# Laravel 5 Database Extensions
Improved and Extended MySQL Builder & Grammar


## Installation

Install via composer - edit your `composer.json` to require the package.

```js
"require": {
    "scm/l5-db-extensions": "dev-master"
}
```

Then run `composer update` in your terminal to pull it in.

Once this has finished, you will need to replace the laravel database service provider with this one in the `providers` array in `config/app.php` as follows:

```php
'SCM\L5DB\Database\DatabaseServiceProvider::class'
```
