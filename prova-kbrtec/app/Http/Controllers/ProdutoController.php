<?php

namespace App\Http\Controllers;
use App\Models\Models\ModelProduto;
use App\Http\Request\ProdutoRequest;
use App\Models\Models\ModelCategoria;

class ProdutoController extends Controller
{
    private $Produto;
    public function __construct()
    {
        $this->Produto = new ModelProduto();
        $this->Categoria = new ModelCategoria();

    }
    public function EditarProduto($id){
        $_produto = $this->Produto->find($id);
        return view('editarproduto',compact('_produto'));
        
    }
    public function CadastroProduto()
    {
        $_categoria = $this->Categoria->all();
        return view('cadastraproduto',compact($_categoria));
    }
    public function NovoProduto(ProdutoRequest $request)
    {
        $status = 1;
        $request->imgproduto->store('produtos');
       $save = $this->Produto->create([
            'nm_produto'=>$request->nmproduto,
            'vl_produto'=>$request->vlproduto,
            'nm_categoria'=>$request->nmcategoria, 
            'ds_imagem_produto'=>$request->imgproduto,
            'sg_status'=> $status
        ]);

        if($save)
        {
            return redirect('admindashboard');
        }
        else
        {
            return "<h1>Não foi possivel realizar o cadastro, tente novamente mais tarde</h1>";
        }
    }
    
    
}
