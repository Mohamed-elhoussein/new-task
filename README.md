# Task Management Application

## المتطلبات
- PHP >= 8.0
- Composer
- MySQL
-وللعم لقد استخدمت SQlite Database

## إعداد التطبيق

1. استنساخ المشروع:
   ```bash
   git clone https://github.com/Mohamed-elhoussein/new-task.git
   cd task-management-app


## نظرة عامة
تطبيق بسيط لإدارة المهام تم بناؤه باستخدام Laravel.

## تعليمات الإعداد
1. استنساخ المستودع.
2. تشغيل `composer install` لتثبيت التبعيات.
3. انسخ `.env.example` إلى `.env` وقم بإعداد إعدادات قاعدة البيانات.
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
