<?php

namespace App\Controllers;

use App\Models\ArvoreModel;

class ArvoreController extends BaseController
{
    public function index()
    {
        $model = new ArvoreModel();
        $data['arvores'] = $model->findAll();

        return view('arvore/index', $data);
    }

    public function create()
    {
        helper('form');
        return view('arvore/create');
    }

    public function store()
    {
        $model = new ArvoreModel();

        $data = [
            'nome_rua' => $this->request->getPost('nome_rua'),
            'tipo_arvore' => $this->request->getPost('tipo_arvore'),
            'descricao' => $this->request->getPost('descricao'),
            'data_corte' => $this->request->getPost('data_corte'),
            'data_plantio' => $this->request->getPost('data_plantio'),
        ];

        $model->insert($data);

        helper('form');

        return redirect()->to('/arvore');
    }

    public function edit($id = null)
    {
        $model = new ArvoreModel();
        $data['arvore'] = $model->find($id);
        helper('form');

        return view('arvore/edit', $data);
    }

    public function update()
    {
        $model = new ArvoreModel();

        $id = $this->request->getPost('id');

        $data = [
            'nome_rua' => $this->request->getPost('nome_rua'),
            'tipo_arvore' => $this->request->getPost('tipo_arvore'),
            'descricao' => $this->request->getPost('descricao'),
            'data_corte' => $this->request->getPost('data_corte'),
            'data_plantio' => $this->request->getPost('data_plantio'),
        ];

        $model->update($id, $data);

        return redirect()->to('/arvore');
    }

    public function delete($id = null)
    {
        $model = new ArvoreModel();
        $model->delete($id);

        return redirect()->to('/arvore');
    }
}
