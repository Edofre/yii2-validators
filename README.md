# Yii2 validators

[![Latest Stable Version](https://poser.pugx.org/edofre/yii2-validators/v/stable)](https://packagist.org/packages/edofre/yii2-validators)
[![Total Downloads](https://poser.pugx.org/edofre/yii2-validators/downloads)](https://packagist.org/packages/edofre/yii2-validators)
[![Latest Unstable Version](https://poser.pugx.org/edofre/yii2-validators/v/unstable)](https://packagist.org/packages/edofre/yii2-validators)
[![License](https://poser.pugx.org/edofre/yii2-validators/license)](https://packagist.org/packages/edofre/yii2-validators)
[![composer.lock](https://poser.pugx.org/edofre/yii2-validators/composerlock)](https://packagist.org/packages/edofre/yii2-validators)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/yii2-validators "V1.0.2"
```

or add

```
"edofre/yii2-validators": "V1.0.2"
```

to the ```require``` section of your `composer.json` file.

## ZipCodeValidator
### Insert into rules as following
```php
/**
* @inheritdoc
*/
public function rules()
{
    return [
        ...
        ['zip_code', 'edofre\validators\ZipCodeValidator'],
        ...
    ];
}
```

## PriceValidator
### Insert into rules as following
```php
/**
* @inheritdoc
*/
public function rules()
{
    return [
        ...
        ['price', 'edofre\validators\PriceValidator'],
        ...
    ];
}
```
