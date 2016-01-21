<p align="center">
  <img src="http://imgur.com/ouyRAIE.png"/>
</p>
<p align="center">
  <i>To the time where is not now.</i>
</p>

&nbsp;

# Natsuki

夏希是一個基於 PHP 的時間類別，用以取得現在的時間，或者是數天後的現在時刻，

你也可以將時間轉換為相對時間（例如 2015 年 -> 1 年前），你也可以取得是否為休假日的布林值，

在這個時間類別裡，你可以到達不是現在的那一刻。

&nbsp;

# 特色

&nbsp;

# 索引

1. 範例

2. 初始化

  * 時間

  * 語系
  
  * 地區 

3. 取得資訊

&nbsp;

# 範例

我們假設現在是 **2016/01/01 01:00 AM**。

```php
$natsuki = new Natsuki();

$natsuki->now(time())  // 設置現在的時間。
        ->isToday;     // 是否為今天？回傳 True
        
// 或是你也可以轉換成相對時間，例如：5 秒前、13 天前。
$natsuki->relativeTime();  

```

&nbsp;

# 初始化

你可以在一開始就建立夏希，後來才設定一些設置。

```php
$natsuki = new Nastuki();
```

&nbsp;

## 時間

透過 `now()` 替夏希明確設定現在的時間，這是**必要的**，

你可以傳入 Unix 時間戳記，或是 YYYY-MM-DD 00:00:00 的資料庫時間。

```php
->now(time());

/** 或者是資料庫時間 */
->now('2016-01-01 01:00:00');
```

&nbsp;

## 語系

透過 `localize()` 來設定語系，這是**必要的**。

```php
->localize('zh_TW')  // 更改成（台灣）正體中文
```

但是請注意，目前夏希僅支援：

1. (cs_CZ) Czech 
2. (de_DE) German 
3. (en_GB) English 
4. (en_US) English 
4. (es_ES) Spanish 
5. (fr_FR) French 
6. (pt_BR) Portuguese 
7. (it_IT) Italian 
8. (th_TH) Thai 
9. (zh_CN) 简体中文 
10. (zh_TW) 正體中文 
11. (ja_JP) 日本語 
12. (da_DK) Danish 
13. (se_SV) Swedish 
14. (nl_NL) Dutch 

&nbsp;

## 地區

接下來你必須設置時區，這是**必要的**，格式按照 PHP 所[制定的 Timezone 文件](http://php.net/manual/en/timezones.php)，

透過 `timezone()` 設置時區。

```php
->timezone('Asia/Taipei')  // 設置為台北時區
```

&nbsp;

# 取得資訊

當一切都設置好了之後，接下來你就可以取得你想要的資訊了。

## 星期

你可以取得下一個星期一的時間，或者某一天是否為星期幾。

```php
$natsuki->monday;  // 
```
