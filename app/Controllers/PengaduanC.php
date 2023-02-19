<?php 
namespace App\Controllers;

use App\Models\PetugasM;
use CodeIgniter\Controller;
use App\Models\PengaduanM;
class PengaduanC extends BaseController{
     protected $png;
     function __construct()
     {
          $this->png = new PengaduanM();
     }
     public function view()
     {
          $data['pengaduan']=$this->png->findAll();
          return view('view/pengaduanv',$data);
     }
     public function sv()
     {
          $datafile = $this->request->getFile('foto');
          $filename = $datafile->getRandomName();
          $this->png->insert([
               'tgl_pengaduan' => $this->request->getPost('tgl_pengaduan'),
               'isi_laporan' => $this->request->getPost('isi_laporan'),
               'foto' => $datafile,
               'status' =>0,
          ]);
          $datafile->move('uploads/berkas/',$filename);
          return redirect('pengaduan');
     }
}