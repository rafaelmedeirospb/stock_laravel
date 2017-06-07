<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;
 	class ProdutosController extends Controller {

 		

 		public function __construct()
  		{
    		$this->middleware('auth');
    		//,['only' => ['adicionar', 'deleta']] se quiser deixar apenas listar produtos . porém ainda deleta pra dps enviar a página de login
 		}


 		public function lista(){

 			$produtos = Produto::all();

 			return view('listagem')->with('produtos',$produtos);



 		}

 		public function mostra(){

 			$id = Request::route('id');

 			$produto = Produto::find($id);

 		 	 if(empty($produto)) {
   				 return "Esse produto não existe";
  				}
  			
  			return view('detalhes')->with('produto', $produto);
		}




		public function formulario(){

			return view('formulario')->with('categorias',Categoria::all());
		}

		public function adicionar(ProdutoRequest $request){

			Produto::create($request->all());

			
			 return redirect()->action('ProdutosController@lista')->withInput(Request::only('nome'));
			
		}

		public function listaJson(){


			

			return Produto::all();

					//return response()->download($caminhoParaUmArquivo); método para fazer download de um arquivo.

		}

		public function deleta($id){


				$produto = Produto::find($id);

				$produto->delete();


			 return redirect()->action('ProdutosController@lista');
		}




 	}





