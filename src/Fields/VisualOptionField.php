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
     * @param string $background
     * @return $this
     */
    public function setOptionBackground(string $background)
    {
        $this->optionBackground = $background;

        return $this;
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
            }
        CSS);

        return parent::Field($properties);
    }
}
