<?php

namespace HazzelForms;

class Password extends Text {

  public function __construct($fieldName, $formName, $args = array())  {
      parent::__construct($fieldName, $formName, $args);

        $this->fieldType = 'password';
    }

    public function returnField()   {
        // return field with cleared fieldValue on case of error (for safety and XSS prevention)
        return sprintf('<input type="%1$s" name="%2$s[%3$s]" value="" class="%4$s" %5$s />', $this->fieldType, $this->formName, $this->fieldSlug, $this->classlist, $this->buildAttributeString());
    }


    public function setValue($value) {
      $this->fieldValue = $value;
    }

}
