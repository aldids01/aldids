# ALDIDS Portfolio

ALDIDS is a Laravel 12 portfolio and business website for Alpha Digital Developers. It combines a public Filament-powered landing page with an authenticated admin panel for managing portfolio content, contacts, users, and supporting website data.

## Features

- Public home page built with Filament and custom Blade sections.
- Admin dashboard at `/admin` with Filament resources.
- Portfolio project listing with Livewire and category filters.
- Contact form powered by Livewire and Filament forms.
- Queued email notification when a contact message is submitted.
- Admin resources for contacts, experiences, projects, skills, testimonials, and users.
- Custom Filament themes for the public site and admin panel.
- Vite, Tailwind CSS, and Laravel Vite integration for frontend assets.

## Tech Stack

- PHP 8.2+
- Laravel 12
- Filament 5
- Livewire
- MySQL or another Laravel-supported database
- Tailwind CSS 4
- Vite 7
- PHPUnit 11

## Requirements

Before running the project, install:

- PHP 8.2 or newer
- Composer
- Node.js and npm
- A database supported by Laravel

## Installation

Clone the repository and install dependencies:

```bash
git clone https://github.com/aldids01/aldids.git
cd aldids
composer install
npm install
```

Create the environment file and application key:

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with your local database, mail, queue, and app settings. At minimum, configure:

```env
APP_NAME="ALPHA DIGITAL DEVELOPERS"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aldids
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=database
```

Run migrations:

```bash
php artisan migrate
```

Build frontend assets:

```bash
npm run build
```

## Development

Start the Laravel server:

```bash
php artisan serve
```

In another terminal, start Vite:

```bash
npm run dev
```

If you use queued mail or notifications, start the queue worker:

```bash
php artisan queue:work
```

The project also includes a combined development script:

```bash
composer run dev
```

## Main URLs

- Public website: `/`
- Admin panel: `/admin`
- Admin login: `/admin/login`

## Admin Content

The admin panel provides resources for:

- Contacts
- Experiences
- Projects
- Skills
- Testimonials
- Users

Project records can be categorized and displayed on the public website through the Livewire-powered project section.

## Contact Form

Contact submissions are stored in the database through the `Contact` model. A contact observer queues an email notification after a new message is created, then updates the contact status to `Email Sent`.

Make sure your mail and queue settings are configured correctly in `.env` before relying on this workflow in production.

## Testing

Run the test suite with:

```bash
composer test
```

Or directly:

```bash
php artisan test
```

## Deployment Notes

For production deployments:

```bash
composer install --no-dev --optimize-autoloader
npm ci
npm run build
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Also configure a queue worker, scheduler, mail transport, storage permissions, and your web server document root to point to the `public` directory.

## Repository

- GitHub: https://github.com/aldids01/aldids
- Current release tag: `v2.1`
