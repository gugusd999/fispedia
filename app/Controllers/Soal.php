<?php namespace App\Controllers;

class Soal extends BaseController
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('soal');
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
                soal
            WHERE 
                 id LIKE '%$pencarian%'  
 OR soal LIKE '%$pencarian%'  
 OR id_matpel LIKE '%$pencarian%'  
 OR aktif LIKE '%$pencarian%'  
 OR tanggal LIKE '%$pencarian%'  
 OR waktu_awal LIKE '%$pencarian%'  
 OR waktu_berakhir LIKE '%$pencarian%' 
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
$child[] = $value->soal; 
$child[] = $value->id_matpel; 
$child[] = $value->aktif; 
$child[] = $value->tanggal; 
$child[] = $value->waktu_awal; 
$child[] = $value->waktu_berakhir; 

            $child[] = "
                <center>
                    <a href='" . site_url('soal/edit/'.$value->id) . "' class='btn btn-sm btn-warning'>Edit</a>
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
            return redirect()->to('/soal'); // ubah disini
        }else{
            $data['form'] = $this->form();
            return view('admin/soal/index', $data);
        }
    }


    public function edit($edit = "")
    {
        $data['edit'] = $this->db->query("SELECT * FROM soal WHERE id = '$edit' ")->getRow();
        $data['form'] = $this->form();
        return view('admin/soal/index', $data);
    }
    
    public function update()
    {
        $data = $_POST['data'];
        $id = $data['id'];
        unset($data['id']);
        $this->builder->where('id', $id);
        $this->builder->update($data);
        return redirect()->to('/soal'); // ubah disini
    }

    public function formUpdate()
    {
        return view('admin/soal/update');
    }

    public function hapus()
    {
        $kode = $_POST['id'];
        $this->db->query("DELETE FROM soal WHERE id = '$kode' ");
        return redirect()->to('/soal'); // ubah disini
    }
}
