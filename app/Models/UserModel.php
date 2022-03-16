<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'fullname';
    protected $allowedfileds = ['name', 'surname', 'email','password'];
}
