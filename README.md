###### ROSSETI AKPK.Co

установить php 7.1, mysql 5.5, лучший вариант это что то в духе OpenServer. Apache тоже нужен.  

```
composer global require "fxp/composer-asset-plugin:dev-master"  

composer update (понадобится токен github (personal access token))

Скоро выложим дамп БД
~~в бд нужно создать базу данных с именем u0831054_rosseti~~

~~с юзером u0831054_reg и паролем turquiose_distribution~~  

~~применить миграции~~  

~~php yii.php migrate --migrationPath=@yii/rbac/migrations~~  

~~php yii.php migrate~~
можно запускать! в опен сервере нужно ставить точку входа на папку /web  
