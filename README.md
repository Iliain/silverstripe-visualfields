# SilverStripe Visual Fields

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
