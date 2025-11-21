⸻

✅ STEP 1 — Install Laravel

composer create-project laravel/laravel pplWeb
cd pplWeb


⸻

✅ STEP 2 — Setup environment

cp .env.example .env
php artisan key:generate
npm install


⸻

✅ STEP 3 — Buat database di phpMyAdmin
	1.	Buka → http://localhost/phpmyadmin
	2.	Klik New
	3.	Buat database: pplWeb

⸻

✅ STEP 4 — Set DB di .env

Buka .env dan isi:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pplWeb
DB_USERNAME=root
DB_PASSWORD=


⸻

✅ STEP 5 — Migrasi database

php artisan migrate
php artisan storage:link


⸻

✅ STEP 6 — Run Laravel

php artisan serve


⸻

✅ STEP 7 — Buat Repo GitHub
	1.	Buka https://github.com/new
	2.	Isi repo name: pplWeb
	3.	Jangan centang apa pun
	4.	Klik Create Repository

⸻

✅ STEP 8 — Push project ke GitHub

Di terminal:

git init
git add .
git commit -m "initial commit"

git branch -M main
git remote add origin https://github.com/USERNAME/pplWeb.git
git push -u origin main

(Ganti USERNAME dengan username GitHub kalian)

Kalau diminta password → paste GitHub Token, bukan password akun.

⸻

✅ STEP 9 — Buat branch pakai nama sendiri

git pull origin main
git checkout -b namakamu

Contoh:

git checkout -b farhan


⸻

✅ DONE ✅

Sekarang kamu sudah siap coding di branch nama kamu sendiri 🎉

⸻

Kalau kamu mau, aku bisa lanjut buatin:
✅ README otomatis
✅ aturan pull request
✅ template commit
✅ cara merge nanti

Mau lanjut? 🚀
