<?= $this->extend('back/layout/template'); ?>
<?= $this->section('content') ?>
    
<div class="page-title">
    <h4>
        <i class="icon-arrow-left52 position-left"></i>
        <span class="text-semibold">Home</span> - Soal
        <small class="display-block">Good morning, Victoria Baker!</small>
    </h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php if(isset($edit)) : ?>
                <?php
                    $form::start(site_url('soal/update'));
                    $form::summernote();
                    
                                $form::input([
                                    "title" => "soal",
                                    "type" => "text",
                                    "fc" => "soal",
                                    "data" => "id",
                                    "placeholder" => "inputkan soal",
                                    "value" => $edit->soal,
                                ]);
                            
                                $form::input([
                                    "title" => "id matpel",
                                    "type" => "text",
                                    "fc" => "id_matpel",
                                    "data" => "id",
                                    "placeholder" => "inputkan id matpel",
                                    "value" => $edit->id_matpel,
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
                                    "title" => "tanggal",
                                    "type" => "text",
                                    "fc" => "tanggal",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal",
                                    "value" => $edit->tanggal,
                                ]);
                            
                                $form::input([
                                    "title" => "waktu awal",
                                    "type" => "text",
                                    "fc" => "waktu_awal",
                                    "data" => "id",
                                    "placeholder" => "inputkan waktu awal",
                                    "value" => $edit->waktu_awal,
                                ]);
                            
                                $form::input([
                                    "title" => "waktu berakhir",
                                    "type" => "text",
                                    "fc" => "waktu_berakhir",
                                    "data" => "id",
                                    "placeholder" => "inputkan waktu berakhir",
                                    "value" => $edit->waktu_berakhir,
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
                                    "title" => "soal",
                                    "type" => "text",
                                    "fc" => "soal",
                                    "data" => "id",
                                    "placeholder" => "inputkan soal",
                                ]);
                            
                                $form::input([
                                    "title" => "id matpel",
                                    "type" => "text",
                                    "fc" => "id_matpel",
                                    "data" => "id",
                                    "placeholder" => "inputkan id matpel",
                                ]);
                            
                                $form::input([
                                    "title" => "aktif",
                                    "type" => "text",
                                    "fc" => "aktif",
                                    "data" => "id",
                                    "placeholder" => "inputkan aktif",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal",
                                    "type" => "text",
                                    "fc" => "tanggal",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal",
                                ]);
                            
                                $form::input([
                                    "title" => "waktu awal",
                                    "type" => "text",
                                    "fc" => "waktu_awal",
                                    "data" => "id",
                                    "placeholder" => "inputkan waktu awal",
                                ]);
                            
                                $form::input([
                                    "title" => "waktu berakhir",
                                    "type" => "text",
                                    "fc" => "waktu_berakhir",
                                    "data" => "id",
                                    "placeholder" => "inputkan waktu berakhir",
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
 <th>soal</th> 
 <th>id matpel</th> 
 <th>aktif</th> 
 <th>tanggal</th> 
 <th>waktu awal</th> 
 <th>waktu berakhir</th> 
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
                                "url"       : "<?= site_url('soal/json')?>",
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
    <form action="<?= site_url('soal/hapus')?>" method="post" enctype="">
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