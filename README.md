
# Implement a role/permission system with Laravel

To manage roles and permissions, a user with permission to view and create roles can create roles and assign different permissions to those roles. The user can also assign a role to any user and when that user login, that user can see only the buttons that are permitted for him/her.
The buttons are:

View Roles

Create Roles

Edit Roles

Delete Roles

View Products   

Create Products

Edit Products

Delete Products



## Project Setup

Git clone -

```bash
  git clone https://github.com/Firozmahamud/role_permission_system.git
```

Go to project folder -

```bash
 cd role_permission_system
```
Install Laravel Dependencies -
```bash
 composer install
```
Create .env file by copying .env.example file

Generate Artisan Key -
```bash
 php artisan key:generate
```
Create database called - role_permission

Migrate Database with seeder -
```bash
 php artisan migrate
```
```bash
 php artisan db:seed --class=PermissionTableSeeder
```
```bash
 php artisan db:seed --class=CreateAdminUserSeeder
```
Run Project -
```bash
php artisan serve
```
Since, there is any problem to seeder, Please import the .sql file which is in database folder


## How it works

1.Login using Admin Credential -

- email - admin@gmail.com
- Password - 123456
2.Create User

3.Create Role

4.Assign Permission to Roles
