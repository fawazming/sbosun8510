<?php
namespace App\Models;

use CodeIgniter\Model;

class Pins extends Model
{
    protected $table = 'pins_23';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['pin','used','vendor','sold','worth'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
