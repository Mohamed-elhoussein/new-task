# Task Management Application

## المتطلبات
- PHP >= 8.0
- Composer
- MySQL
-وللعم لقد استخدمت SQlite Database

## إعداد التطبيق

1. استنساخ المشروع:
   ```bash
   git clone https://github.com/your-repo/task-management-app.git
   cd task-management-app


## نظرة عامة
تطبيق بسيط لإدارة المهام تم بناؤه باستخدام Laravel.

## تعليمات الإعداد
1. استنساخ المستودع.
2. تشغيل `composer install` لتثبيت التبعيات.
3. انسخ `.env.example` إلى `.env` وقم بإعداد إعدادات قاعدة البيانات.
4. composer require laravel/ui
5. php artisan ui bootstrap --auth
6. npm install && npm run dev   يشترط node v 20
7. تشغيل `php artisan migrate` لإعداد قاعدة البيانات.
8. تشغيل `php artisan serve` لتشغيل التطبيق.

# الميزات

- تسجيل الدخول والتسجيل للمستخدمين.
- عرض قائمة المهام.
- إضافة مهمة جديدة.
- تعديل مهمة موجودة.
- حذف المهام.
- واجهة مستخدم مبنية باستخدام Bootstrap.







## هيكل قاعدة البيانات
- جدول `tasks`
  - id
  - user_id (مفتاح خارجي)
  - title
  - description
  - completed (boolean)
  - timestamps

## المصادقة
- توجد وظائف التسجيل وتسجيل الدخول مدمجة باستخدام Laravel Breeze.

## النشر المحلي
- استخدم `php artisan serve` لتشغيل التطبيق على `http://127.0.0.1:8000`.
