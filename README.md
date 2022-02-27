# PHP Articles

This is submission for https://github.com/humansis/php-assignment

## Technologies

- PHP 7 (Pure PHP, without external libraries)
- TailwindCSS for page styling

## Requirements

- PHP 7+
- MySQL 5

## Usage

- Default database conigurations (stored in `configs.php`):

```
define("DB_HOST", "localhost");
define("DB_PORT", "3306");
define("DB_NAME", "cms");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
```

- `index.php` is the entry point of this service.
- Database and tables will be initialized on first run (if not created).
