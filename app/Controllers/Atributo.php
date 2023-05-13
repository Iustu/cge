<?php namespace App\Controllers;

use App\Models\AtributoModel;
use App\Models\RelacaoModel;
use CodeIgniter\Controller;

class Atributo extends Controller{
    protected $atributosModel;
    public function __construct(){
        helper('form');
        $this->atributosModel = new AtributoModel();
    }

    public function index(){
        $atributos = $this->atributosModel->findAll();

        $var = ['titulo'=> 'Atributos',
            'body'=>'Página de atributos',
            'atributos'=> $atributos];

        return view('atributos/home',$var);
    }
    public function sobre(){
        return view('atributos/sobre');
    }

    public function create(){
        return view('atributos/form');
    }

    public function store(){
        $dados = $this->request->getPost();
        $request = $this->atributosModel->save($dados);
        if ($request){
            echo view('atributos/sucesso');
        }else{
            echo view('atributos/erro');
        }
    }

    public function edit($id = null){
        $atributo = $this->atributosModel->find($id);

        echo view('atributos/form',['atributo'=>$atributo]);
    }

    public function remove($id=null){
        if ($this->atributosModel->delete($id)){
            echo view("/atributos/sucessoExclusao");
        }else{
            echo view('/atributos/erro');
        }
    }
}