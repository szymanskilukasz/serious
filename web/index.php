<?php
require_once '../User/User.php';
require_once '../User/UserManager.php';

use Serious\User\User;
use Serious\User\UserManager;


$user = new User();
$userManager = new UserManager();

$form = new UserForm();

if ($form->isValid())
{
    $form->save();
}

