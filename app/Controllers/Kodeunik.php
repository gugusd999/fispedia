<?php namespace App\Controllers;

class Kodeunik extends BaseController
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('kodeunik');
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
                kodeunik
            WHERE 
                 id LIKE '%$pencarian%'  
 OR id_user LIKE '%$pencarian%'  
 OR kodeunik LIKE '%$pencarian%'  
 OR aktif LIKE '%$pencarian%' 
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
$child[] = $value->kodeunik; 
$child[] = $value->aktif; 

            $child[] = "
                <center>
                    <a href='" . site_url('kodeunik/edit/'.$value->id) . "' class='btn btn-sm btn-warning'>Edit</a>
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
            return redirect()->to('/kodeunik'); // ubah disini
        }else{
            $data['form'] = $this->form();
            return view('admin/kodeunik/index', $data);
        }
    }


    public function edit($edit = "")
    {
        $data['edit'] = $this->db->query("SELECT * FROM kodeunik WHERE id = '$edit' ")->getRow();
        $data['form'] = $this->form();
        return view('admin/kodeunik/index', $data);
    }
    
    public function update()
    {
        $data = $_POST['data'];
        $id = $data['id'];
        unset($data['id']);
        $this->builder->where('id', $id);
        $this->builder->update($data);
        return redirect()->to('/kodeunik'); // ubah disini
    }

    public function formUpdate()
    {
        return view('admin/kodeunik/update');
    }

    public function hapus()
    {
        $kode = $_POST['id'];
        $this->db->query("DELETE FROM kodeunik WHERE id = '$kode' ");
        return redirect()->to('/kodeunik'); // ubah disini
    }
}
