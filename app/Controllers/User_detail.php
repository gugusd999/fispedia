<?php namespace App\Controllers;

class User_detail extends BaseController
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('user_detail');
    }

    function json()
    {
        // order
        $order = 'DESC';
        if (isset($_POST['order'])) : $order = $_POST['order'][0]['dir'];
        else : $setorder = '';
        endif;
        // pencarian
        $pencarian = "";
        if (isset($_POST['search']['value'])) {
            $pencarian = $_POST['search']['value'];
        }
        // limit set   
        $start = $_POST['start'];
        $end = $_POST['length'];
        // draw
        $draw = $_POST['draw'];
        // query prosses
        $qr = $this->db->query("
            SELECT 
                * 
            FROM
                user_detail
            WHERE 
                 id LIKE '%$pencarian%'  
 OR nama LIKE '%$pencarian%'  
 OR jenis_kelamin LIKE '%$pencarian%'  
 OR tempat_lahir LIKE '%$pencarian%'  
 OR tanggal_lahir LIKE '%$pencarian%'  
 OR email LIKE '%$pencarian%'  
 OR hp LIKE '%$pencarian%'  
 OR instagram LIKE '%$pencarian%'  
 OR foto LIKE '%$pencarian%'  
 OR namasekolah LIKE '%$pencarian%'  
 OR kota LIKE '%$pencarian%'  
 OR provinsi LIKE '%$pencarian%'  
 OR kelas LIKE '%$pencarian%'  
 OR jurusan LIKE '%$pencarian%'  
 OR tahun_lulus LIKE '%$pencarian%'  
 OR aktif LIKE '%$pencarian%'  
 OR tanggal_daftar LIKE '%$pencarian%' 
            ORDER BY
                id $order
            LIMIT
                $start , $end
        ");
        $arr = [];
        $dataArr = $qr->getResultObject();
        $dataTotal = $this->builder->countAll();
        foreach ($dataArr as $key => $value) {
            $child = [];
            $child[] = $value->id; 
$child[] = $value->nama; 
$child[] = $value->jenis_kelamin; 
$child[] = $value->tempat_lahir; 
$child[] = $value->tanggal_lahir; 
$child[] = $value->email; 
$child[] = $value->hp; 
$child[] = $value->instagram; 
$child[] = $value->foto; 
$child[] = $value->namasekolah; 
$child[] = $value->kota; 
$child[] = $value->provinsi; 
$child[] = $value->kelas; 
$child[] = $value->jurusan; 
$child[] = $value->tahun_lulus; 
$child[] = $value->aktif; 
$child[] = $value->tanggal_daftar; 

            $child[] = "
                <center>
                    <a href='" . site_url('user_detail/edit/'.$value->id) . "' class='btn btn-sm btn-warning'>Edit</a>
                    <button data-id='" . $value->id . "' modal-open-delete class='btn btn-sm btn-danger'>Delete</button>
                </center>
            ";
            $arr[] = $child;
        }
        $r = array(
            "draw"            => $draw,
            "recordsTotal"    => intval($dataTotal),
            "recordsFiltered" => intval($dataTotal),
            "data"            => $arr,
        );
        echo json_encode($r);
    }

    public function Index($edit = "")
    {
        if(isset($_POST['data'])){
            $data = $_POST['data'];
            unset($_POST['data']);
            $this->builder->insert($data);
            $data['success'] = 'data telah disimpan';
            $data['form'] = $this->form();
            return redirect()->to('/user_detail'); // ubah disini
        }else{
            $data['form'] = $this->form();
            return view('admin/user_detail/index', $data);
        }
    }


    public function edit($edit = "")
    {
        $data['edit'] = $this->db->query("SELECT * FROM user_detail WHERE id = '$edit' ")->getRow();
        $data['form'] = $this->form();
        return view('admin/user_detail/index', $data);
    }
    
    public function update()
    {
        $data = $_POST['data'];
        $id = $data['id'];
        unset($data['id']);
        $this->builder->where('id', $id);
        $this->builder->update($data);
        return redirect()->to('/user_detail'); // ubah disini
    }

    public function formUpdate()
    {
        return view('admin/user_detail/update');
    }

    public function hapus()
    {
        $kode = $_POST['id'];
        $this->db->query("DELETE FROM user_detail WHERE id = '$kode' ");
        return redirect()->to('/user_detail'); // ubah disini
    }
}
