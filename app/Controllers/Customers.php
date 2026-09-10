<?php

namespace App\Controllers;

class Customers extends BaseController
{


        



    public function index(): string
    {

$customers = [
    [
        'fullname' => 'Maria Santos',
        'email' => 'maria.santos@example.com',
        'phone' => '09171234567'
    ],
    [
        'fullname' => 'John Reyes',
        'email' => 'john.reyes@example.com',
        'phone' => '09181234567'
    ],
    [
        'fullname' => 'Angela Cruz',
        'email' => 'angela.cruz@example.com',
        'phone' => '09191234567'
    ],
    [
        'fullname' => 'Carlo Mendoza',
        'email' => 'carlo.mendoza@example.com',
        'phone' => '09201234567'
    ],
    [
        'fullname' => 'Bea Garcia',
        'email' => 'bea.garcia@example.com',
        'phone' => '09211234567'
    ]
];


        return view('Customers' ,['customers' =>$customers]);

    }
}
