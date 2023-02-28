# Laravel 10 模型庫存管理工具

引入 appstract 的 laravel-stock 套件來擴增追蹤模型上的庫存數量，可以增加、減少、清除和設置庫存。還可以檢查模型是否有庫存（在特定日期／時間）。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/product` 來進行商品的庫存查詢。

----

## 畫面截圖
![](https://i.imgur.com/gvwTRrp.png)
> 若想要生意越做越好版圖越來越大，學會有效的控管庫存是一條必經的路，尤其是佈局多通路時，清楚掌握網店、實體門市、銷售通路的各自訂單與庫存會變成一個全新的挑戰