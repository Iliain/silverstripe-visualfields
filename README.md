# SilverStripe Visual Fields
[![Latest Stable Version](http://poser.pugx.org/iliain/silverstripe-visualfields/v)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![Total Downloads](http://poser.pugx.org/iliain/silverstripe-visualfields/downloads)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![Latest Unstable Version](http://poser.pugx.org/iliain/silverstripe-visualfields/v/unstable)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![License](http://poser.pugx.org/iliain/silverstripe-visualfields/license)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![PHP Version Require](http://poser.pugx.org/iliain/silverstripe-visualfields/require/php)](https://packagist.org/packages/iliain/silverstripe-visualfields)

Provides similar functionality to heyday/silverstripe-colorpalette, but uses images rather than colours.

## Installation (with composer)

	$ composer require iliain/silverstripe-visualfields

## Usage

```php
$fields->addFieldToTab('Root.Main', VisualOptionField::create('BlockLayout', 'Layout', [
    'layout-1' => '/_resources/app/client/images/layout/layout-1.png',
    'layout-2' => '/_resources/app/client/images/layout/layout-2.png'
]));
```
