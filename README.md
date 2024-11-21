## Code Modification Log

| Mod No. | Modified By  | Date Modified | File Modified         | Description of Modification                            |
|---------|--------------|---------------|--------------------------------------------------------------------------------|
|         | James        | 2024-11-16    |                       | Initial creation of the modification log.              |
| MOD 2   | James        | 2024-21-16    |                       | Initial creation of dashboard, edit, register view     |
|         |              |               |                       | Added DataTables, Login, Logout                        |
| MOD 3   | James        | 2024-22-16    |                       | Fix DataTables                                         |



## FOR FORGOTTEN DATABASE PASSWORD

# 1. sudo service stop mysql
# 2. go to .conf of MySQL
# 3. add 'skip-grant-tables' under '[mysqld]'
# 4. sudo service start mysql
# 5. mysql -u root 
# 6. USE mysql;
# 7. UPDATE user SET authentication_string=PASSWORD('new_password), plugin='mysql_native_password' WHERE User='root';
# 8. FLUSH PRIVILEGES;
# 9. php artisan migrate:status (DATABASE CONNECTION TESTING)


## GITHUB COMMANDS

# 1.  git init                                       //initialize Git repository
# 2.  git remote add origin <repository-url>         //Add the remote repository
# 3.  git checkout -b <branch-name>                  //Create a new branch and switch to it
# 4.  git add .                                      //Stage all changes for commit
# 5.  git commit -m "Your commit message"            //Commit the changes
# 6.  git push origin <branch-name>                  //Push the changes to the remote repository
# 7.  git pull origin <branch-name>                  //Pull the latest changes from the remote repository
# 8.  git checkout main                              //Merge changes from another branch (e.g., feature-branch into main)
#     git merge feature-branch                       //
# 9.  git add <conflicted-file>                      //Resolve merge conflicts (if any)
# 10. git commit -m "Resolved merge conflicts"       //Commit the merge resolution
# 11. git git push origin main                       //Push the merged changes to the remote repository

## PHP ARTISAN COMMANDS

# 1.  php















<!-- ---------------------------------------------------------------------------------------------------------------- -->
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
