# Society Member & Admin Management System

**Internship project** — a Laravel web application for managing society members: registration, authentication, and a role-based admin panel for viewing, editing, and removing member accounts.

## Tech Stack

Laravel · Blade templates · MySQL/SQLite (Eloquent ORM) · PHP password hashing (bcrypt)

## Features

### Member Registration & Login
Custom registration flow validating name, email (unique), and password (min. 8 characters, confirmed), with passwords securely hashed before storage.

### Role-Based Admin Access
A separate admin login checks the authenticated user's role before granting access, keeping member-facing and admin-facing authentication cleanly separated rather than reusing one login for both.

### Admin Dashboard
Lists every registered member (`User::all()`), with inline edit and delete actions per row — the delete action removes a member record, and the edit action opens a form to update their name, email, password, language, and occupation.

### Member Profile Fields
Extended the default Laravel user model with `language` and `occupation` fields, added via a dedicated migration, so members can be categorised beyond the basic auth fields.

### Permission Levels
A `user_level` column (added via migration) distinguishes admin accounts from standard members, laying the groundwork for role-based feature access across the app.

## What I Learned

Designing custom authentication flows without relying solely on framework scaffolding · writing and running Laravel migrations to evolve a schema over time · debugging real routing issues (duplicate route names, mismatched Blade variables) · structuring an admin CRUD interface around Eloquent models.

---

### CV-ready one-liner

> Built a Laravel-based member management system with custom registration/login, role-based admin access, and a full admin dashboard for viewing, editing, and removing member accounts.
