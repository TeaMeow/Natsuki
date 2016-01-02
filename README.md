<p align="center">
  <img src="http://imgur.com/ouyRAIE.png"/>
</p>
<p align="center">
  <i>To the time which is not now.</i>
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

2. 支援的語系

&nbsp;

# 範例

我們假設現在是 **2016/01/01 01:00 AM**。

```php
$natsuki = new Natsuki('Asia/Taipei');

$natsuki->now(time())  // 設置現在的時間。
        ->isToday;     // 是否為今天？回傳 True
        
// 或是你也可以轉換成相對時間，例如：5 秒前、13 天前。
$natsuki->relativeTime();  

```

# 支援、設定語系

透過 `localize()` 來設定語系，夏希目前支援：

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
