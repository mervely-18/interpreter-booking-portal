# Interpreter Booking Portal

A Laravel-based company portal built during my software engineering internship at **Absolute Interpretations** (Birmingham, UK).

## Overview

This project started as a series of small Laravel and JSON practice exercises and progressively grew into a functional portal for registering and managing interpreting staff. It has two access levels — worker and admin — each with its own login flow and permissions.

## Features

- **Worker registration & login** — workers create an account and log in to their own profile.
- **Worker profile & language selection** — after logging in, a worker enters their address, phone number and occupation (e.g. the type of appointment they're interpreting for), and selects their interpreting language from a live, searchable language dropdown.
- **Admin login & dashboard** — a separate admin login leads to a private dashboard listing every registered worker, with the ability to edit or delete records.
- **Backend validation** — registration, login and profile-update forms are validated server-side before hitting the database.
- **Secure credential handling** — sensitive configuration (database, mail, app key) is kept out of source control via Laravel's `.env` file.
- **Dynamic JavaScript** — the language dropdown and interactive UI elements are populated and updated client-side.

## Internship experience

Delivered as a series of weekly assigned engineering tasks at Absolute Interpretations:

- Progressed from Laravel/JSON exercises to developing a functional company portal with admin/user access controls and backend validation.
- Built a JSON-based translation store and integrated it into a multi-language API, applying secure credential handling throughout.
- Integrated dynamic JavaScript features and secured credentials using `.env` configuration, delivering weekly assigned engineering tasks.

## Tech stack

- PHP / Laravel
- Blade templates
- Vanilla JavaScript (Fetch API)
- SQLite (default local database)

## Running locally

\`\`\`bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
\`\`\`
