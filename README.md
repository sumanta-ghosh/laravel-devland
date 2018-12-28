# Laravel Devland

> Using this package developer can do lots of functionality from the browser. This will help them to debug their apps from the browser.

## Installation

Require this package in your `composer.json` or install it by running:

```
composer require sumanta-ghosh/laravel-devland
```

> Note: This package supports auto-discovery features of Laravel 5.4+, You only need to manually add the service provider and alias if working on Laravel version lower then 5.5

To start using Laravel, add the Service Provider and the Facade to your `config/app.php`:

```php
'providers' => [
	// ...
	Skg\Devland\DevlandServiceProvider::class
]
```