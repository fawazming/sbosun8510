<?php
namespace App\Models;

use CodeIgniter\Model;

class Delegates23 extends Model
{
    protected $table = 'delegates24';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['fname','lname','lb','phone','email','category','school','ref','old','paid','gender','org','house'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
