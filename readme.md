## Tentang Aplikasi SIMBKK

ide dari pembuatan simbkk ini adalah untuk mendigitalisasi proses proses yang dilakukan oleh admin bkk supaya bisa lebih efektif dan efesien, seperti:
- Manajemen Data Alumni
    - fitur-fitur
        - dapat merestore data yang telah terdelete
        - Serverside datatable
        - Import dari excel
- Manajemen Data Master
- Report
    - export multisheet report data alumni per lulusan
- Statistik
    - statistik status alumni
    - statistik penyebaran tempat kerja terpopuler alumni
    - statistik penyebaran tempat kuliah terpopuler alumni
    - penyebaran jabatan populer alumni
    - penyebaran jurusan kuliah populer alumni
    - rasio pendapatan alumni
    - dinamis statistik , dapat di filter berdasarkan tahun lulus dan jurusan.
- CMS
    - Manajemen informasi sekolah
    - Manajemen informasi lowongan
    - Manajemen Pesan
- Web Preset Configuration
- Portofolio Auto Maker
    - Membuat otomatis halaman resume alumni
    - resume dapat di download (pdf)
    
## INSTALASI APLIKASI
1. clone aplikasi ini pada local server anda
2. Extrak File MissingFiles.rar
3. buat datatabase kosong dengan nama simbkk2019
4. jalankan git bash atau cmd pada direktori projeck ini
6. jalankan perintah : php artisan config:cache
7. jalankan perintah : php artisan migrate --seed
8. tunggu proses selesai
9. login menggunakan username dan password default
- admin
    - username : admin
    - password : admin12345
- alumni
    - username : 11706211 / nis lain diatas 6001
    - password : 11706211 / nis lain diatas 6001
