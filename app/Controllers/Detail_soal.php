<?php namespace App\Controllers;

class Detail_soal extends BaseController
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('detail_soal');
        if (count($this->ceklogin()) == 0) {
			header('Location: '.site_url('login'));
			exit();
		}
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
                detail_soal
            WHERE 
                 id LIKE '%$pencarian%'  
 OR id_user LIKE '%$pencarian%'  
 OR soal LIKE '%$pencarian%'  
 OR a LIKE '%$pencarian%'  
 OR b LIKE '%$pencarian%'  
 OR c LIKE '%$pencarian%'  
 OR d LIKE '%$pencarian%'  
 OR e LIKE '%$pencarian%'  
 OR jawaban LIKE '%$pencarian%'  
 OR nilai_soal LIKE '%$pencarian%' 
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
$child[] = $value->id_user; 
$child[] = $value->soal; 
$child[] = $value->a; 
$child[] = $value->b; 
$child[] = $value->c; 
$child[] = $value->d; 
$child[] = $value->e; 
$child[] = $value->jawaban; 
$child[] = $value->nilai_soal; 

            $child[] = "
                <center>
                    <a href='" . site_url('detail_soal/edit/'.$value->id) . "' class='btn btn-sm btn-warning'>Edit</a>
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
            return redirect()->to('/detail_soal'); // ubah disini
        }else{
            $data['form'] = $this->form();
            return view('admin/detail_soal/index', $data);
        }
    }


    public function edit($edit = "")
    {
        $data['edit'] = $this->db->query("SELECT * FROM detail_soal WHERE id = '$edit' ")->getRow();
        $data['form'] = $this->form();
        return view('admin/detail_soal/index', $data);
    }
    
    public function update()
    {
        $data = $_POST['data'];
        $id = $data['id'];
        unset($data['id']);
        $this->builder->where('id', $id);
        $this->builder->update($data);
        return redirect()->to('/detail_soal'); // ubah disini
    }

    public function formUpdate()
    {
        return view('admin/detail_soal/update');
    }

    public function hapus()
    {
        $kode = $_POST['id'];
        $this->db->query("DELETE FROM detail_soal WHERE id = '$kode' ");
        return redirect()->to('/detail_soal'); // ubah disini
    }
}
