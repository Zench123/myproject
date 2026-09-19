<?php

namespace App\Controllers;
use App\Models\UserModel;
class Users extends BaseController
{
    public function index(): string
    {

$userModel = new UserModel();
$users = $userModel -> findALL();
return view ('users',['users' =>$users]);



}
}