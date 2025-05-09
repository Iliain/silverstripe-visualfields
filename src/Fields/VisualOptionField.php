<?php

namespace Iliain\VisualFields\Fields;

use SilverStripe\View\Requirements;
use SilverStripe\Forms\OptionsetField;
use SilverStripe\ORM\FieldType\DBHTMLText;

/**
 * Class VisualOptionField
 */
class VisualOptionField extends OptionsetField
{
    private $optionWidth = '75px';

    private $optionHeight = '75px';

    private $optionBackground = '#fff';

    private $backgroundSize = 'auto';

    /**
     * @param string $width
     * @return $this
     */
    public function setOptionWidth(string $width)
    {
        $this->optionWidth = $width;

        return $this;
    }

    /**
     * Ease of access for setting the width
     * @param string $width
     * @return $this
     */
    public function optionWidth(string $width)
    {
        return $this->setOptionWidth($width);
    }

    /**
     * @param string $height
     * @return $this
     */
    public function setOptionHeight(string $height)
    {
        $this->optionHeight = $height;

        return $this;
    }

    /**
     * Ease of access for setting the height
     * @param string $height
     * @return $this
     */
    public function optionHeight(string $height)
    {
        return $this->setOptionHeight($height);
    }

    /**
     * @param string $background
     * @return $this
     */
    public function setOptionBackground(string $background)
    {
        $this->optionBackground = $background;

        return $this;
    }

    /**
     * Ease of access for setting the background colour
     * @param string $background
     * @return $this
     */
    public function backgroundColour(string $background)
    {
        return $this->setOptionBackground($background);
    }

    /**
     * @param string $size
     * @return $this
     */
    public function setBackgroundSize(string $size)
    {
        $this->backgroundSize = $size;

        return $this;
    }

    /**
     * Ease of access for setting the background size
     * @param string $size
     * @return $this
     */
    public function imageSize(string $size)
    {
        return $this->setBackgroundSize($size);
    }

    /**
     * @param array $properties
     * @return DBHTMLText
     */
    public function Field($properties = [])
    {
        Requirements::css('iliain/silverstripe-visualfields:client/css/VisualOptionField.css');
        
        Requirements::customCSS(<<<CSS
            #{$this->ID()}.visualoption li label {
                width: {$this->optionWidth};
                height: {$this->optionHeight};
                background-color: {$this->optionBackground};
                background-size: {$this->backgroundSize};
            }
        CSS);

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

        return parent::Field($properties);
    }
}
