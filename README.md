PDFJS Viewer
============
Extension ini merupakan penulisan ulang dari Extensionnya milik Lucky Vic <luckynvic@gmail.com> yang ditulis di Yii 1

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
<?php use wahyugnc\pdfjs\PdfJS; ?>
<?=PdfJS::widget(['url' => '/path/to/foo/filename.pdf']);?>```