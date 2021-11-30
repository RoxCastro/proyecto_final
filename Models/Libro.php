<?php 
namespace App\Models;

use CodeIgniter\Model;

class Libro extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['nombre','imagen'];

public function get($id=false)
{
    if($id===false)
    {
        return $this->findAll();
    }
    return $this->asArray()
    ->where(['id'->$id])
    ->first();

}


}