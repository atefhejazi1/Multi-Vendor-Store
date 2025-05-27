💲 Multi-Vendor Store with Checkout and Stripe Integration

📌 Overview

This is a Laravel-based multi-vendor e-commerce application that supports:

Vendor-based product listing

RESTful API with token-based authentication (Sanctum)

Frontend for users to browse, add to cart, and checkout

Online payment using Stripe

Well-structured backend using Repository Design Pattern

🚀 Features

🛙️ Vendor-specific product management

🧾 Cart & Checkout system

💳 Online payments with Stripe

🔐 Secure RESTful API with Sanctum

⚙️ Clean backend structure using Repository Pattern

🧺 Ready-to-use Postman collection

🎮 Video demo of the checkout and payment flow

💠 Technologies Used

Laravel 12

Sanctum for API Authentication

Stripe API

Repository Design Pattern

MySQL

Postman

🔐 API Authentication

The API is secured using Laravel Sanctum.Users must authenticate to get a Bearer Token.

Include the token in the Authorization header:

Authorization: Bearer YOUR_TOKEN_HERE

📬 Postman Collection : https://documenter.getpostman.com/view/40972836/2sB2qdfexU


🎮 Demo Video

Watch a short demo of the cart, checkout, and Stripe payment integration:📺 https://drive.google.com/file/d/1eKjtdJyjFPR43CvkTC1dKmSGChKpynw_/view?usp=sharing

✅ How to Run Locally

git clone https://github.com/atefhejazi1/Store-Checkout-Stripe-with-RestfullAPI.git
cd your-repo-name
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed   
php artisan serve



💡Future Enhancements
Order tracking system

📬 Contact

Developed by Atef Hejazi

Email : atefhejazi10@gmail.com
Linkedin : https://www.linkedin.com/in/atefhejazi/
