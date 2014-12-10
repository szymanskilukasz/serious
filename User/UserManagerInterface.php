<?php
namespace Serious\User;



interface UserManagerInterface 
{   
    public function setBackend(AuthenticationBackendInterface $backend);
    
    public function register(UserInterface $user);
    
    public function login(UserInterface $user);
    
    public function logout(UserInterface $user);
    
}
