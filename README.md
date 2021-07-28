# Laravel

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
