# Laravel 5 Database Extensions
Improved and Extended MySQL Builder & Grammar


## Installation

Install via composer, edit your `composer.json` to require the package. Tags are meant to reflect laravel major-minor versions. Unless there are breaking changes in a laravel release, it won't be necessary to specify the latest laravel minor version.

```js
"require": {
    "scm/l5-db-extensions": "~5.2"
}
```

Then run `composer update` in your terminal to pull it in.

Once this has finished, you will need to replace the laravel database service provider with this one in the `providers` array in `config/app.php` as follows:

```php
SCM\L5DB\Database\DatabaseServiceProvider::class
```
