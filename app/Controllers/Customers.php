<?php

namespace App\Controllers;
use App\Models\CustomerModel;
class Customers extends BaseController
{


        



    public function index(): string
    {


$customerModel = new CustomerModel();
$customers = $customerModel -> findALL();
return view ('customers',['customers' =>$customers]);









    
}
}

