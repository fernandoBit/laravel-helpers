# Laravel Helpers

Global helpers for Laravel projects

## Installation

You can install the package via composer:

```bash
composer require bitvalencia/laravel-helpers
```

## Usage

**carbon**

Shortcut for: `new Carbon` or `Carbon::parse()`
``` php
carbon('1 year ago');
```

**user**

A shortcut for `auth()->user()`
```php
user()->posts()->create([...]);
```

**ok**

Returns an HTTP 204 response (OK, No Content).
```php
return ok();
```

**fail_validation**

Returns an HTTP 422 response (Validation Error).
``` php
fail_validation('key', 'message');
```

**dump_sql**

Returns sql query with bindings data.
```php
dump_sql(\DB::table('users')->where('email', "blaBla")->where('id', 1)); 
// returns "select * from `users` where `email` = 'blaBla' and `id` = 1"
```

**faker**

Shortcut for: $faker = Faker\Factory::create()
 ```php
faker()->address; // returns random, fake address
faker('address'); // alternate syntax
```

**stopwatch**

Returns the amount of time (in seconds) the provided callback took to execute. Useful for debugging and profiling.
```php
stopwatch(function () {
    sleep(2);
}); // returns "2.0"
```

**str_between**

 ```php
str_between('--thing--', '--'); // returns "thing"
str_between('[thing]', '[', ']'); // returns "thing"

Str::between('--thing--', '--'); // returns "thing"
Str::between('[thing]', '[', ']'); // returns "thing"
 ```

**money**

```php
echo money(12); // echoes "$12.00"
echo money(12.75); // echoes "$12.75"
echo money(12.75, false); // echos "$13"
echo money(12.75, true, 'en_GB'); // echos "£12.75"
```
Note: unless specified otherwise, money() will detect the current locale.

**str_wrap**

```php
str_wrap('thing', '--'); // returns "--thing--"

Str::wrap('thing', '--'); // returns "--thing--"
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email ivan@bitvalencia.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
