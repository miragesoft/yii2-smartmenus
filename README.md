Smart menus JS
==============
Yii2 with smart menu js.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mirage/yii2-smartmenus "dev-master"
```

or add

```
"mirage/yii2-smartmenus": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
$items = [
  [id] => 2
  [label] => หน้าหลัก
  [type] => url
  [url] => /
  [linkOptions] => 
  [folder] => 1
  [items] => [
    [
      [id] => 3
      [label] => เกี่ยวกับคณะ
      [type] => url
      [url] => test.html
      [linkOptions] => 
      [folder] => 1
      [items] => [
        [
          [id] => 4
          [label] => แผนที่
          [type] => html
          [url] => /info/4
          [linkOptions] => 
        ],
        [
          [id] => 5
          [label] => วิสัยทัศน์/พันธกิจ
          [type] => html
          [url] => /info/5
          [linkOptions] => 
        ]
      ]
    ]
  ]
];
  
echo \mirage\smartmenus\Gen::widget([
  'items'=>$items,
  'options' => ['class' => 'navbar-nav navbar-right'],
  'template' => [
    'name' => 'sm-transparent',
    'file' => Yii::$app->homeUrl.'media/css/smartmenus.css',
    'bundle' => false,
  ],
]);
?>```
