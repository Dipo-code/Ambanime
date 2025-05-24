# Ambanime

**Ambanime** adalah proyek website streaming anime buatan sendiri, dibangun dengan teknologi **PHP**, **HTML**, **Tailwind CSS**, dan **JavaScript**. Proyek ini merupakan bagian dari pembelajaran dan pengembangan sistem website dengan tampilan modern dan fungsionalitas lengkap.

## 🚀 Fitur Utama

- Halaman Home (Anime On-Going, Top 10, Rekomendasi)
- Daftar Anime berdasarkan Genre
- Jadwal Rilis Episode
- Sistem Request Anime
- Dashboard Admin
- Detail Anime (Episode, Link Download, Kualitas)
- Search Bar & Mode Gelap/Terang

## 🛠️ Teknologi yang Digunakan

- **Frontend:** HTML, Tailwind CSS, JavaScript
- **Backend:** PHP (XAMPP)
- **Database:** MySQL
- **Desain:** Figma
- **Version Control:** Git + GitHub

## 📁 Struktur Proyek
ambanime/
├── public/                 # Akses utama oleh browser (root web server)
│   ├── assets/             # Semua aset statis (gambar, CSS, JS)
│   │   ├── css/
│   │   │   └── main.css    # Hasil dari Tailwind build
│   │   ├── js/
│   │   │   └── main.js     # Script JS utama
│   │   └── images/         # Gambar-gambar (cover, logo, thumbnail)
│   ├── index.php           # Homepage
│   ├── detail.php          # Halaman detail anime
│   ├── request.php         # Form request anime
│   ├── login.php           # Halaman login
│   └── ...                 # Halaman publik lainnya
│
├── src/                    # Sumber daya pengembangan (belum dikompilasi)
│   ├── css/
│   │   └── input.css       # File Tailwind source (diproses ke main.css)
│   ├── js/
│   │   └── script.js       # JS mentah (jika perlu build/bundling)
│   └── tailwind.config.js  # Konfigurasi Tailwind
│
├── templates/              # Template reusable (header, footer, layout)
│   ├── header.php
│   ├── footer.php
│   └── sidebar.php
│
├── admin/                  # Panel Admin (hanya admin yang akses)
│   ├── dashboard.php
│   ├── manage-anime.php
│   └── manage-user.php
│
├── includes/               # File backend/logic PHP reusable
│   ├── db.php              # Koneksi database
│   ├── auth.php            # Fungsi otentikasi login
│   ├── anime-functions.php # CRUD Anime
│   └── utils.php           # Fungsi umum/helper
│
├── uploads/                # Folder upload video/file (kalau ada)
│   └── ...
│
├── .gitignore              # File untuk mengabaikan file saat push Git
├── composer.json           # (jika kamu pakai Composer untuk lib PHP)
├── package.json            # Konfigurasi Node & Tailwind
├── tailwind.config.js      # File config Tailwind (jika tidak di src/)
└── README.md               # Penjelasan proyek

📄 Lisensi
Proyek ini dibuat untuk tujuan pembelajaran. Kamu boleh menggunakan, memodifikasi, dan menyebarkan ulang dengan menyebutkan nama pembuat.
