# Silverstripe Visual Fields
[![Latest Stable Version](https://poser.pugx.org/iliain/silverstripe-visualfields/v)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![Total Downloads](https://poser.pugx.org/iliain/silverstripe-visualfields/downloads)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![Latest Unstable Version](https://poser.pugx.org/iliain/silverstripe-visualfields/v/unstable)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![License](https://poser.pugx.org/iliain/silverstripe-visualfields/license)](https://packagist.org/packages/iliain/silverstripe-visualfields) 
[![PHP Version Require](https://poser.pugx.org/iliain/silverstripe-visualfields/require/php)](https://packagist.org/packages/iliain/silverstripe-visualfields)

Provides similar functionality to [heyday/silverstripe-colorpalette](https://github.com/WPP-Public/silverstripe-colorpalette), but uses images rather than colours.

## Installation (with composer)

	$ composer require iliain/silverstripe-visualfields

## Usage

```php
$fields->addFieldToTab('Root.Main', $layoutField = VisualOptionField::create('BlockLayout', 'Layout', [
    'layout-1' => $layoutFolderPath . '/layout-1.png',
    'layout-2' => $layoutFolderPath . '/layout-2.png'
]));
```

[![Visual Fields](docs/images/example-1.png)](docs/images/visualfields.png)

## Customising

You can customise the size and background colour of the images with the following options:

```php
$layoutField->setOptionWidth('250px');
$layoutField->setOptionHeight('150px');
$layoutField->setOptionBackgroundColour('#f0f0f0'); // Only visible if the image has transparency
```

[![Visual Fields](docs/images/example-2.png)](docs/images/visualfields.png)
