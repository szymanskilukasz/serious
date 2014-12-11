<?php

require_once '../Form/Form.php';

class UserForm extends Form
{
    
    
    public function __construct($data = null) 
    {
        $this->data = $data;
        
    }
    
    public function isValid()
    {
        return $this->validator->isValid();
    }
    
    public function save()
    {
        $this->storage->add($this->user);
    }
}

