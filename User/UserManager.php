<?php
namespace Serious\User;

require_once 'UserInterface.php';
require_once 'UserManagerInterface.php';

class UserManager implements UserManagerInterface
{
    public function setBackend(AuthenticationBackendInterface $backend)
    {
        $this->backend = $backend;
    }
    
    public function register(UserInterface $user)
    {
        $this->backend->register($user);
    }
    
    public function login(UserInterface $user)
    {
        $this->backend->login($user);
    }
    
    public function logout(UserInterface $user)
    {
        
    }
    
}

