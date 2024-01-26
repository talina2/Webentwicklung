<?php

namespace App\Controllers;
use App\Models\PersonenModel;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        $personenModel = new PersonenModel();
        $data['personen'] = $personenModel->getDashboardData();
        echo view('pages/admin/Dashboard', $data);
    }

}
