<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PetugasM;
class PetugasC extends BaseController{
     protected $ptgs;
     function __construct()
     {
          $this->ptgs = new PetugasM();
     }
     public function view()
     {
          $data['petugas']= $this->ptgs->findAll();
          return view('view/petugasv',$data);
     }
     public function sv(){
          $this->ptgs->insert([
               'nama'=>$this->request->getPost('nama'),
               'username'=>$this->request->getPost('username'),
               'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
               'telp'=>$this->request->getPost('telp'),
               'level'=>$this->request->getPost('level'),
         ]);
         return redirect('petugas');
     }
}