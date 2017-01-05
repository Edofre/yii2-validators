# Yii2 validators

# Still in development, use at own risk...

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
