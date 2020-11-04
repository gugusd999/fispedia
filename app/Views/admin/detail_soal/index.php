<?= $this->extend('back/layout/template'); ?>
<?= $this->section('content') ?>
    
<div class="page-title">
    <h4>
        <i class="icon-arrow-left52 position-left"></i>
        <span class="text-semibold">Home</span> - Detail_soal
        <small class="display-block">Good morning, Victoria Baker!</small>
    </h4>
</div>
<div class="heading-elements">
    <div class="heading-btn-group">
        <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
        <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
        <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php if(isset($edit)) : ?>
                <?php
                    $form::start(site_url('detail_soal/update'));
                    $form::summernote();
                    
                                $form::input([
                                    "title" => "id user",
                                    "type" => "text",
                                    "fc" => "id_user",
                                    "data" => "id",
                                    "placeholder" => "inputkan id user",
                                    "value" => $edit->id_user,
                                ]);
                            
                                $form::editor([
                                    "title" => "soal",
                                    "type" => "text",
                                    "fc" => "soal",
                                    "data" => "id",
                                    "placeholder" => "inputkan soal",
                                    "value" => $edit->soal,
                                ]);
                            
                                $form::editor([
                                    "title" => "a",
                                    "type" => "text",
                                    "fc" => "a",
                                    "data" => "id",
                                    "placeholder" => "inputkan a",
                                    "value" => $edit->a,
                                ]);
                            
                                $form::editor([
                                    "title" => "b",
                                    "type" => "text",
                                    "fc" => "b",
                                    "data" => "id",
                                    "placeholder" => "inputkan b",
                                    "value" => $edit->b,
                                ]);
                            
                                $form::editor([
                                    "title" => "c",
                                    "type" => "text",
                                    "fc" => "c",
                                    "data" => "id",
                                    "placeholder" => "inputkan c",
                                    "value" => $edit->c,
                                ]);
                            
                                $form::editor([
                                    "title" => "d",
                                    "type" => "text",
                                    "fc" => "d",
                                    "data" => "id",
                                    "placeholder" => "inputkan d",
                                    "value" => $edit->d,
                                ]);
                            
                                $form::editor([
                                    "title" => "e",
                                    "type" => "text",
                                    "fc" => "e",
                                    "data" => "id",
                                    "placeholder" => "inputkan e",
                                    "value" => $edit->e,
                                ]);
                            
                                $form::input([
                                    "title" => "jawaban",
                                    "type" => "text",
                                    "fc" => "jawaban",
                                    "data" => "id",
                                    "placeholder" => "inputkan jawaban",
                                    "value" => $edit->jawaban,
                                ]);
                            
                                $form::input([
                                    "title" => "nilai soal",
                                    "type" => "text",
                                    "fc" => "nilai_soal",
                                    "data" => "id",
                                    "placeholder" => "inputkan nilai soal",
                                    "value" => $edit->nilai_soal,
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
                                    "title" => "id user",
                                    "type" => "text",
                                    "fc" => "id_user",
                                    "data" => "id",
                                    "placeholder" => "inputkan id user",
                                ]);
                            
                                $form::editor([
                                    "title" => "soal",
                                    "type" => "text",
                                    "fc" => "soal",
                                    "data" => "id",
                                    "placeholder" => "inputkan soal",
                                ]);
                            
                                $form::editor([
                                    "title" => "a",
                                    "type" => "text",
                                    "fc" => "a",
                                    "data" => "id",
                                    "placeholder" => "inputkan a",
                                ]);
                            
                                $form::editor([
                                    "title" => "b",
                                    "type" => "text",
                                    "fc" => "b",
                                    "data" => "id",
                                    "placeholder" => "inputkan b",
                                ]);
                            
                                $form::editor([
                                    "title" => "c",
                                    "type" => "text",
                                    "fc" => "c",
                                    "data" => "id",
                                    "placeholder" => "inputkan c",
                                ]);
                            
                                $form::editor([
                                    "title" => "d",
                                    "type" => "text",
                                    "fc" => "d",
                                    "data" => "id",
                                    "placeholder" => "inputkan d",
                                ]);
                            
                                $form::editor([
                                    "title" => "e",
                                    "type" => "text",
                                    "fc" => "e",
                                    "data" => "id",
                                    "placeholder" => "inputkan e",
                                ]);
                            
                                $form::input([
                                    "title" => "jawaban",
                                    "type" => "text",
                                    "fc" => "jawaban",
                                    "data" => "id",
                                    "placeholder" => "inputkan jawaban",
                                ]);
                            
                                $form::input([
                                    "title" => "nilai soal",
                                    "type" => "text",
                                    "fc" => "nilai_soal",
                                    "data" => "id",
                                    "placeholder" => "inputkan nilai soal",
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
 <th>id user</th> 
 <th>soal</th> 
 <th>a</th> 
 <th>b</th> 
 <th>c</th> 
 <th>d</th> 
 <th>e</th> 
 <th>jawaban</th> 
 <th>nilai soal</th> 
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
                                "url"       : "<?= site_url('detail_soal/json')?>",
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
    <form action="<?= site_url('detail_soal/hapus')?>" method="post" enctype="">
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