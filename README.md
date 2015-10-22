# LaravelProjectBasic
Built in with some basic function of a website, like auth,articles,options,etc..
> Laravel版本:5.1


>  安装Linux虚拟机

>  搭建好LAMP环境或LNMP环境

>  安装git

>  克隆git库
* git clone  https://github.com/GabrielShell/LaravelProjectBasic.git

> 安装composer
* 如果没有curl还要先安装curl
* curl -sS https://getcomposer.org/installer | php
*  mv composer.phar /usr/local/bin/composer

>  在克隆下来的git库运行
* composer update
* php artisan migrate
* php artisan db:seed
* chmod -R 777 storage/
* chmod -R 777 bootstrap/cache
