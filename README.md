PDFJS Viewer
============
This extension is a rewrite of extension owned Lucky Vic luckynvic@gmail.com written in Yii 1

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist wahyugnc/yii2-pdfjs "*"
```

or add

```
"wahyugnc/yii2-pdfjs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php use wahyugnc\pdfjs\ViewerPDF; ?>
<?=ViewerPDF::widget(['url' => '/path/to/filename.pdf']);?>
