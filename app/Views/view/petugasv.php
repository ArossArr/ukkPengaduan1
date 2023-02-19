<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>

<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="row">
     <div class="col">
          <a href="#" data-petugas="" data-toggle="modal" data-target="#mPetugas" class="btn btn-primary mb-3"><i class="fas fa-user-plus"></i>Tambah Petugas</a>
          <div class="card shadow">
               <div class="card-header bg-gradient-primary">
                    <h5 class="font-weight-bold text-white m-0">Data Petugas</h5> 
               </div>
               <div class="card-body">
                    <table class="table text-center">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Nama</th>
                                   <th>Username</th>
                                   <th>No.Tlp</th>
                                   <th>level</th>
                                   <th>Opsi</th>
                              </tr>
                              <?php
                              $no=0;
                              foreach ($petugas as $row)
                              {
                                   $data = $row['nama'].",".$row['username'].",".$row['telp'].",".$row['level'];
                                   $no++;
                                   ?>
                              <tr>
                                   <td><?=$no?></td>
                                   <td><?=$row['nama']?></td>
                                   <td><?=$row['username']?></td>
                                   <td><?=$row['telp']?></td>
                                   <td><?=$row['level']?></td>
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
               <div class="card-footer">

               </div>
          </div>
     </div>
</div>
<div class="modal fade" tabindex="-1" aria-hidden="true" id="mPetugas">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header bg-gradient-primary">
                    <h5 class="text-white">Tambah Petugas</h5>
               </div>
               <div class="modal-body">
                    <form action="" method="post" id="fPetugas">
                         <div class="form-group">
                              <label for="">Nama</label>
                              <input type="text" name="nama" id="nama" class="form-control">
                         </div>
                         <div class="form-group">
                              <label for="">Username</label>
                              <input type="text" name="username" id="username" class="form-control">
                         </div>
                         <div class="form-group">
                              <label for="">Password</label>
                              <input type="password" name="password" id="password" class="form-control">
                         </div>
                         <div class="form-group">
                              <label for="">No.Tlp</label>
                              <input type="text" name="telp" id="telp" class="form-control">
                         </div>
                         <div class="form-group">
                              <label for="">Status</label>
                              <select name="level" id="level" class="form-control col-5">
                                   <option value="">Pilih</option>
                                   <option value="admin">Admin</option>
                                   <option value="petugas">Petugas</option>
                              </select>
                         </div>
                         <div class="form-group" id="rename">
                              <label for="">rename</label>
                              <input type="checkbox" name="rename" id="rename" class="form-control">
                         </div>
                         <div class="modal-footer">
                              <button class="btn btn-primary"><i class="fas fa-save"></i></button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
<?=$this->endSection()?>
<?=$this->section('script')?>
<script>
     $(document).ready(function(){
          $('#mPetugas').on('show.bs.modal',function(e){
               var button = $(e.relatedTarget);
               var data = button.data('petugas');
               if(data != "")
               {
                    const barisdata = data.split(",");
                    $('#nama').val(barisdata[0]);
                    $('#username').val(barisdata[1]);
                    $('#password').val(barisdata[2]);
                    $('#telp').val(barisdata[3]);
                    $('#level').val(barisdata[4]);
                    $('#fPetugas').attr('action',barisdata[5]);
                    $('#rename').show();
               } else {
                    $('#nama').val('');
                    $('#username').val('');
                    $('#password').val('');
                    $('#telp').val('');
                    $('#level').val('');
                    $('#fPetugas').attr('action','/spetugas');
                    $('#rename').hide();
               }
          });
          $('#petugas').DataTable();
     })
</script>
<?=$this->endSection()?>