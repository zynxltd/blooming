# Blooming Fast - Laravel Blade Project

This is a Laravel Blade conversion of the Blooming Fast website.

## Setup

1. Install dependencies:
```bash
composer install
```

2. Copy environment file:
```bash
cp .env.example .env
```

3. Generate application key:
```bash
php artisan key:generate
```

4. Start the development server:
```bash
php artisan serve
```

The site will be available at `http://localhost:8000`

## Project Structure

- `resources/views/` - Blade templates
  - `layouts/app.blade.php` - Main layout template
  - `home.blade.php` - Home page view
- `public/` - Public assets (CSS, JS, images)
  - `assets/` - CSS, JS, fonts
  - `images/` - Image files
- `routes/web.php` - Web routes

## Notes

- All assets have been moved to the `public/` directory
- Asset paths use Laravel's `asset()` helper function
- The layout and content remain exactly the same as the original HTML site

# blooming
