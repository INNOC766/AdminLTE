# AdminLTE 4 → Laravel Integration

This folder contains all the Laravel-formatted files needed to integrate
**AdminLTE v4** into a fresh Laravel project. Every HTML page has been
converted to a proper **Blade template**, assets are referenced through
Laravel's `asset()` helper, and full **routing + controller** scaffolding
is included.

---

## Directory Structure (files you copy into your Laravel project)

```
laravel/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Auth/
│           │   ├── LoginController.php
│           │   └── RegisterController.php
│           ├── DashboardController.php
│           ├── FormController.php
│           ├── LayoutController.php
│           ├── TableController.php
│           ├── UIController.php
│           └── WidgetController.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php        ← Main admin layout (sidebar + topbar)
│       │   └── auth.blade.php       ← Auth layout (login / register)
│       ├── partials/
│       │   ├── topbar.blade.php     ← Top navigation bar
│       │   ├── sidebar.blade.php    ← Side navigation menu
│       │   └── footer.blade.php     ← Page footer
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       └── dashboard/
│           ├── index.blade.php      ← Dashboard v1 (with charts & widgets)
│           ├── index2.blade.php     ← Dashboard v2 (placeholder)
│           └── index3.blade.php     ← Dashboard v3 (placeholder)
├── routes/
│   └── web.php
├── setup-assets.sh                  ← Helper script (Linux/macOS) to copy CSS/JS/img
└── setup-assets.ps1                 ← Helper script (Windows PowerShell) to copy CSS/JS/img
```

---

## Quick Start

### 1. Create a new Laravel project

```powershell
composer create-project laravel/laravel my-admin-app
cd my-admin-app
```

### 2. Copy all files from this folder

Copy **everything** inside this `laravel/` folder into your Laravel project root,
merging with the existing structure:

```
laravel/app/         → my-admin-app/app/
laravel/resources/   → my-admin-app/resources/
laravel/routes/      → my-admin-app/routes/
```

### 3. Copy AdminLTE assets into `public/`

Run the helper script from your Laravel project root:

```powershell
.\setup-assets.ps1 -Dist "C:\Users\INNOCENT\Desktop\template\AdminLTE\dist"
```

Linux/macOS alternative:

```bash
bash setup-assets.sh /path/to/AdminLTE/dist
```

**Or manually copy:**

```
AdminLTE/dist/css/adminlte.min.css  → public/adminlte/css/adminlte.min.css
AdminLTE/dist/css/adminlte.css      → public/adminlte/css/adminlte.css
AdminLTE/dist/js/adminlte.min.js    → public/adminlte/js/adminlte.min.js
AdminLTE/dist/js/adminlte.js        → public/adminlte/js/adminlte.js
AdminLTE/dist/assets/img/           → public/adminlte/img/
```

The `asset()` helper in Blade templates points to `public/adminlte/...`:

```php
// In layouts/app.blade.php
<link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}" />
<script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
```

### 4. Configure your `.env`

```env
APP_NAME="My Admin"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_admin_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run migrations

```powershell
php artisan migrate
```

### 6. Start the development server

```powershell
php artisan serve
```

PowerShell note: run commands on separate lines (PowerShell 5.1 does not support `&&`).

Open **http://localhost:8000** — you will be redirected to `/login`.

---

## Windows SSL Fix (Composer curl error 60)

If Composer shows SSL certificate errors (curl error 60):

1. Download latest CA bundle from:
    https://curl.se/ca/cacert.pem

2. Save it to:
    C:\xampp\php\extras\ssl\cacert.pem

3. Edit C:\xampp\php\php.ini and set:

```ini
[curl]
curl.cainfo = "C:\xampp\php\extras\ssl\cacert.pem"

[openssl]
openssl.cafile = "C:\xampp\php\extras\ssl\cacert.pem"
```

4. Remove insecure Composer setting (if enabled):

```powershell
composer config --global secure-http true
composer config --global disable-tls false
```

5. Close and reopen terminal, then verify:

```powershell
composer diagnose
```

Tip: If Avast firewall is intercepting HTTPS, whitelist PHP/Composer or disable HTTPS scanning for local development.

---

## Routes Overview

| Method | URI                        | Name                      | Controller                            |
|--------|----------------------------|---------------------------|---------------------------------------|
| GET    | /login                     | login                     | Auth\LoginController@showLoginForm    |
| POST   | /login                     | —                         | Auth\LoginController@login            |
| POST   | /logout                    | logout                    | Auth\LoginController@logout           |
| GET    | /register                  | register                  | Auth\RegisterController@showRegistrationForm |
| POST   | /register                  | —                         | Auth\RegisterController@register      |
| GET    | /                          | dashboard                 | DashboardController@index             |
| GET    | /dashboard/v2              | dashboard.v2              | DashboardController@v2                |
| GET    | /dashboard/v3              | dashboard.v3              | DashboardController@v3                |
| GET    | /widgets/small-box         | widgets.small-box         | WidgetController@smallBox             |
| GET    | /widgets/info-box          | widgets.info-box          | WidgetController@infoBox              |
| GET    | /widgets/cards             | widgets.cards             | WidgetController@cards                |
| GET    | /layout/fixed-sidebar      | layout.fixed-sidebar      | LayoutController@fixedSidebar         |
| GET    | /ui/general                | ui.general                | UIController@general                  |
| GET    | /ui/icons                  | ui.icons                  | UIController@icons                    |
| GET    | /ui/timeline               | ui.timeline               | UIController@timeline                 |
| GET    | /forms/general             | forms.general             | FormController@general                |
| GET    | /tables/simple             | tables.simple             | TableController@simple                |

---

## Adding a New Page

1. **Create the Blade view** in `resources/views/your-section/page.blade.php`:

```blade
@extends('layouts.app')

@section('title', 'My Page')
@section('page_title', 'My Page')

@section('breadcrumb')
    <li class="breadcrumb-item active">My Page</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">My Card</h3>
                </div>
                <div class="card-body">
                    Your content here.
                </div>
            </div>
        </div>
    </div>
@endsection
```

2. **Add a route** in `routes/web.php`:

```php
Route::get('/my-page', [MyController::class, 'index'])->name('my.page');
```

3. **Add a sidebar link** in `resources/views/partials/sidebar.blade.php`:

```blade
<li class="nav-item">
    <a href="{{ route('my.page') }}" class="nav-link {{ request()->routeIs('my.page') ? 'active' : '' }}">
        <i class="nav-icon bi bi-circle"></i>
        <p>My Page</p>
    </a>
</li>
```

---

## Blade Sections Reference

| Section / Stack   | Purpose                                          |
|-------------------|--------------------------------------------------|
| `@section('title')` | `<title>` tag content                          |
| `@section('page_title')` | H3 heading in the content header          |
| `@section('breadcrumb')` | Breadcrumb `<li>` items                   |
| `@section('content')` | Main page content                            |
| `@push('styles')` | Page-specific `<link>` tags (in `<head>`)        |
| `@push('scripts')` | Page-specific `<script>` tags (before `</body>`) |

---

## Security Notes

- All forms use `@csrf` — CSRF protection is enabled by default.  
- Auth routes use the `guest` middleware (redirect logged-in users away).  
- All admin routes are guarded by the `auth` middleware.  
- Passwords are hashed with `Hash::make()` using bcrypt.  
- Logout uses a POST request + session invalidation to prevent CSRF attacks.

---

## License

AdminLTE is MIT licensed — see the main project [LICENSE](../LICENSE).
