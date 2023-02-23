<?php 
namespace App\Controllers;

use App\Models\MasyarakatM;
use App\Models\PetugasM;
use CodeIgniter\Controller;
use App\Models\PengaduanM;
class PengaduanC extends BaseController{
     protected $png,$masy,$ptgs;
     function __construct()
     {
          $this->png = new PengaduanM();
     }
     public function view()
     {
          if (session()->get('nik')!=null)
          {

               $data['pengaduan'] = $this->png->where('nik',session()->get('nik'))->findAll();
          }
          else
          {

               $data['pengaduan'] = $this->png->findAll();
          }
          return view('view/pengaduanv',$data);
       }
          // $data['pengaduan']=$this->png->findAll();
          // return view('view/pengaduanv',$data);
     public function sv()
     {
          $id = new MasyarakatM();
          $datafile = $this->request->getFile('foto');
          $filename = $datafile->getRandomName();
          $this->png->insert([
               'nik'=>$this->masy->where('nik'),
               'tgl' =>date('Y-m-d H:i:s'),
               'isi' => $this->request->getPost('isi'),
               'foto' => $datafile,
               'status' =>'0',
          ]);
          $datafile->move('uploads/berkas/',$filename);
          return redirect('pengaduan');
     }
}