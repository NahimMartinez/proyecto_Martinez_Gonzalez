<?php
namespace App\Models;
use CodeIgniter\Model;

class Perfiles_model extends Model
{
    protected $table = 'perfiles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_perfil', 'descripcion', 'baja'];
}
?>