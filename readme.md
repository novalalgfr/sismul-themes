# SismulThemes - CMS & Digital Asset Store

SismulThemes is a premium Content Management System (CMS) featuring a modern SaaS dark-mode aesthetic, designed specifically for managing digital asset catalogs and website templates. This project was developed as a final submission for the **Multimedia Systems (SISMUL)** Practical Exam.

## 🚀 Key Features

This system separates the Frontend (Storefront) and Backend (Admin Dashboard) using a clean, Component-based View architecture.

**Frontend (Storefront):**
- **Modern Dark UI:** High-contrast interface featuring a Bento Grid and Neo-Brutalist design principles.
- **Offset Hero Showcase:** A dynamic 9-slot image preview grid with an aesthetic offset layout.
- **Auto-Aligned Zig-Zag:** An automated layout system that alternates content blocks (left/right) based on their sequence index.

**Backend (Admin Page Builder):**
- **Visual Slot Manager:** An intuitive, grid-card-based CRUD interface replacing traditional boring tables.
- **Universal Modal System:** A single, dynamically injected modal component handling all input forms seamlessly without page reloads.
- **Dynamic Content Control:** Full management of text, descriptions, and imagery for feature cards and promotional banners.

## 🛠️ Tech Stack

- **Framework:** CodeIgniter 3 (PHP)
- **Styling:** Tailwind CSS (via CDN)
- **Database:** MySQL
- **Iconography:** Custom SVG Assets

## 📦 Installation Guide (Local Setup)

Follow these steps to run SismulThemes on your local server (XAMPP/Laragon):

1. **Clone/Copy Project:** Place the `SismulThemes` folder into your `htdocs` directory (XAMPP) or `www` directory (Laragon).
2. **Database Setup:** - Open `phpMyAdmin`.
   - Create a new database named `db_sismulthemes`.
   - Import the `db_sismulthemes.sql` file (included in the root folder).
3. **CodeIgniter Configuration:**
   - Open `application/config/database.php` and ensure the credentials match your local server environment (usually `username: root`, `password: `, `database: db_sismulthemes`).
   - Open `application/config/config.php` and adjust `$config['base_url']` to match your local path (e.g., `http://localhost/SismulThemes/`).
4. **Access the Application:**
   - Storefront (Public): `http://localhost/SismulThemes/`
   - CMS Dashboard (Admin): `http://localhost/SismulThemes/admin/`

## 📝 SISMUL Practical Exam Checklist

This project fulfills all the core requirements for the SISMUL practical exam:
- [x] **Image CRUD:** Comprehensively implemented within the Hero Showcase and Zig-Zag Surprise management systems on the Admin page.
- [x] **CodeIgniter Framework:** Utilizes the strict MVC (Model-View-Controller) architecture of CodeIgniter 3.
- [x] **Manual Book:** Detailed documentation is attached separately as `Manual_Book.pdf`.

---
**Developed by:** Ahmad Noval Algifari (Nopall)