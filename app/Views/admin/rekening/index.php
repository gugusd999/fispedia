<?= $this->extend('back/layout/template'); ?>
<?= $this->section('content') ?>
    
<div class="page-title">
    <h4>
        <i class="icon-arrow-left52 position-left"></i>
        <span class="text-semibold">Home</span> - Rekening
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
                    $form::start(site_url('rekening/update'));
                    $form::summernote();
                    
                                $form::input([
                                    "title" => "norek",
                                    "type" => "text",
                                    "fc" => "norek",
                                    "data" => "id",
                                    "placeholder" => "inputkan norek",
                                    "value" => $edit->norek,
                                ]);
                            
                                $form::input([
                                    "title" => "id m bank",
                                    "type" => "text",
                                    "fc" => "id_m_bank",
                                    "data" => "id",
                                    "placeholder" => "inputkan id m bank",
                                    "value" => $edit->id_m_bank,
                                ]);
                            
                                $form::input([
                                    "title" => "atasnama",
                                    "type" => "text",
                                    "fc" => "atasnama",
                                    "data" => "id",
                                    "placeholder" => "inputkan atasnama",
                                    "value" => $edit->atasnama,
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
                                    "title" => "norek",
                                    "type" => "text",
                                    "fc" => "norek",
                                    "data" => "id",
                                    "placeholder" => "inputkan norek",
                                ]);
                            
                                $form::input([
                                    "title" => "id m bank",
                                    "type" => "text",
                                    "fc" => "id_m_bank",
                                    "data" => "id",
                                    "placeholder" => "inputkan id m bank",
                                ]);
                            
                                $form::input([
                                    "title" => "atasnama",
                                    "type" => "text",
                                    "fc" => "atasnama",
                                    "data" => "id",
                                    "placeholder" => "inputkan atasnama",
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
 <th>norek</th> 
 <th>id m bank</th> 
 <th>atasnama</th> 
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
                                "url"       : "<?= site_url('rekening/json')?>",
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
    <form action="<?= site_url('rekening/hapus')?>" method="post" enctype="">
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