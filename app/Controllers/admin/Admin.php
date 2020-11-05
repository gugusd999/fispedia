<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->ceklogin();
    }

    public function index()
    {
        $data = [
            'title' => 'ADMIN - FisPEDIA',
        ];
        return view('back/home', $data);
    }



    //--------------------------------------------------------------------

}
