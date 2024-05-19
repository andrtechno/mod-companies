mod-companies
===========
Module for PIXELION CMS

[![Latest Stable Version](https://poser.pugx.org/panix/mod-companies/v/stable)](https://packagist.org/packages/panix/mod-companies)
[![Total Downloads](https://poser.pugx.org/panix/mod-companies/downloads)](https://packagist.org/packages/panix/mod-companies)
[![Monthly Downloads](https://poser.pugx.org/panix/mod-companies/d/monthly)](https://packagist.org/packages/panix/mod-companies)
[![Daily Downloads](https://poser.pugx.org/panix/mod-companies/d/daily)](https://packagist.org/packages/panix/mod-companies)
[![Latest Unstable Version](https://poser.pugx.org/panix/mod-companies/v/unstable)](https://packagist.org/packages/panix/mod-companies)
[![License](https://poser.pugx.org/panix/mod-companies/license)](https://packagist.org/packages/panix/mod-companies)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist panix/mod-companies "*"
```

or add

```
"panix/mod-companies": "*"
```

to the require section of your `composer.json` file.


Add to web config.
```
    'modules' => [
        'companies' => ['class' => 'panix\mod\companies\Module'],
    ],
```
