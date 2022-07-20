<?php

namespace Iliain\VisualFields\Fields;

use SilverStripe\View\Requirements;
use SilverStripe\Forms\OptionsetField;

/**
 * Class VisualOptionField
 */
class VisualOptionField extends OptionsetField
{
    /**
     * @param array $properties
     * @return HTMLText
     */
    public function Field($properties = [])
    {
        Requirements::css('iliain/silverstripe-visualfields:client/css/VisualOptionField.css');

        return parent::Field($properties);
    }
}
