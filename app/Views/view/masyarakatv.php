<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>

<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="row">
     <div class="col">
          <div class="card shadow">
               <div class="card-header bg-gradient-primary">
                    <h5 class="font-weight-bold text-white m-0">Data Masyarakat</h5>
               </div>
               <div class="card-body">
                    <table class="table text-center">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Nik</th>
                                   <th>Nama</th>
                                   <th>Username</th>
                                   <th>No.Tlp</th>
                                   <th>Opsi</th>
                              </tr>
                              <?php
                              $no=0;
                              foreach ($masyarakat as $row)
                              {
                                   $data = $row['nik'].",".$row['nama'].",".$row['username'].",".$row['tlp'];
                                   $no++;
                                   ?>
                                   <tr>
                                        <td><?=$no?></td>
                                        <td><?=$row['nik']?></td>
                                        <td><?=$row['nama']?></td>
                                        <td><?=$row['username']?></td>
                                        <td><?=$row['tlp']?></td>
                                        <td>
                                             <a href="" class="btn btn-success">Edit</a>
                                             <a href="" class="btn btn-danger">Hapus</a>
                                        </td>
                                   </tr>
                                   <?php
                              }
                              ?>
                         </thead>
                    </table>
               </div>
          </div>
     </div>
</div>
<?=$this->endSection()?>