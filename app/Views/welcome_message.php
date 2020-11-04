<?= $this->extend('template/front') ?>
<?= $this->section('content') ?>


<div class="container mt-5 mb-5">
	<h1>
		Penerimaan Peserta Didik Baru
	</h1>


	<?php
		$form::start(site_url('ppdb/save'));
		$form::summernote();
		
		$form::input([
			"title" => "Nama Lengkap",
			"type" => "text",
			"fc" => "nama_lengkap",
			"data" => "id",
			"placeholder" => "inputkan nama lengkap",
		]);
	
		$form::select_db([
			"title" => "Jenis Kelamin",
			"type" => "number",
			"fc" => "jenis_kelamin",
			"db" => "status",
			"data" => "status",
			"key" => "id",
			"condition" => [
				"row" => "type_status",
				"value" => '1'
			]
			], "col-sm-4");
	
		$form::input([
			"title" => "NISN",
			"type" => "text",
			"fc" => "nisn",
			"data" => "id",
			"placeholder" => "Inputkan NISN",
		],"col-sm-4");
	
		$form::input([
			"title" => "Nomor Ijazah SD",
			"type" => "text",
			"fc" => "nisd",
			"data" => "id",
			"placeholder" => "Inputkan Nomor Ijazah SD",
		],"col-sm-4");
	
		$form::input([
			"title" => "Nomor Seri SKHUN",
			"type" => "text",
			"fc" => "ns_skhun",
			"data" => "id",
			"placeholder" => "Inputkan Nomor Seri SKHUN",
		],"col-sm-4");
	
		$form::input([
			"title" => "No. Ujian Nasional SD / MI",
			"type" => "text",
			"fc" => "nun_sd",
			"data" => "id",
			"placeholder" => "Inputkan No. Ujian Nasional SD / MI",
		],"col-sm-4");
	
		$form::input([
			"title" => "NIK",
			"type" => "text",
			"fc" => "nik",
			"data" => "id",
			"placeholder" => "Inputkan NIK",
		],"col-sm-4");
	
		$form::input([
			"title" => "Tempat Lahir",
			"type" => "text",
			"fc" => "tempat_lahir",
			"data" => "id",
			"placeholder" => "inputkan tempat lahir",
		], "col-sm-6");
	
		$form::input([
			"title" => "Tanggal Lahir",
			"type" => "date",
			"fc" => "tanggal_lahir",
			"data" => "id",
			"placeholder" => "inputkan tempat lahir",
		], "col-sm-6");
	
		$form::select_db([
			"title" => "Agama",
			"type" => "text",
			"fc" => "agama",
			"db" => "m_agama",
			"key" => "id",
			"data" => "nama",
			"placeholder" => "inputkan Agama",
		], "col-sm-6");
	
		$form::select_db([
			"title" => "Berkebutuhan Khusus",
			"type" => "text",
			"fc" => "berkebutuhan_khusus",
			"db" => "m_kebutuhan_khusus",
			"key" => "id",
			"data" => "nama",
			"placeholder" => "inputkan berkebutuhan khusus",
		], "col-sm-6");
	
		$form::input([
			"title" => "Alamat",
			"type" => "text",
			"fc" => "alamat",
			"data" => "id",
			"placeholder" => "inputkan Alamat",
		], "col-sm-6");
		
		$form::input([
			"title" => "RT",
			"type" => "text",
			"fc" => "rt",
			"data" => "id",
			"placeholder" => "inputkan RT",
		], "col-sm-3");
	
		$form::input([
			"title" => "RW",
			"type" => "text",
			"fc" => "rw",
			"data" => "id",
			"placeholder" => "inputkan RW",
		], "col-sm-3");
	
		$form::input([
			"title" => "Kelurahan",
			"type" => "text",
			"fc" => "kelurahan",
			"data" => "id",
			"placeholder" => "Inputkan Kelurahan",
		], "col-sm-4");
	
		$form::input([
			"title" => "Kecamatan",
			"type" => "text",
			"fc" => "kecamatan",
			"data" => "id",
			"placeholder" => "Inputkan Kecamatan",
		], "col-sm-4");
	
		$form::input([
			"title" => "Kota / Kabupaten",
			"type" => "text",
			"fc" => "kota_kabupaten",
			"data" => "id",
			"placeholder" => "Inputkan Kota / Kabupaten",
		], "col-sm-4");
	
		$form::input([
			"title" => "Provinsi",
			"type" => "text",
			"fc" => "provinsi",
			"data" => "id",
			"placeholder" => "Inputkan Provinsi",
		], "col-sm-6");
	
		$form::input([
			"title" => "Kodepos",
			"type" => "text",
			"fc" => "kodepos",
			"data" => "id",
			"placeholder" => "Inputkan Kodepos",
		], "col-sm-6");
	
		$form::input([
			"title" => "Alat Transportasi",
			"type" => "text",
			"fc" => "alat_transportasi",
			"data" => "id",
			"placeholder" => "inputkan alat transportasi",
		]);
	
		$form::input([
			"title" => "Jenis Tinggal",
			"type" => "text",
			"fc" => "jenis_tinggal",
			"data" => "id",
			"placeholder" => "Inputkan Jenis Tinggal",
		]);
	
		$form::input([
			"title" => "No Telp",
			"type" => "text",
			"fc" => "no_telp",
			"data" => "id",
			"placeholder" => "Inputkan No Telp",
		]);
	
		$form::input([
			"title" => "Email",
			"type" => "text",
			"fc" => "email",
			"data" => "id",
			"placeholder" => "Inputkan Email",
		]);
	
		$form::input([
			"title" => "Asal Sekolah SD",
			"type" => "text",
			"fc" => "asal_sekolah_sd",
			"data" => "id",
			"placeholder" => "inputkan Asal Sekolah SD",
		]);
	
		$form::input([
			"title" => "Apakah Sebagai Penerima KPS",
			"type" => "text",
			"fc" => "kps",
			"data" => "id",
			"placeholder" => "Ya/ Tidak",
		]);
	
		$form::input([
			"title" => "No KPS",
			"type" => "text",
			"fc" => "nokps",
			"data" => "id",
			"placeholder" => "Inputkan No KPS",
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
				
		$form->submit("Simpan");
		$form::end();
	?>



</div>


<?= $this->endSection() ?>