<?php

class neues_category extends \rex_yform_manager_dataset
{
    public function getName()
    {
        return $this->getValue('name');
    }
}
