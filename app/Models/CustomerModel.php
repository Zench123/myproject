<?php
namespace App\Models;
use CodeIgniter\Model;



class CustomerModel extends Model{

private $table = 'customers';
private $primaryKey = 'id';
protected $allowedFields = [ 'full_name', 'email', 'phone'];
}



?>