# Laravel Multi-Role Dashboard App

A clean and modular Laravel application demonstrating:
- Role-based dashboards (Admin, Vendor, Customer)
- Full Product CRUD (Create, Read, Update, Delete)
- EMI Calculator (JavaScript-powered)
- Compound Interest Calculator (JavaScript-powered)

---

## 🚀 Features

###  Role-Based Dashboards
- Admin Dashboard (`/admin/dashboard`)
- Vendor Dashboard (`/vendor/dashboard`)
- Customer Dashboard (`/dashboard`)
- Custom Middleware: `RoleManager` to secure routes by role

 Product CRUD (Vendor)
- Create, View, Edit, Delete Products
- Fields: `Product Name`, `Price`
- Routes protected for vendors only
- Uses RESTful `Route::resource` and clean Blade templates

  EMI Calculator (Admin)
- Calculates Monthly EMI, Total Payment, and Total Interest
- Inputs: Loan Amount, Interest Rate, Loan Tenure
- Fully JavaScript-based and styled with TailwindCSS

 Compound Interest Calculator (Customer)
- Calculates compound return based on annual interest and duration
- Inputs: Principal, Interest Rate, Number of Years
- Instant results without reloading the page

 Profile Management
- Update name, email, and other profile details
- Account delete option with password confirmation
- Secure session invalidation on delete

---

Tech Stack

- **Backend:** Laravel 11
- **Frontend:** Blade + TailwindCSS + JavaScript
- **Authentication:** Laravel Breeze
- **Database:** MySQL (or SQLite for testing)

---



##  Roles & Demo User Credentials

| Role     | ID  | Dashboard Route     | Access                     | Username (Email)     | Password     |
|----------|-----|---------------------|----------------------------|-----------------------|--------------|
| Admin    | 0   | `/admin/dashboard`  | Full access                | admin@mail.com        | admin@1234   |
| Vendor   | 1   | `/vendor/dashboard` | Product CRUD               | vendor@mail.com       | vendor@1234  |
| Customer | 2   | `/dashboard`        | Compound Calculator only   | vivek@mail.com        | vivek@1234        |


---
Installation Guide


git clone https://github.com/vivekls333/Project.git
cd Project
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


