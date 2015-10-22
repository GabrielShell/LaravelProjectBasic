# LaravelProjectBasic

> Built in with some basic function of a website, like auth,articles,options,etc..

# Laravel Version:5.1

## Installion

* 搭建好LAMP环境或LNMP环境

* 安装git

* 克隆git库

```bash
git clone  https://github.com/GabrielShell/LaravelProjectBasic.git
```

* 安装composer **(如果没有curl还要先安装curl)**

```bash
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```
*  复制.env.example到.env

*  配置好.env文件中的数据库信息，运行:
```bash
php artisan key:generate
```

*  在克隆下来的git库运行
```bash
composer install
php artisan migrate
php artisan db:seed
chmod -R 777 storage/
chmod -R 777 bootstrap/cache
```
