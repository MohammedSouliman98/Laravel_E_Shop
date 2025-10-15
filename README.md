# Laravel E-Shop

# Developer Name : Mohammed Souliman    
## Contact Me : mohammed.souliman1999@gmail.com



![Build](https://img.shields.io/github/actions/workflow/status/MohammedSouliman98/Laravel_E_Shop/ci.yml)  
![Laravel](https://img.shields.io/badge/Laravel-12.x-red)  
![License](https://img.shields.io/github/license/MohammedSouliman98/Laravel_E_Shop)
<p align="center">
    <img src="public/screenshots/home.png" width="45%" alt="Home Page" />
    <img src="public/screenshots/arabic-page.png" width="45%" alt="Home Page" />
</p>
## 📋 الوصف
مشروع متجر إلكتروني باستخدام Laravel و tialwind. يتيح إدارة المنتجات، عرضها، , اضافتها الي السله و تصفيه المنتجات وعملية الشراء من المستخدمين و ادارة حسابات المستخدمين.

##🚀 الميزات
- لوحه تسجيل دخول للمستخدمين (Authentication )  
- عرض المنتجات + تفاصيلها
- تصفيه المنتجات بحسب ( السعر و المجمواعة )
- إضافة المنتجات إلى سلة الشراء
- لوحة تحكم للإدارة ((REST API) CRUD للمنتجات), (admin panel)
- رفع صور المنتجات
- يتضمن اللغه العربيه و الانكليزيه translatable page
- شكل واجهة مستخدم بسيط و متجاوب
- إعدادات الدفع (لايوجد حاليا)  
- صلاحيات الإدارة / المستخدم

## screenShots

 <p>
      <img src="public/screenshots/home.png" width="30%" alt="Home Page" />
  <img src="public/screenshots/arabic-page.png" width="30%" alt="arabic page" />
  <img src="public/screenshots/brands.png" width="30%" alt="brands" />
   <img src="public/screenshots/cart-page.png" width="30%" alt="cart-page" />
   <img src="public/screenshots/cart.png" width="30%" alt="cart" />
   <img src="public/screenshots/contact.png" width="30%" alt="contact" />
  <img src="public/screenshots/dashboard.png" width="30%" alt="Dashboard" />
   <img src="public/screenshots/dashboard (2).png" width="30%" alt="Dashboard-2" />
  <img src="public/screenshots/dashboard (4).png" width="30%" alt="Dashboard-3" />
  <img src="public/screenshots/edit-dashboard.png" width="30%" alt="Dashboard-4" />
  <img src="public/screenshots/dashboard (4).png" width="30%" alt="Dashboard-5" />
 <img src="public/screenshots/shop.png" width="30%" alt="filter and shop" />
   <img src="public/screenshots/porducts.png" width="30%" alt="porducts" />
   <img src="public/screenshots/list-fo-prodcuts.png" width="30%" alt="filter and shop" />
   <img src="public/screenshots/detail.png" width="30%" alt="detail" />
  <img src="public/screenshots/offers.png" width="30%" alt="offers" />
  <img src="public/screenshots/detial-1.png" width="30%" alt="detail" />
 </p>


 
## 🛠 التقنيات المستخدمة
- Laravel 12
- قاعدة البيانات: MySQL   
- واجهة: Blade + Tailwind  
- حزم إضافية: (mcamara for translate pages , laravel breeze for auth) 

## 🧪 التثبيت محلياً
```bash
git clone https://github.com/MohammedSouliman98/Laravel_E_Shop.git
cd Laravel_E_Shop

Create Database e_shop


npm install
npm run build


composer install
cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan db:seed  

php artisan serve --host=127.0.0.1 --port=8000

لاعادة توليد بيانات في قواعد البيانات
php artisan migrate:fresh --seed


information for login with admin

Email : mohammed@mohammed.com
password : 12121212


