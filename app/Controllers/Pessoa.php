<?php namespace App\Controllers;

use App\Models\AtributoModel;
use App\Models\PessoaModel;
use CodeIgniter\Controller;

class Pessoa extends Controller{
    protected $pessoasModel;
    protected $db;
    public function __construct(){
        helper('form');
        $this->pessoasModel = new PessoaModel();
        $this->db = \Config\Database::connect();
    }

    public function index(){
        $pessoas = $this->pessoasModel->findAll();

        $var = ['titulo'=> 'Tela de usuários',
            'body'=>'Página de usuários',
            'pessoas'=> $pessoas];

        return view('pessoas/home',$var);
    }
    public function sobre(){
        return view('pessoas/sobre');
    }

    public function create(){
        return view('pessoas/form');
    }

    public function store(){
        $dados = $this->request->getPost();
        $request = $this->pessoasModel->save($dados);
        if ($request){
            echo view('pessoas/sucesso');
        }else{
            echo view('pessoas/erro');
        }
    }

    public function edit($id = null){
        $pessoa = $this->pessoasModel->find($id);

        echo view('pessoas/form',['pessoa'=>$pessoa]);
    }

    public function remove($id=null){
        if ($this->pessoasModel->delete($id)){
            echo view("/pessoas/sucessoExclusao");
        }else{
            echo view('/pessoas/erro');
        }
    }

    //passa o id da relacao, id atributo, nome atributo e idPessoa
    public function atributos($id=null){
        //relacoes da pessoa
        $query = $this->db->query('SELECT * from relacao where pessoaId='.$id.'');
        $resultados = $query->getResult('array');
        //tratar os dados pro front
        $pessoa = $this->pessoasModel->find($id);
        $nomePessoa = $pessoa['nome'];
        $dados = array();
        $i=0;
        foreach ($resultados as $resultado){
            $query = $this->db->query('SELECT nome from atributos where atributoId='.$resultado['atributoId']);
            $nomeAtributo = $query->getResult('array');
            $dados[$i] = [$resultado["id"],$resultado["atributoId"],$nomeAtributo[0]['nome']];
            $i++;
        }
        $var = ['dados'=>$dados,
                'nome'=>$nomePessoa,
                'id'=>$id];
        echo view('/pessoas/atributos',$var);
    }
}