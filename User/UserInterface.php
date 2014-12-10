<?php

namespace Serious\User;

interface UserInterface
{
    public function setUsername($username);
    
    public function setEmail($email);
    
    public function setPassword($password);
    
    public function setLastLogin(\DateTime $time = null);
    
    public function getUsername();
    
    public function getEmail();
    
    public function getPassword();
    
    public function getLastLogin();
}
