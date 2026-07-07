<?php

namespace Iliain\VisualFields\Fields;

/**
 * Readonly version of a {@link VisualOptionField}.
 */
class VisualOptionField_Readonly extends VisualOptionField
{
    protected $readonly = true;

    /**
     * This already is a readonly field.
     */
    public function performReadonlyTransformation(): VisualOptionField_Readonly
    {
        return clone $this;
    }
}
