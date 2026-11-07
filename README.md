# Melvin & Delna — Holy Betrothal & Reception

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php&logoColor=white)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?logo=laravel&logoColor=white)](https://laravel.com)
[![Livewire](https://img.shields.io/badge/Livewire-3.x-FB70A9?logo=livewire&logoColor=white)](https://livewire.laravel.com)
[![Filament](https://img.shields.io/badge/Filament-3.x-F59E0B?logo=filament&logoColor=white)](https://filamentphp.com)

A modern, responsive, and luxury digital invitation website designed for the Holy Betrothal ceremony and reception of **Melvin Sabu & Delna Tom**.

---

## ✨ Features

- **Royal Sapphire & Midnight Luxury Theme**: Premium aesthetic featuring deep midnight navies, vibrant sapphire blues, and gold accents.
- **Hero Landing Screen**: Showcases the couple with an unobscured presentation, dynamic betrothal badge, and smooth scroll entry.
- **Bride & Groom Profile Cards**:
  - **Melvin Sabu**: S/o Sabu Thomas & Nirmala Sabu, Koottapalli house, Kanjirappuzha, Palakkad.
  - **Delna Tom**: D/o Tom Augustine & Bindu Tom, Kongamala house, Ottapalam, Palakkad.
  - Features portrait photos with modern rounded geometry and reflection sheen effects.
- **Luxury "Save The Date" Countdown**:
  - Elegant serif typography (`Playfair Display`) with gold squircle timer cards.
  - Live ticking timer for `DAYS`, `HOURS`, `MINUTES`, and `SECONDS` until **March 29, 2027**.
  - One-tap **Add to Google Calendar** integration.
- **Events & Venues with Interactive Navigation**:
  - **Holy Betrothal**: St. Joseph's Forane Church, Ottapalam, Palakkad.
  - **Reception**: Pisharody's Auditorium, Ottapalam, Palakkad.
  - Direct **Get Location** buttons linking straight to Google Maps directions.
- **Moments & Memories Gallery**:
  - Clean, high-resolution photo grid without obstructing overlays.
  - Interactive **BaguetteBox.js** lightbox with touch-swipe navigation and smooth zoom.
- **Guest Book (Wishes & Blessings)**:
  - Real-time guest wish submission powered by **Laravel Livewire**.
  - Instant live feed of warm prayers and blessings left by family and friends.
- **100% Mobile Responsive**:
  - Swipeable floating pill navbar with automatic section centering (**ScrollSpy**).
  - Fluid typography (`clamp()`) and strict viewport boundaries (zero horizontal overflow across all devices from iPhone SE to desktop).
- **Filament Admin Dashboard**: Complete content management system for RSVPs, wishes, events, and media.

---

## 🛠️ Tech Stack

- **Framework**: [Laravel 10](https://laravel.com)
- **Language**: PHP 8.2+
- **Database**: SQLite (pre-configured, zero-setup) / MySQL supported
- **Real-time Components**: [Livewire 3](https://livewire.laravel.com)
- **Admin Panel**: [Filament v3](https://filamentphp.com)
- **Styling**: Tailwind CSS & Vanilla Modern CSS
- **Lightbox**: [BaguetteBox.js](https://cdnjs.com/libraries/baguettebox.js)

---

## 🚀 Quick Start Guide

### 1. Clone the Repository
```bash
git clone https://github.com/navwil/melvin-delna-bethrothal-1.git
cd melvin-delna-bethrothal-1
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

> **Note**: The `.env.example` file is pre-configured to use SQLite (`DB_CONNECTION=sqlite`). The SQLite database file (`database/database.sqlite`) is included with all seeded data.

### 4. Create Public Storage Link
```bash
php artisan storage:link
```

### 5. (Optional) Re-seed Database
If you wish to reset or fresh-seed the database:
```bash
php artisan migrate:fresh --seed
```

### 6. Start the Local Server
```bash
php artisan serve
```
Open **[http://127.0.0.1:8000](http://127.0.0.1:8000)** in your browser.

---

## 💌 Personalized Guest Invitations

You can generate personalized invitation links with the `to` query parameter:

```
http://127.0.0.1:8000/?to=Guest+Name
```

---

## 🔐 Admin Panel

Access the backend dashboard to manage guests, RSVPs, and settings:

- **URL**: `http://127.0.0.1:8000/admin`
- **Email**: `admin@codelogy.dev`
- **Password**: `123qweasd`

---

## 📁 Project Structure

```
├── app/
│   ├── Filament/            # Filament Admin Resources & Pages
│   ├── Http/Controllers/    # HomeController
│   ├── Livewire/            # CreateWish & ListWish Components
│   └── Models/              # Wedding, Bride, Detail, Galery, Wishes models
├── database/
│   ├── migrations/          # Schema migrations
│   ├── seeders/             # Database seeders (Couple, Events, Gallery, etc.)
│   └── database.sqlite      # Pre-seeded SQLite database
├── public/
│   └── assets/undangan/     # Stylesheets, vendor scripts, and assets
├── resources/views/
│   ├── home.blade.php       # Main invitation page & responsive styling
│   └── livewire/            # Livewire component blade views
├── routes/
│   └── web.php              # Web application routes
└── storage/app/public/      # Couple photos & gallery media
```

---

## 📄 License

This project is open-source and licensed under the [MIT License](LICENSE).
