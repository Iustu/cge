<?php

namespace App\Controllers;

use App\Models\AtributoModel;
use App\Models\PessoaModel;
use App\Models\RelacaoModel;
use CodeIgniter\Controller;

class Relacao extends Controller
{
    protected $relacoesModel;
    public function __construct(){
        helper('form');
        $this->relacoesModel = new RelacaoModel();
    }

    public function index(){
        $dados=array();
        $i=0;
        $modelPessoa = new PessoaModel();
        $modelAtributo = new AtributoModel();
        $relacoes = $this->relacoesModel->findAll();

        foreach ($relacoes as $relacao){
            $indicePessoa = (int) $relacao["pessoaId"];
            $indiceAtributo = (int) $relacao["atributoId"];
            $pessoa = $modelPessoa->find($indicePessoa);
            $atributo = $modelAtributo->find($indiceAtributo);
            $dados[$i]=[$relacao['id'],$pessoa['nome'],$atributo['nome']];
            $i++;
        };

        $var = ['titulo'=> 'Tela de relacoes',
            'body'=>'Página de Relações',
            'dados'=> $dados];

        return view('relacoes/home',$var);
    }
    public function sobre(){
        return view('relacoes/sobre');
    }

    public function create($id=null){
        if ($id==null){
            return view('relacoes/form');
        }else {
            return view('relacoes/formPessoa',['id'=>$id]);
        }

    }

    public function store(){
        $dados = $this->request->getPost();
        $request = $this->relacoesModel->save($dados);
        if ($request){
            echo view('relacoes/sucesso');
        }else{
            echo view('relacoes/erro');
        }
    }
    public function store2($id){
        $dados = $this->request->getPost();
        $request = $this->relacoesModel->save($dados);
        if ($request){
            echo view('relacoes/sucesso2',['id'=>$id]);
        }else{
            echo view('relacoes/erro2',['id'=>$id]);
        }
    }

    public function remove($id=null){
        if ($this->relacoesModel->delete($id)){
            echo view("/relacoes/sucessoExclusao");
        }else{
            echo view('/relacoes/erro');
        }
    }
    public function remove2($id=null,$idCliente=null){
        if ($this->relacoesModel->delete($id)){
            echo view("/relacoes/sucessoExclusao2",["id"=>$idCliente]);
        }else{
            echo view('/relacoes/erro2/',["id"=>$idCliente]);
        }
    }
}