<?php

namespace App\Controllers;

use App\Models\PlantModel;

class Page extends BaseController
{
    protected $plantModel;

    public function __construct() {
        $this->plantModel = new PlantModel();
    }

    public function index(): string
    {
        $plants_top = $this->plantModel->orderBy('rand()')->findAll(3);
        $plants_newest = $this->plantModel->orderBy('created_at', 'DESC')->findAll(3);
        
        return view('index', [
            'page_name' => 'home',
            'plants_top' => $plants_top,
            'plants_newest' => $plants_newest,
        ]);
    }

    public function list(): string
    {
        $plants = $this->plantModel->findAll();

        return view('list', [
            'page_name' => 'list',
            'plants' => $plants,
        ]);
    }

    public function article(): string
    {
        $id = $this->request->getGet('id');

        if ($id) {
            $plant = $this->plantModel->getCategory()->find($id);
        } else {
            $plant = $this->plantModel->getCategory()->find(1);
        }
        
        return view('article', [
            'page_name' => 'article',
            'plant' => $plant,
        ]);
    }
}
