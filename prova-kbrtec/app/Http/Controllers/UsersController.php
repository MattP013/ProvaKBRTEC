<?php

namespace App\Http\Controllers;
use App\Models\Models\ModelUsers;
use App\Models\Models\ModelProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    
    private $Produto;
    private $User;
    public function __construct()
    {
        $this->User = new ModelUsers();
        $this->Produto = new ModelProduto();
    }
    public function Login(Request $request)
    { 
        $this->User = [
            'nm_email' =>$request->email,
            'nm_senha' => $request->senha
        ];
       if(Auth::attempt($this->User));
       {
            $produto = $this->Produto->all();
            return view('admindashboard',compact('produto'));
       }
       else
       {
           return "Usuario não encontrado";
       }

    }

    public function PaginaAdmin()
    {
        if(Auth::check() === true)
        {
            $produto = $this->Produto->all();
            return view('admindashboard',compact('produto'));
        }
        else
        {
            return redirect()->route('index');
        }
        
    }
}
