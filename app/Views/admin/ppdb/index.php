<?= $this->extend('template/admin') ?>
<?= $this->section('header') ?>
    <div class="page-title">
        <h4>
            <i class="icon-arrow-left52 position-left"></i>
            <span class="text-semibold">Home</span> - Ppdb
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

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <?php if(isset($edit)) : ?>
                <?php
                    $form::start(site_url('ppdb/update'));
                    $form::summernote();
                    
                                $form::input([
                                    "title" => "nama lengkap",
                                    "type" => "text",
                                    "fc" => "nama_lengkap",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama lengkap",
                                    "value" => $edit->nama_lengkap,
                                ]);
                            
                                $form::input([
                                    "title" => "jenis kelamin",
                                    "type" => "number",
                                    "fc" => "jenis_kelamin",
                                    "data" => "id",
                                    "placeholder" => "inputkan jenis kelamin",
                                    "value" => $edit->jenis_kelamin,
                                ]);
                            
                                $form::input([
                                    "title" => "nisn",
                                    "type" => "text",
                                    "fc" => "nisn",
                                    "data" => "id",
                                    "placeholder" => "inputkan nisn",
                                    "value" => $edit->nisn,
                                ]);
                            
                                $form::input([
                                    "title" => "nisd",
                                    "type" => "text",
                                    "fc" => "nisd",
                                    "data" => "id",
                                    "placeholder" => "inputkan nisd",
                                    "value" => $edit->nisd,
                                ]);
                            
                                $form::input([
                                    "title" => "ns skhun",
                                    "type" => "text",
                                    "fc" => "ns_skhun",
                                    "data" => "id",
                                    "placeholder" => "inputkan ns skhun",
                                    "value" => $edit->ns_skhun,
                                ]);
                            
                                $form::input([
                                    "title" => "nun sd",
                                    "type" => "text",
                                    "fc" => "nun_sd",
                                    "data" => "id",
                                    "placeholder" => "inputkan nun sd",
                                    "value" => $edit->nun_sd,
                                ]);
                            
                                $form::input([
                                    "title" => "nik",
                                    "type" => "text",
                                    "fc" => "nik",
                                    "data" => "id",
                                    "placeholder" => "inputkan nik",
                                    "value" => $edit->nik,
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
                                    "title" => "agama",
                                    "type" => "text",
                                    "fc" => "agama",
                                    "data" => "id",
                                    "placeholder" => "inputkan agama",
                                    "value" => $edit->agama,
                                ]);
                            
                                $form::input([
                                    "title" => "berkebutuhan khusus",
                                    "type" => "text",
                                    "fc" => "berkebutuhan_khusus",
                                    "data" => "id",
                                    "placeholder" => "inputkan berkebutuhan khusus",
                                    "value" => $edit->berkebutuhan_khusus,
                                ]);
                            
                                $form::input([
                                    "title" => "alamat",
                                    "type" => "text",
                                    "fc" => "alamat",
                                    "data" => "id",
                                    "placeholder" => "inputkan alamat",
                                    "value" => $edit->alamat,
                                ]);
                            
                                $form::input([
                                    "title" => "rt",
                                    "type" => "text",
                                    "fc" => "rt",
                                    "data" => "id",
                                    "placeholder" => "inputkan rt",
                                    "value" => $edit->rt,
                                ]);
                            
                                $form::input([
                                    "title" => "rw",
                                    "type" => "text",
                                    "fc" => "rw",
                                    "data" => "id",
                                    "placeholder" => "inputkan rw",
                                    "value" => $edit->rw,
                                ]);
                            
                                $form::input([
                                    "title" => "kelurahan",
                                    "type" => "text",
                                    "fc" => "kelurahan",
                                    "data" => "id",
                                    "placeholder" => "inputkan kelurahan",
                                    "value" => $edit->kelurahan,
                                ]);
                            
                                $form::input([
                                    "title" => "kecamatan",
                                    "type" => "text",
                                    "fc" => "kecamatan",
                                    "data" => "id",
                                    "placeholder" => "inputkan kecamatan",
                                    "value" => $edit->kecamatan,
                                ]);
                            
                                $form::input([
                                    "title" => "kota kabupaten",
                                    "type" => "text",
                                    "fc" => "kota_kabupaten",
                                    "data" => "id",
                                    "placeholder" => "inputkan kota kabupaten",
                                    "value" => $edit->kota_kabupaten,
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
                                    "title" => "kodepos",
                                    "type" => "text",
                                    "fc" => "kodepos",
                                    "data" => "id",
                                    "placeholder" => "inputkan kodepos",
                                    "value" => $edit->kodepos,
                                ]);
                            
                                $form::input([
                                    "title" => "alat transportasi",
                                    "type" => "text",
                                    "fc" => "alat_transportasi",
                                    "data" => "id",
                                    "placeholder" => "inputkan alat transportasi",
                                    "value" => $edit->alat_transportasi,
                                ]);
                            
                                $form::input([
                                    "title" => "jenis tinggal",
                                    "type" => "text",
                                    "fc" => "jenis_tinggal",
                                    "data" => "id",
                                    "placeholder" => "inputkan jenis tinggal",
                                    "value" => $edit->jenis_tinggal,
                                ]);
                            
                                $form::input([
                                    "title" => "no telp",
                                    "type" => "text",
                                    "fc" => "no_telp",
                                    "data" => "id",
                                    "placeholder" => "inputkan no telp",
                                    "value" => $edit->no_telp,
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
                                    "title" => "asal sekolah sd",
                                    "type" => "text",
                                    "fc" => "asal_sekolah_sd",
                                    "data" => "id",
                                    "placeholder" => "inputkan asal sekolah sd",
                                    "value" => $edit->asal_sekolah_sd,
                                ]);
                            
                                $form::input([
                                    "title" => "kps",
                                    "type" => "text",
                                    "fc" => "kps",
                                    "data" => "id",
                                    "placeholder" => "inputkan kps",
                                    "value" => $edit->kps,
                                ]);
                            
                                $form::input([
                                    "title" => "nokps",
                                    "type" => "text",
                                    "fc" => "nokps",
                                    "data" => "id",
                                    "placeholder" => "inputkan nokps",
                                    "value" => $edit->nokps,
                                ]);
                            
                                $form::input([
                                    "title" => "nama ayah",
                                    "type" => "text",
                                    "fc" => "nama_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama ayah",
                                    "value" => $edit->nama_ayah,
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
                                    "title" => "tempat lahir ayah",
                                    "type" => "text",
                                    "fc" => "tempat_lahir_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir ayah",
                                    "value" => $edit->tempat_lahir_ayah,
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir ayah",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir ayah",
                                    "value" => $edit->tanggal_lahir_ayah,
                                ]);
                            
                                $form::input([
                                    "title" => "pekerjaan ayah",
                                    "type" => "text",
                                    "fc" => "pekerjaan_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan pekerjaan ayah",
                                    "value" => $edit->pekerjaan_ayah,
                                ]);
                            
                                $form::input([
                                    "title" => "pendidikan ayah",
                                    "type" => "text",
                                    "fc" => "pendidikan_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan pendidikan ayah",
                                    "value" => $edit->pendidikan_ayah,
                                ]);
                            
                                $form::input([
                                    "title" => "penghasilan bulanan ayah",
                                    "type" => "text",
                                    "fc" => "penghasilan_bulanan_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan penghasilan bulanan ayah",
                                    "value" => $edit->penghasilan_bulanan_ayah,
                                ]);
                            
                                $form::input([
                                    "title" => "nama ibu",
                                    "type" => "text",
                                    "fc" => "nama_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama ibu",
                                    "value" => $edit->nama_ibu,
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir ibu",
                                    "type" => "text",
                                    "fc" => "tempat_lahir_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir ibu",
                                    "value" => $edit->tempat_lahir_ibu,
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir ibu",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir ibu",
                                    "value" => $edit->tanggal_lahir_ibu,
                                ]);
                            
                                $form::input([
                                    "title" => "pekerjaan ibu",
                                    "type" => "text",
                                    "fc" => "pekerjaan_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan pekerjaan ibu",
                                    "value" => $edit->pekerjaan_ibu,
                                ]);
                            
                                $form::input([
                                    "title" => "pendidikan ibu",
                                    "type" => "text",
                                    "fc" => "pendidikan_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan pendidikan ibu",
                                    "value" => $edit->pendidikan_ibu,
                                ]);
                            
                                $form::input([
                                    "title" => "penghasilan bulanan ibu",
                                    "type" => "text",
                                    "fc" => "penghasilan_bulanan_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan penghasilan bulanan ibu",
                                    "value" => $edit->penghasilan_bulanan_ibu,
                                ]);
                            
                                $form::input([
                                    "title" => "nama wali",
                                    "type" => "text",
                                    "fc" => "nama_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama wali",
                                    "value" => $edit->nama_wali,
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir wali",
                                    "type" => "text",
                                    "fc" => "tempat_lahir_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir wali",
                                    "value" => $edit->tempat_lahir_wali,
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir wali",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir wali",
                                    "value" => $edit->tanggal_lahir_wali,
                                ]);
                            
                                $form::input([
                                    "title" => "pekerjaan wali",
                                    "type" => "text",
                                    "fc" => "pekerjaan_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan pekerjaan wali",
                                    "value" => $edit->pekerjaan_wali,
                                ]);
                            
                                $form::input([
                                    "title" => "pendidikan wali",
                                    "type" => "text",
                                    "fc" => "pendidikan_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan pendidikan wali",
                                    "value" => $edit->pendidikan_wali,
                                ]);
                            
                                $form::input([
                                    "title" => "penghasilan bulanan wali",
                                    "type" => "text",
                                    "fc" => "penghasilan_bulanan_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan penghasilan bulanan wali",
                                    "value" => $edit->penghasilan_bulanan_wali,
                                ]);
                            
                                $form::input([
                                    "title" => "tinggi badan",
                                    "type" => "text",
                                    "fc" => "tinggi_badan",
                                    "data" => "id",
                                    "placeholder" => "inputkan tinggi badan",
                                    "value" => $edit->tinggi_badan,
                                ]);
                            
                                $form::input([
                                    "title" => "berat badan",
                                    "type" => "text",
                                    "fc" => "berat_badan",
                                    "data" => "id",
                                    "placeholder" => "inputkan berat badan",
                                    "value" => $edit->berat_badan,
                                ]);
                            
                                $form::input([
                                    "title" => "jarak rumah ke sekolah",
                                    "type" => "text",
                                    "fc" => "jarak_rumah_ke_sekolah",
                                    "data" => "id",
                                    "placeholder" => "inputkan jarak rumah ke sekolah",
                                    "value" => $edit->jarak_rumah_ke_sekolah,
                                ]);
                            
                                $form::input([
                                    "title" => "waktu tempuh ke sekolah",
                                    "type" => "text",
                                    "fc" => "waktu_tempuh_ke_sekolah",
                                    "data" => "id",
                                    "placeholder" => "inputkan waktu tempuh ke sekolah",
                                    "value" => $edit->waktu_tempuh_ke_sekolah,
                                ]);
                            
                                $form::input([
                                    "title" => "jumlah saudara",
                                    "type" => "number",
                                    "fc" => "jumlah_saudara",
                                    "data" => "id",
                                    "placeholder" => "inputkan jumlah saudara",
                                    "value" => $edit->jumlah_saudara,
                                ]);
                            
                                $form::input([
                                    "title" => "created at",
                                    "type" => "text",
                                    "fc" => "created_at",
                                    "data" => "id",
                                    "placeholder" => "inputkan created at",
                                    "value" => $edit->created_at,
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
                                    "title" => "nama lengkap",
                                    "type" => "text",
                                    "fc" => "nama_lengkap",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama lengkap",
                                ]);
                            
                                $form::input([
                                    "title" => "jenis kelamin",
                                    "type" => "number",
                                    "fc" => "jenis_kelamin",
                                    "data" => "id",
                                    "placeholder" => "inputkan jenis kelamin",
                                ]);
                            
                                $form::input([
                                    "title" => "nisn",
                                    "type" => "text",
                                    "fc" => "nisn",
                                    "data" => "id",
                                    "placeholder" => "inputkan nisn",
                                ]);
                            
                                $form::input([
                                    "title" => "nisd",
                                    "type" => "text",
                                    "fc" => "nisd",
                                    "data" => "id",
                                    "placeholder" => "inputkan nisd",
                                ]);
                            
                                $form::input([
                                    "title" => "ns skhun",
                                    "type" => "text",
                                    "fc" => "ns_skhun",
                                    "data" => "id",
                                    "placeholder" => "inputkan ns skhun",
                                ]);
                            
                                $form::input([
                                    "title" => "nun sd",
                                    "type" => "text",
                                    "fc" => "nun_sd",
                                    "data" => "id",
                                    "placeholder" => "inputkan nun sd",
                                ]);
                            
                                $form::input([
                                    "title" => "nik",
                                    "type" => "text",
                                    "fc" => "nik",
                                    "data" => "id",
                                    "placeholder" => "inputkan nik",
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir",
                                    "type" => "text",
                                    "fc" => "tempat_lahir",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir",
                                ]);
                            
                                $form::input([
                                    "title" => "agama",
                                    "type" => "text",
                                    "fc" => "agama",
                                    "data" => "id",
                                    "placeholder" => "inputkan agama",
                                ]);
                            
                                $form::input([
                                    "title" => "berkebutuhan khusus",
                                    "type" => "text",
                                    "fc" => "berkebutuhan_khusus",
                                    "data" => "id",
                                    "placeholder" => "inputkan berkebutuhan khusus",
                                ]);
                            
                                $form::input([
                                    "title" => "alamat",
                                    "type" => "text",
                                    "fc" => "alamat",
                                    "data" => "id",
                                    "placeholder" => "inputkan alamat",
                                ]);
                            
                                $form::input([
                                    "title" => "rt",
                                    "type" => "text",
                                    "fc" => "rt",
                                    "data" => "id",
                                    "placeholder" => "inputkan rt",
                                ]);
                            
                                $form::input([
                                    "title" => "rw",
                                    "type" => "text",
                                    "fc" => "rw",
                                    "data" => "id",
                                    "placeholder" => "inputkan rw",
                                ]);
                            
                                $form::input([
                                    "title" => "kelurahan",
                                    "type" => "text",
                                    "fc" => "kelurahan",
                                    "data" => "id",
                                    "placeholder" => "inputkan kelurahan",
                                ]);
                            
                                $form::input([
                                    "title" => "kecamatan",
                                    "type" => "text",
                                    "fc" => "kecamatan",
                                    "data" => "id",
                                    "placeholder" => "inputkan kecamatan",
                                ]);
                            
                                $form::input([
                                    "title" => "kota kabupaten",
                                    "type" => "text",
                                    "fc" => "kota_kabupaten",
                                    "data" => "id",
                                    "placeholder" => "inputkan kota kabupaten",
                                ]);
                            
                                $form::input([
                                    "title" => "provinsi",
                                    "type" => "text",
                                    "fc" => "provinsi",
                                    "data" => "id",
                                    "placeholder" => "inputkan provinsi",
                                ]);
                            
                                $form::input([
                                    "title" => "kodepos",
                                    "type" => "text",
                                    "fc" => "kodepos",
                                    "data" => "id",
                                    "placeholder" => "inputkan kodepos",
                                ]);
                            
                                $form::input([
                                    "title" => "alat transportasi",
                                    "type" => "text",
                                    "fc" => "alat_transportasi",
                                    "data" => "id",
                                    "placeholder" => "inputkan alat transportasi",
                                ]);
                            
                                $form::input([
                                    "title" => "jenis tinggal",
                                    "type" => "text",
                                    "fc" => "jenis_tinggal",
                                    "data" => "id",
                                    "placeholder" => "inputkan jenis tinggal",
                                ]);
                            
                                $form::input([
                                    "title" => "no telp",
                                    "type" => "text",
                                    "fc" => "no_telp",
                                    "data" => "id",
                                    "placeholder" => "inputkan no telp",
                                ]);
                            
                                $form::input([
                                    "title" => "email",
                                    "type" => "text",
                                    "fc" => "email",
                                    "data" => "id",
                                    "placeholder" => "inputkan email",
                                ]);
                            
                                $form::input([
                                    "title" => "asal sekolah sd",
                                    "type" => "text",
                                    "fc" => "asal_sekolah_sd",
                                    "data" => "id",
                                    "placeholder" => "inputkan asal sekolah sd",
                                ]);
                            
                                $form::input([
                                    "title" => "kps",
                                    "type" => "text",
                                    "fc" => "kps",
                                    "data" => "id",
                                    "placeholder" => "inputkan kps",
                                ]);
                            
                                $form::input([
                                    "title" => "nokps",
                                    "type" => "text",
                                    "fc" => "nokps",
                                    "data" => "id",
                                    "placeholder" => "inputkan nokps",
                                ]);
                            
                                $form::input([
                                    "title" => "nama ayah",
                                    "type" => "text",
                                    "fc" => "nama_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama ayah",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir",
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir ayah",
                                    "type" => "text",
                                    "fc" => "tempat_lahir_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir ayah",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir ayah",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir ayah",
                                ]);
                            
                                $form::input([
                                    "title" => "pekerjaan ayah",
                                    "type" => "text",
                                    "fc" => "pekerjaan_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan pekerjaan ayah",
                                ]);
                            
                                $form::input([
                                    "title" => "pendidikan ayah",
                                    "type" => "text",
                                    "fc" => "pendidikan_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan pendidikan ayah",
                                ]);
                            
                                $form::input([
                                    "title" => "penghasilan bulanan ayah",
                                    "type" => "text",
                                    "fc" => "penghasilan_bulanan_ayah",
                                    "data" => "id",
                                    "placeholder" => "inputkan penghasilan bulanan ayah",
                                ]);
                            
                                $form::input([
                                    "title" => "nama ibu",
                                    "type" => "text",
                                    "fc" => "nama_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama ibu",
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir ibu",
                                    "type" => "text",
                                    "fc" => "tempat_lahir_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir ibu",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir ibu",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir ibu",
                                ]);
                            
                                $form::input([
                                    "title" => "pekerjaan ibu",
                                    "type" => "text",
                                    "fc" => "pekerjaan_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan pekerjaan ibu",
                                ]);
                            
                                $form::input([
                                    "title" => "pendidikan ibu",
                                    "type" => "text",
                                    "fc" => "pendidikan_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan pendidikan ibu",
                                ]);
                            
                                $form::input([
                                    "title" => "penghasilan bulanan ibu",
                                    "type" => "text",
                                    "fc" => "penghasilan_bulanan_ibu",
                                    "data" => "id",
                                    "placeholder" => "inputkan penghasilan bulanan ibu",
                                ]);
                            
                                $form::input([
                                    "title" => "nama wali",
                                    "type" => "text",
                                    "fc" => "nama_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan nama wali",
                                ]);
                            
                                $form::input([
                                    "title" => "tempat lahir wali",
                                    "type" => "text",
                                    "fc" => "tempat_lahir_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan tempat lahir wali",
                                ]);
                            
                                $form::input([
                                    "title" => "tanggal lahir wali",
                                    "type" => "text",
                                    "fc" => "tanggal_lahir_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan tanggal lahir wali",
                                ]);
                            
                                $form::input([
                                    "title" => "pekerjaan wali",
                                    "type" => "text",
                                    "fc" => "pekerjaan_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan pekerjaan wali",
                                ]);
                            
                                $form::input([
                                    "title" => "pendidikan wali",
                                    "type" => "text",
                                    "fc" => "pendidikan_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan pendidikan wali",
                                ]);
                            
                                $form::input([
                                    "title" => "penghasilan bulanan wali",
                                    "type" => "text",
                                    "fc" => "penghasilan_bulanan_wali",
                                    "data" => "id",
                                    "placeholder" => "inputkan penghasilan bulanan wali",
                                ]);
                            
                                $form::input([
                                    "title" => "tinggi badan",
                                    "type" => "text",
                                    "fc" => "tinggi_badan",
                                    "data" => "id",
                                    "placeholder" => "inputkan tinggi badan",
                                ]);
                            
                                $form::input([
                                    "title" => "berat badan",
                                    "type" => "text",
                                    "fc" => "berat_badan",
                                    "data" => "id",
                                    "placeholder" => "inputkan berat badan",
                                ]);
                            
                                $form::input([
                                    "title" => "jarak rumah ke sekolah",
                                    "type" => "text",
                                    "fc" => "jarak_rumah_ke_sekolah",
                                    "data" => "id",
                                    "placeholder" => "inputkan jarak rumah ke sekolah",
                                ]);
                            
                                $form::input([
                                    "title" => "waktu tempuh ke sekolah",
                                    "type" => "text",
                                    "fc" => "waktu_tempuh_ke_sekolah",
                                    "data" => "id",
                                    "placeholder" => "inputkan waktu tempuh ke sekolah",
                                ]);
                            
                                $form::input([
                                    "title" => "jumlah saudara",
                                    "type" => "number",
                                    "fc" => "jumlah_saudara",
                                    "data" => "id",
                                    "placeholder" => "inputkan jumlah saudara",
                                ]);
                            
                                $form::input([
                                    "title" => "created at",
                                    "type" => "text",
                                    "fc" => "created_at",
                                    "data" => "id",
                                    "placeholder" => "inputkan created at",
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
 <th>nama lengkap</th> 
 <th>jenis kelamin</th> 
 <th>nisn</th> 
 <th>nisd</th> 
 <th>ns skhun</th> 
 <th>nun sd</th> 
 <th>nik</th> 
 <th>tempat lahir</th> 
 <th>agama</th> 
 <th>berkebutuhan khusus</th> 
 <th>alamat</th> 
 <th>rt</th> 
 <th>rw</th> 
 <th>kelurahan</th> 
 <th>kecamatan</th> 
 <th>kota kabupaten</th> 
 <th>provinsi</th> 
 <th>kodepos</th> 
 <th>alat transportasi</th> 
 <th>jenis tinggal</th> 
 <th>no telp</th> 
 <th>email</th> 
 <th>asal sekolah sd</th> 
 <th>kps</th> 
 <th>nokps</th> 
 <th>nama ayah</th> 
 <th>tanggal lahir</th> 
 <th>tempat lahir ayah</th> 
 <th>tanggal lahir ayah</th> 
 <th>pekerjaan ayah</th> 
 <th>pendidikan ayah</th> 
 <th>penghasilan bulanan ayah</th> 
 <th>nama ibu</th> 
 <th>tempat lahir ibu</th> 
 <th>tanggal lahir ibu</th> 
 <th>pekerjaan ibu</th> 
 <th>pendidikan ibu</th> 
 <th>penghasilan bulanan ibu</th> 
 <th>nama wali</th> 
 <th>tempat lahir wali</th> 
 <th>tanggal lahir wali</th> 
 <th>pekerjaan wali</th> 
 <th>pendidikan wali</th> 
 <th>penghasilan bulanan wali</th> 
 <th>tinggi badan</th> 
 <th>berat badan</th> 
 <th>jarak rumah ke sekolah</th> 
 <th>waktu tempuh ke sekolah</th> 
 <th>jumlah saudara</th> 
 <th>created at</th> 
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
                                "url"       : "<?= site_url('ppdb/json')?>",
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
    <form action="<?= site_url('ppdb/hapus')?>" method="post" enctype="">
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