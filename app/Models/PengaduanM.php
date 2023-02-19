<?php 
namespace App\Models;

use CodeIgniter\Model;

class PengaduanM extends Model{
    protected $table      = 'tbpengaduan';
    protected $primaryKey = 'id_pengaduan';
    protected $allowedFields = ['tgl','isi','foto','status'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}