# Laravel

## 終端機常用指令

| Windows | Mac / Linux | 說明 |
| --------| -------- | -------- |
| cd      | cd       | 切換目錄     |
| mkdir   | mkdir    | 新增資料夾     |
| rmdir   | rmdir    | 移除資料夾     |
| dir     | ls       | 查看資料夾     |
| echo >> | touch    | 新增檔案     |
| del     | rm       | 刪除檔案 |
| cls     |clear     | 清除畫面     |
| cd      |pwd       | 列出目前路徑 |
-**

## 安裝 Laravel -- 使用 composer create-project

1. 安裝composer
2. 使用composer create-project安裝

```bash
    #window
    composer create-project --prefer-dist laravel/laravel:^7.* 資料夾名稱
    #mac
    composer create-project --prefer-dist laravel/laravel:^7.0 資料夾名稱
    #mac會自動抓到7的最新版
```

## 安裝Laravel -- 使用壓縮檔

1. 先下載整包檔案並且解壓縮到htdocs內
2. 執行 composer install

    ```bash
        composer install
    ```

3. 複製 .env.example

    ```bash
        #window
        copy .env.example .env
        #mac
        cp .env.example .env
    ```

4. 建立application key

    ```bash
        php artisan key:generate
    ```

## Laravel常用指令

```bash
php artisan serve
#執行開發伺服器

php artisan make:controller PostController
#建立Controller

php artisan make:controller PostController --resource
#建立Resource Controller

php artisan route:list
#查看路由列表

php artisan make:migration create_posts_table
#建立Migration

php artisan migrate
#執行Migration

php artisan migrate:rollback
#回復Migration

php artisan migrate:reset
#重置Migration

php artisan make:seeder PostsTableSeeder
#建立seeder

php artisan db:seed
#執行seeds

php artisan make:factory PostFactory
#建立Factory
```
