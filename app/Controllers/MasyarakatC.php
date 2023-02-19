<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MasyarakatM;
class MasyarakatC extends Controller{
     protected $masy;
     function __construct()
     {
          $this->masy = new MasyarakatM();
     }
     public function view()
     {
          $data['masyarakat']=$this->masy->findAll();
          return view('view/masyarakatv',$data);
     }
}