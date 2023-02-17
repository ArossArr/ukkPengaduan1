<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PetugasM;
use App\Models\MasyarakatM;

class LoginC extends baseController{
     protected $petugass, $masyarakatt;
     function __construct()
     {
          $this->petugass = new PetugasM();
          $this->masyarakatt = new MasyarakatM();
     }
     public function login(){
          return view('view/loginv');
     }

     // Register
     public function reg(){
          return view('view/registerv');
     }
     public function svreg()
     {
          $this->masyarakatt->insert([
               'nik'=>$this->request->getPost('nik'),
               'nama'=>$this->request->getPost('nama'),
               'username'=>$this->request->getPost('username'),
               'password'=>password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
               'tlp'=>$this->request->getPost('tlp'),
          ]);
          return redirect('login')->with('message',lang('Pembuatan Akun Berhasil'));
     }
     public function plogin()
     {
          $ptgs = new PetugasM();
          $masy = new MasyarakatM();
          $username = $this->request->getPost('username');
          $password = $this->request->getPost('password');
          $cekmasy = $masy->where(['username'=>$username])->first();
          $cekptgs = $ptgs->where(['username'=>$username])->first();
          if(!($cekmasy)&&!($cekptgs))
          {
               return redirect('login')->with('message',lang('Username dan Password Salah'));
          } else 
          {
               if($cekmasy){
                    // dd($cekmasy);
                    if(password_verify($password,$cekmasy['password']))
                    {
                         session()->set([
                              'nik'=>$cekmasy['nik'],
                              'nama'=>$cekmasy['nama'],
                              'level'=>'masyarakat',
                              'logged_in'=>true
                         ]);
                         return redirect('dash');
                    } else
                    {
                         return redirect('login')->with('error',lang('Password masyarakat salah'));
                    }
               }
               if($cekptgs)
               {
                    dd($cekptgs);
                    if(password_verify($password,$cekptgs['password'])){
                         session()->set([
                              'username'=>$cekptgs['username'],
                              'id_petugas'=>$cekptgs['id_petugas'],
                              'level'=>'level',
                              'logged_in'=> true
                         ]);
                         return redirect('dash');
                    } else{
                         return redirect('login')->with('error',lang('Password petugas salah'));
                    }
               }
          }
     }
}