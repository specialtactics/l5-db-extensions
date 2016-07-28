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

Once this has finished, you will need to add the following service providers to the `providers` array in `config/app.php` as follows:

```php
	/*
	 * SCM L5 DB Extensions
	 */
	SCM\L5DB\Database\DatabaseServiceProvider::class,
	SCM\L5DB\Database\MigrationServiceProvider::class,
```

## Requirements
Currently this only supports MySQL/MariaDB database drivers.


## Usage
Currently these extensions provide some additional field types, and triggers.

### Extra Field Types

#### Updated Timestamp
This is a timestamp column which will automatically update when the record is updated through the database engine.

```php
	$table->updatedTimeStamp(FIELD_NAME);
```

#### Set
This is a set data structure.

```php
	$table->set(FIELD_NAME, ['Item1', 'Item2', 'Item3', ...]);
```


### Triggers

#### Date Time Trigger
This is a trigger put on the table after creation, which will ensure that anytime a record is created, this field will be set to the creation date of the record. This is useful for it's reliability.

```php
    public function up()
    {
		Schema::create(
			...
		);


        // Created at trigger
        $this->createDateTimeTrigger(TABLE_NAME, FIELD_NAME);
    }
```