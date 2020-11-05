<?= $this->extend('template/admin') ?>
<?= $this->section('header') ?>
    <div class="page-title">
        <h4>
            <i class="icon-arrow-left52 position-left"></i>
            <span class="text-semibold">Home</span> - Artikel
            <small class="display-block">Good morning, Victoria Baker!</small>
        </h4>
    </div>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php if(isset($edit)) : ?>
                <?php
                    $form::start(site_url('Artikel/update'));
                    $form::summernote();
                    
                                $form::input([
                                    "title" => "judul",
                                    "type" => "text",
                                    "fc" => "judul",
                                    "data" => "id",
                                    "placeholder" => "inputkan judul",
                                    "value" => $edit->judul,
                                ]);
                            
                                $form::input([
                                    "title" => "slug",
                                    "type" => "text",
                                    "fc" => "slug",
                                    "data" => "id",
                                    "placeholder" => "inputkan slug",
                                    "value" => $edit->slug,
                                ]);
                            
                                $form::editor([
                                    "title" => "keterangan",
                                    "type" => "text",
                                    "fc" => "keterangan",
                                    "data" => "id",
                                    "placeholder" => "inputkan keterangan",
                                    "value" => $edit->keterangan,
                                ]);
                            
                                $form::input([
                                    "title" => "status",
                                    "type" => "number",
                                    "fc" => "status_id",
                                    "data" => "id",
                                    "placeholder" => "inputkan status",
                                    "value" => $edit->status_id,
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
                                    "title" => "judul",
                                    "type" => "text",
                                    "fc" => "judul",
                                    "data" => "id",
                                    "placeholder" => "inputkan judul",
                                ]);
                            
                                $form::input([
                                    "title" => "slug",
                                    "type" => "text",
                                    "fc" => "slug",
                                    "data" => "id",
                                    "placeholder" => "inputkan slug",
                                ]);
                            
                                $form::editor([
                                    "title" => "keterangan",
                                    "type" => "text",
                                    "fc" => "keterangan",
                                    "data" => "id",
                                    "placeholder" => "inputkan keterangan",
                                ]);
                            
                                $form::input([
                                    "title" => "status",
                                    "type" => "number",
                                    "fc" => "status_id",
                                    "data" => "id",
                                    "placeholder" => "inputkan status",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal",
                                    "type" => "text",
                                    "fc" => "tanggal",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal",
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
 <th>judul</th> 
 <th>slug</th> 
 <th>keterangan</th> 
 <th>status</th> 
 <th>tanggal</th> 
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
                                "url"       : "<?= site_url('Artikel/json')?>",
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
    <form action="<?= site_url('Artikel/hapus')?>" method="post" enctype="">
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