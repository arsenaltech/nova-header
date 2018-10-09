<?php

namespace Arsenaltech\NovaHeader;

use Laravel\Nova\Fields\Field;

class NovaHeader extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-header';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->hideFromIndex();
    }
}
