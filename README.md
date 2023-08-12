## About Template

dibuat untuk memudahkan pekerjaan saya sehingga tidak perlu lagi membuat template dan melakukan setup auth atau middleware

## Configuration

-   **cek pada file app/Http/Middleware/CheckRole.php**
-   **cari baris 'role' pada file app/Http/Kernel.php**

## Note

-   **Template menggunakan template login manual**
-   **Template belum menggunakan component**
-   **Template hanya menggunakan FrontEndController, BackEndController dan AuthController**

## How To Install

-   download zip atau menggunakan "clone git clone https://github.com/abangucup/template_laravel_9.git"
-   composer install
-   php artisan key:generate
-   buat database template
-   configurasi .env
-   php artisan migrate:fresh --seed
-   php artisan serve
