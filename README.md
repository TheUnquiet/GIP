## Brief explanation

<img src="public/img/avatar.jpg" style="width: 270px;">

Laravel is a framework used to create PHP websites, it works very well with MySQL databases. <br>
Laravel comes with useful features such as blade an authenticating system and Eloquent Models which allows one to a access a database with only code.

It also uses an MVC (Model, View, Controller) Pattern, this determines the structure of ones code. <br>
A Model represents data for example a user's name, age.. A View is just HTML code or tells the browser what the site looks like. The Controller connects the two.

### **Routing** 

Choosing a path in a network. Path would be a link in our case it's an IP address not your actual IP address from home but **Localhost**. This is the default name of your computer at home.

It will always be *127.0.0.1*.

All of our routes are found in **routes\web.php**.

### **Seeder**

Seeders are used to insert information into a database. This way you have your data even if you switch servers, all you'll need to do is run de Seeder.
A seeder class contains one method named run, this function will execute when the Artisan command **db:seeder** is executed and it runs (DatabaseSeeder.php). In this function you can insert data. 
I use the **insert()** method and an Array.

Laravel's default Seeder (DatabaseSeeder.php) runs each of my seeders. 

### **Middleware**

Middleware is the bridge between an operating system and applications. In this case it does a bunch more. <br>
Like it filters incoming requests and links requests and reactions. <br>
Checks if clients are authenticated (is their info correct?).
- Yes? -> Send them to the home page.
- No? -> Send them to Login or Register.
  
### **Blade Engine**

Blade is a templating tool that is used in Laravel. Blade templates are files ending in .blade.php, <br>
Since most JS frameworks use **{{ }}** to explicitly tell Blade your using it's engine.
When working with multiple JS frameworks, use an *@* before {{ $var }}.

Syntax to remember:
- "extend" to template which defines sections : **@extends('folder.file')**
- Define where section starts : **@section('content')**
- Define where section ends : **@endsection**
- Define content in section : **@yield('content')**

My content contains basic HTML structure, but can be altered.

- Display data, same effect as echoing : **{{ $var }}**
- Start a foreach loop : **@foreach**
- End a foreach loop : **@endforeach ($array as $i)**
- blade view : **view('file prefix')**
- Start an if statement : **@if**
- End an if statement : **@endif**
- Define Else statement : **@else**

### Important paths

- Views/pages : **resources\views**
- Routes : **routes\web.php** is the file in use.
- My css, js and images : **public\css, js, img**
- Models (thing that's connects db to code) : **Models\Stock.php** is the file in use.
- Controllers (group requests together in a class) : **Http\Controllers\StockController.php** is the file in use.
- Migrations (tables) : **database\migrations**
- Db connection : **.env** line 14

### Important Commands

- Run code : **npm run dev** or **php artisan serve**
- Migrate tables (db) : **php artisan migrate**
- Make migration (ex table) : **php artisan migrate:migration create_name_table**
- Call rollback : **php artisan migrate:rollback**
- Check status data : **php artisan migrate:status**
- Login to Maria DB : **mysql -u root** no password.
- Make : **php artisan make: what name**


#### "Error 419 Page Expired"

This error is built in to Laravel to help defend against **Cross Request Forgery (CSRF)** which is an attach that forces a user to execute unwanted actions. These actions could include changing the user's password to making payments online.

To protect a form from set attack Blade has a directive that goes inside a form, syntax: **@csrf**.

[Documentation](https://laravel.com/).
[Usefull](https://www.ziplist.com/grocery-list-template/categories#:~:text=Condiments%20%26%20Spices%20%E2%80%93%20salt%2C%20sugar,%2C%20mayonnaise%2C%20mustard%20%2C%20etc.).