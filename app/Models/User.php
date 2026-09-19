<?php 


namespace App\Models;
use CodeIgniter\Model;



class User extends Model{

private $table = 'users';
private $primaryKey = 'id';
protected $allowedFields = [ 'id', 'username', 'full_name'];
}



?>