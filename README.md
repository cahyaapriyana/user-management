# User Management System

A simple user management system built with Laravel and Livewire.

## Features

-   User registration with profile picture upload
-   User listing
-   Contact form
-   Responsive design with Tailwind CSS

## Installation

1. Clone the repository

```bash
git clone <repository-url>
cd user-management
```

2. Install dependencies

```bash
composer install
npm install
```

3. Set up environment

```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in `.env` file

5. Run migrations

```bash
php artisan migrate
```

6. Start development server

```bash
php artisan serve
npm run dev
```

## Usage

-   **Home**: `/` - Welcome page
-   **Users**: `/users` - User management (create/list users)
-   **About**: `/about` - About page
-   **Contact**: `/contact` - Contact form

## Tech Stack

-   Laravel 12
-   Livewire 3
-   Tailwind CSS
-   Alpine.js
