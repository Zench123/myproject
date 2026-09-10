<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {

// array


$users = [
    [
        'username' => 'admin01',
        'fullname' => 'Paolo Dela Cruz',
        'role' => 'Administrator'
    ],
    [
        'username' => 'cashier01',
        'fullname' => 'Anne Ramos',
        'role' => 'Cashier'
    ],
    [
        'username' => 'staff01',
        'fullname' => 'Mark Flores',
        'role' => 'Sales Staff'
    ],
    [
        'username' => 'manager01',
        'fullname' => 'Liza Torres',
        'role' => 'Manager'
    ],
    [
        'username' => 'staff02',
        'fullname' => 'Kevin Lim',
        'role' => 'Inventory Staff'
    ]
];




        return view('users' ,['users' =>$users]);
        
    }
}
