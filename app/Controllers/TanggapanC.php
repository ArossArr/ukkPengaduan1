<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TanggapanM;
use App\Models\PengaduanM;
use App\Models\PetugasM;
class TanggapanC extends BaseController{
     protected $tgp,$png,$ptg;
     function __construct()
     {
          $this->tgp = new TanggapanM();
          $this->png = new PengaduanM();
          $this->ptg = new PetugasM();
     }
     public function svt()
     {
          $this->tgp->insert([
               'tgl_tanggapan'=>date('Y-m-d H:i:s'),
               'tanggapan'=>$this->request->getPost('tanggapan'),
               'id_pengaduan'=>$this->request->getPost('id_pengaduan'),
               'id_petugas'=>$this->request->getPost('id_petugas'),
          ]);
          return redirect('pengaduan')->with('message',lang('Berhasil Ditanggapi'));

     }
}