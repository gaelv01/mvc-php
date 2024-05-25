<?php

namespace App\Controllers;

use App\Controllers\Controller;

class AdminController extends Controller
{
    public function add()
    {
        return $this->view('admin.add');
    }

    public function delete()
    {
        return $this->view('admin.delete');
    }

    public function show()
    {
        return $this->view('admin.show');
    }

    public function modify()
    {
        return $this->view('admin.modify');
    }
}

