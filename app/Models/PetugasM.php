<?php 
namespace App\Models;

use CodeIgniter\Model;

class PetugasM extends Model{
    protected $table      = 'tbpetugas';
    protected $primaryKey = 'id_petugas';
    protected $allowedFields = ['nama','username','password','telp','level'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}