# Laravel E-Shop

![Build](https://img.shields.io/github/actions/workflow/status/MohammedSouliman98/Laravel_E_Shop/ci.yml)  
![Laravel](https://img.shields.io/badge/Laravel-12.x-red)  
![License](https://img.shields.io/github/license/MohammedSouliman98/Laravel_E_Shop)

## 📋 الوصف
مشروع متجر إلكتروني باستخدام Laravel. يتيح إدارة المنتجات، عرضها، وعملية الشراء من المستخدمين.

## 🚀 الميزات
- عرض المنتجات + تفاصيلها  
- إضافة المنتجات إلى سلة الشراء  
- لوحة تحكم للإدارة (CRUD للمنتجات)  
- رفع صور المنتجات  
- شكل واجهة مستخدم بسيط  
- إعدادات الدفع (إن وُجد)  
- صلاحيات الإدارة / المستخدم  

## 🛠 التقنيات المستخدمة
- Laravel (نسخة: …)  
- PHP (نسخة: …)  
- قاعدة البيانات: MySQL / PostgreSQL  
- واجهة: Blade + Tailwind أو أي CSS تستخدمه  
- حزم إضافية: (اذكر أي حزم composer استخدمتها)  
- Node.js & npm + Vite / mix إن استعملت  

## 🧪 التثبيت محلياً
```bash
git clone https://github.com/MohammedSouliman98/Laravel_E_Shop.git
cd Laravel_E_Shop

composer install
cp .env.example .env
php artisan key:generate

# عدّل متغيرات DB في .env
php artisan migrate
php artisan db:seed   # إذا لديك seeders

npm install
npm run dev  # أو npm run build للبيئة الإنتاجية

php artisan storage:link
php artisan serve
