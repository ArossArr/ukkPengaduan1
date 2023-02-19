<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>

<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="row">
     <div class="col">
          <?php if(session('level')=='masyarakat'){
               ?>
               <a href="#" data-pengaduan="" data-toggle="modal" data-target="#mPengaduan" class="btn btn-primary mb-3"><i class="fas  fa-file-plus"></i>Tambah Pengaduan</a>
               <?php
          }?>

          <div class="card shadow">
               <div class="card-header bg-gradient-primary">
                    <h5 class="font-weight-bold text-white m-0">Data Pengaduan</h5>
               </div>
               <div class="card-body">
                    <table class="table text-center">
                         <thead>
                              <tr>
                                   <th>No</th>
                                   <th>Tgl Pengaduan</th>
                                   <th>Isi Laporan</th>
                                   <th>Foto</th>
                                   <?php if(session('level')=='masyarakat'){
                                        ?>
                                        <th>Status</th>
                                        <?php
                                   }?>
                                   <th>Opsi</th>
                              </tr>
                              <?php
                              $no=0;
                              foreach ($pengaduan as $row)
                              {
                                   $data = $row['tgl'].",".$row['isi'].",".$row['foto'].",".$row['status'];
                                   $no++;
                                   ?>
                              <tr>
                                   <td><?=$no?></td>
                                   <td><?=$row['tgl']?></td>
                                   <td><?=$row['isi']?></td>
                                   <td><?=$row['foto']?></td>
                                   <td>
                                   <?php if(session('level')=='masyarakat'){
                                        ?>
                                        <td><?=$row['status']?></td>
                                        <?php
                                   }?>
                                   </td>
                                   
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
<div class="modal fade" tabindex="-1" aria-hidden="true" id="mPengaduan">
<div class="modal-dialog">
     <div class="modal-content">
          <div class="modal-header bg-gradient-primary">
               <h5 class="text-white">Tambah Pengaduan</h5>
          </div>
          <div class="modal-body">
               <form action="/spengaduan" method="post" id="fPengaduan">
                    <div class="form-group">
                         <label for="">Laporan : </label>
                         <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                         <label for="">Foto</label>
                         <input type="file" name="foto" id="foto" class="form-control">
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
          $('#mPengaduan').on('show.bs.modal',function(e){
               var button = $(e.relatedTarget);
               var data = button.data('pengaduan');
               if(data != "")
               {
                    const barisdata = data.split(",");
                    $('#tgl').val(barisdata[0]);
                    $('#isi').val(barisdata[1]);
                    $('#foto').val(barisdata[2]);
                    $('#fPengaduan').attr('action',barisdata[3]);
               } else {
                    $('#tgl').val("");
                    $('#isi').val("");
                    $('#foto').val("");
                    $('#fPengaduan').attr('action','/spengaduan');
               }
          });
          $('#pengaduan').DataTable();
     })
</script>
<?=$this->endSection()?>