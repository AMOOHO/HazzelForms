<?php

namespace HazzelForms\Field\Captcha;

use HazzelForms\Field\Field as Field;

class Captcha extends Field
{
    public function __construct($formName, $fieldName, $args = [])
    {
        parent::__construct($formName, $fieldName, $args);
    }

    // no error on field
    public function returnError($lang)
    {
        return;
    }
}
