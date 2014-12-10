<?php

require_once '../Form/Form.php';

class UserForm extends Form
{
    protected $storage;
    protected $validator;
    
    public function __construct(StorageInterface $storage, UserInterface $user, ValidatorInterface $validator) 
    {
        $this->storage = $storage;
        $this->user = $user;
        $this->validator = $validator;
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

