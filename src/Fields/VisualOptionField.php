<?php

namespace Iliain\VisualFields\Fields;

use SilverStripe\Dev\Deprecation;
use SilverStripe\Forms\OptionsetField;
use SilverStripe\ORM\FieldType\DBHTMLText;
use SilverStripe\View\Requirements;

/**
 * Provides an optionset field that can be styled with images and custom CSS.
 * Useful for selecting options with a visual representation, such as icons, images, layouts.
 * 
 * @package Iliain\VisualFields\Fields
 */
class VisualOptionField extends OptionsetField
{
    /**
     * @var string
     */
    private $optionWidth = '75px';

    /**
     * @var string
     */
    private $optionHeight = '75px';

    /**
     * @var string
     */
    private $optionBackground = '#fff';

    /**
     * @var string
     */
    private $backgroundSize = 'auto';

    /**
     * @param string $width
     * @return self
     */
    public function setOptionWidth(string $width): self
    {
        $this->optionWidth = $width;

        return $this;
    }

    /**
     * Ease of access for setting the width
     * @param string $width
     * @return self
     */
    public function optionWidth(string $width): self
    {
        Deprecation::notice('4.0.0', 'Use setOptionWidth() instead', Deprecation::SCOPE_CLASS);
        return $this->setOptionWidth($width);
    }

    /**
     * @param string $height
     * @return self
     */
    public function setOptionHeight(string $height): self
    {
        $this->optionHeight = $height;

        return $this;
    }

    /**
     * Ease of access for setting the height
     * @param string $height
     * @return self
     */
    public function optionHeight(string $height): self
    {
        Deprecation::notice('4.0.0', 'Use setOptionHeight() instead', Deprecation::SCOPE_CLASS);
        return $this->setOptionHeight($height);
    }

    /**
     * @param string $background
     * @return self
     */
    public function setOptionBackground(string $background): self
    {
        $this->optionBackground = $background;

        return $this;
    }

    /**
     * Ease of access for setting the background colour
     * @param string $background
     * @return self
     */
    public function backgroundColour(string $background): self
    {
        Deprecation::notice('4.0.0', 'Use setOptionBackground() instead', Deprecation::SCOPE_CLASS);
        return $this->setOptionBackground($background);
    }

    /**
     * @param string $size
     * @return self
     */
    public function setBackgroundSize(string $size): self
    {
        $this->backgroundSize = $size;

        return $this;
    }

    /**
     * Ease of access for setting the background size
     * @param string $size
     * @return self
     */
    public function imageSize(string $size): self
    {
        Deprecation::notice('4.0.0', 'Use setBackgroundSize() instead', Deprecation::SCOPE_CLASS);
        return $this->setBackgroundSize($size);
    }

    /**
     * @param array $properties
     * @return DBHTMLText
     */
    public function Field($properties = []): DBHTMLText
    {
        Requirements::css('iliain/silverstripe-visualfields:client/css/VisualOptionField.css');

        $customStyles = vsprintf(
            'width: %s; height: %s; background-color: %s; background-size: %s;',
            [
                $this->optionWidth,
                $this->optionHeight,
                $this->optionBackground,
                $this->backgroundSize,
            ]
        );

        $properties['CustomStyles'] = $customStyles;

        if ($this->isReadonly() && !($this instanceof VisualOptionField_Readonly)) {
            return $this->performReadonlyTransformation()->Field($properties);
        }

        return parent::Field($properties);
    }

    /**
     * Readonly version of this field
     * @return VisualOptionField_Readonly
     */
    public function performReadonlyTransformation(): VisualOptionField_Readonly
    {
        $field = $this->castedCopy(VisualOptionField_Readonly::class);
        $field->setSource($this->getSource());
        $field->setReadonly(true);

        // we need to copy these values over manually, readonly doesn't inherit them
        $field->setOptionWidth($this->optionWidth);
        $field->setOptionHeight($this->optionHeight);
        $field->setOptionBackground($this->optionBackground);
        $field->setBackgroundSize($this->backgroundSize);

        return $field;
    }
}
