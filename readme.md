# A. Installation
Cara instalasi sebagai berikut

## 1. Clone Project
Clone project ini dengan perintah
```
git clone https://gitlab.com/uripyogantara/pretest-prognet.git
```

## 2. Install Composer
Lakukan proses install composer dengan perintah berikut
```
composer install
```

## 3. Buat file .env
Buatlah file .env melalui text editor kalian (Sublime, Visual Studio Code), kemudian copy isi dari file .env.example ke file .env yang telah dibuat tadi.
kemudian setting username, password, dan database kalian pada file .env

## 4. Generate APP_KEY
Lakukan generati application key dengan perintah berikut
```
php artisan key:generate
```

## 5. Migrate database
Migrasi database dengan perintah
```
php artisan migrate
```

## 6. Insert Data ke Database
Lakukan proses insert data ke database dengan perintah berikut
```
php artisan db:seed
```

## 7. Jalankan Aplikasi
Jalankan aplikasi dengan perintah berikut
```
php artisan serve
```

# B. Push ke Git Repository
Setelah selasai push hasil pretest ke git repository masing-masing dengan cara

## 1. Remote URL
Ubah URL git yang awalnya di URL saya ke URL kalian dengan sintak berikut.
```
git remote set-url origin https://github.com/username/repository.git
```

## 2. Add
```
git add .
```

## 3. Commit
Commit project dimana message disesuaikan dengan proses yang anda dapat, misalkan anda mendapat proses insert ke user, maka message-nya "insert user"
```
git commit -m "message"
```

## 4. Push
```
git push
```