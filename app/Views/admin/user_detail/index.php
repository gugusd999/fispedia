<?= $this->extend('back/layout/template'); ?>
<?= $this->section('content') ?>
    
<div class="page-title">
    <h4>
        <i class="icon-arrow-left52 position-left"></i>
        <span class="text-semibold">Home</span> - User_detail
        <small class="display-block">Good morning, Victoria Baker!</small>
    </h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php if(isset($edit)) : ?>
                <?php
                    $form::start(site_url('user_detail/update'));
                    $form::summernote();
                    
                                $form::input([
                                    "title" => "nama",
                                    "type" => "text",
                                    "fc" => "nama",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama",
                                    "value" => $edit->nama,
                                ]);
                            
                                $form::input([
                                    "title" => "jenis kelamin",
                                    "type" => "text",
                                    "fc" => "jenis_kelamin",
                                    "data" => "id",
                                    "placeholder" => "inputkan jenis kelamin",
                                    "value" => $edit->jenis_kelamin,
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir",
                                    "type" => "text",
                                    "fc" => "tempat_lahir",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir",
                                    "value" => $edit->tempat_lahir,
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir",
                                    "value" => $edit->tanggal_lahir,
                                ]);
                            
                                $form::input([
                                    "title" => "email",
                                    "type" => "text",
                                    "fc" => "email",
                                    "data" => "id",
                                    "placeholder" => "inputkan email",
                                    "value" => $edit->email,
                                ]);
                            
                                $form::input([
                                    "title" => "hp",
                                    "type" => "text",
                                    "fc" => "hp",
                                    "data" => "id",
                                    "placeholder" => "inputkan hp",
                                    "value" => $edit->hp,
                                ]);
                            
                                $form::input([
                                    "title" => "instagram",
                                    "type" => "text",
                                    "fc" => "instagram",
                                    "data" => "id",
                                    "placeholder" => "inputkan instagram",
                                    "value" => $edit->instagram,
                                ]);
                            
                                $form::input([
                                    "title" => "foto",
                                    "type" => "text",
                                    "fc" => "foto",
                                    "data" => "id",
                                    "placeholder" => "inputkan foto",
                                    "value" => $edit->foto,
                                ]);
                            
                                $form::input([
                                    "title" => "namasekolah",
                                    "type" => "text",
                                    "fc" => "namasekolah",
                                    "data" => "id",
                                    "placeholder" => "inputkan namasekolah",
                                    "value" => $edit->namasekolah,
                                ]);
                            
                                $form::input([
                                    "title" => "kota",
                                    "type" => "text",
                                    "fc" => "kota",
                                    "data" => "id",
                                    "placeholder" => "inputkan kota",
                                    "value" => $edit->kota,
                                ]);
                            
                                $form::input([
                                    "title" => "provinsi",
                                    "type" => "text",
                                    "fc" => "provinsi",
                                    "data" => "id",
                                    "placeholder" => "inputkan provinsi",
                                    "value" => $edit->provinsi,
                                ]);
                            
                                $form::input([
                                    "title" => "kelas",
                                    "type" => "text",
                                    "fc" => "kelas",
                                    "data" => "id",
                                    "placeholder" => "inputkan kelas",
                                    "value" => $edit->kelas,
                                ]);
                            
                                $form::input([
                                    "title" => "jurusan",
                                    "type" => "text",
                                    "fc" => "jurusan",
                                    "data" => "id",
                                    "placeholder" => "inputkan jurusan",
                                    "value" => $edit->jurusan,
                                ]);
                            
                                $form::input([
                                    "title" => "tahun lulus",
                                    "type" => "text",
                                    "fc" => "tahun_lulus",
                                    "data" => "id",
                                    "placeholder" => "inputkan tahun lulus",
                                    "value" => $edit->tahun_lulus,
                                ]);
                            
                                $form::input([
                                    "title" => "aktif",
                                    "type" => "text",
                                    "fc" => "aktif",
                                    "data" => "id",
                                    "placeholder" => "inputkan aktif",
                                    "value" => $edit->aktif,
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal daftar",
                                    "type" => "text",
                                    "fc" => "tanggal_daftar",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal daftar",
                                    "value" => $edit->tanggal_daftar,
                                ]);
                            
                    $form::input([
                        "type" => "hidden",
                        "fc" => "id",
                        "value" => $edit->id,
                    ]);
                
                    $form->submit('Update');
                    $form::end();
                ?>

            <?php else : ?>
                <?php
                    $form::start();
                    $form::summernote();
                    
                                $form::input([
                                    "title" => "nama",
                                    "type" => "text",
                                    "fc" => "nama",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama",
                                ]);
                            
                                $form::input([
                                    "title" => "jenis kelamin",
                                    "type" => "text",
                                    "fc" => "jenis_kelamin",
                                    "data" => "id",
                                    "placeholder" => "inputkan jenis kelamin",
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir",
                                    "type" => "text",
                                    "fc" => "tempat_lahir",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir",
                                ]);
                            
                                $form::input([
                                    "title" => "email",
                                    "type" => "text",
                                    "fc" => "email",
                                    "data" => "id",
                                    "placeholder" => "inputkan email",
                                ]);
                            
                                $form::input([
                                    "title" => "hp",
                                    "type" => "text",
                                    "fc" => "hp",
                                    "data" => "id",
                                    "placeholder" => "inputkan hp",
                                ]);
                            
                                $form::input([
                                    "title" => "instagram",
                                    "type" => "text",
                                    "fc" => "instagram",
                                    "data" => "id",
                                    "placeholder" => "inputkan instagram",
                                ]);
                            
                                $form::input([
                                    "title" => "foto",
                                    "type" => "text",
                                    "fc" => "foto",
                                    "data" => "id",
                                    "placeholder" => "inputkan foto",
                                ]);
                            
                                $form::input([
                                    "title" => "namasekolah",
                                    "type" => "text",
                                    "fc" => "namasekolah",
                                    "data" => "id",
                                    "placeholder" => "inputkan namasekolah",
                                ]);
                            
                                $form::input([
                                    "title" => "kota",
                                    "type" => "text",
                                    "fc" => "kota",
                                    "data" => "id",
                                    "placeholder" => "inputkan kota",
                                ]);
                            
                                $form::input([
                                    "title" => "provinsi",
                                    "type" => "text",
                                    "fc" => "provinsi",
                                    "data" => "id",
                                    "placeholder" => "inputkan provinsi",
                                ]);
                            
                                $form::input([
                                    "title" => "kelas",
                                    "type" => "text",
                                    "fc" => "kelas",
                                    "data" => "id",
                                    "placeholder" => "inputkan kelas",
                                ]);
                            
                                $form::input([
                                    "title" => "jurusan",
                                    "type" => "text",
                                    "fc" => "jurusan",
                                    "data" => "id",
                                    "placeholder" => "inputkan jurusan",
                                ]);
                            
                                $form::input([
                                    "title" => "tahun lulus",
                                    "type" => "text",
                                    "fc" => "tahun_lulus",
                                    "data" => "id",
                                    "placeholder" => "inputkan tahun lulus",
                                ]);
                            
                                $form::input([
                                    "title" => "aktif",
                                    "type" => "text",
                                    "fc" => "aktif",
                                    "data" => "id",
                                    "placeholder" => "inputkan aktif",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal daftar",
                                    "type" => "text",
                                    "fc" => "tanggal_daftar",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal daftar",
                                ]);
                            
                    $form->submit();
                    $form::end();
                ?>
            <?php endif; ?>     
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <table id="mytable" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                 <th>id</th> 
 <th>nama</th> 
 <th>jenis kelamin</th> 
 <th>tempat lahir</th> 
 <th>tanggal lahir</th> 
 <th>email</th> 
 <th>hp</th> 
 <th>instagram</th> 
 <th>foto</th> 
 <th>namasekolah</th> 
 <th>kota</th> 
 <th>provinsi</th> 
 <th>kelas</th> 
 <th>jurusan</th> 
 <th>tahun lulus</th> 
 <th>aktif</th> 
 <th>tanggal daftar</th> 
<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>

                    <script>

                    var mytable = null;
    
                    $(document).ready(function(){
                        mytable = $("#mytable").DataTable({
                            scrollX: true,
                            scrollY: true,
                            processing: true,
                            serverSide: true,
                            order: [],
                            ajax: {
                                "url"       : "<?= site_url('user_detail/json')?>",
                                "type"      : "POST"
                            }
                        })

                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal delete -->

<div class="modal" id="hapusmodal">
  <div class="modal-dialog">
    <form action="<?= site_url('user_detail/hapus')?>" method="post" enctype="">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Alert !</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Anda yakin ingin menghapus data ?
        <input type="hidden" name="id" id="kode-hapus"> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>

<script>

    $(document).ready(function(){

        $('body').on('click', '[modal-open-delete]', function(){
            $("#hapusmodal").modal('show');
            $("#kode-hapus").val($(this).attr('data-id'));

        })

    })

</script>

<!-- end modal -->

<?= $this->endSection() ?>