@extends('principal')

@section('conteudo')


		@if(empty($produtos))
		  <div class="alert alert-danger">
		    Você não tem nenhum produto cadastrado.
		  </div>
		@else
		<table class="table table-striped table-bordered table-hover">
			<caption>Listagem de produtos</caption>
			@foreach($produtos as $p)
				<tbody>
					<tr class="{{$p->quantidade<=1 ? 'danger' : '' }}">
						<td>{{ $p->nome }}</td>
						<td>{{ $p->valor }}</td>
						<td>{{ $p->descricao }}</td>
						<td>{{ $p->quantidade }}</td>
						<td>{{ $p->tamanho }}</td>
						<td> {{ $p->categoria->nome or ''}}</td>
						<td> <a href="/produtos/mostra/{{ $p->id }}">Exibir detalhes</a></td>
						  <td><a href="{{action('ProdutosController@deleta', $p->id)}}"> Remover
    						  </a>
 						 </td>
					</tr>
				</tbody>
		  	@endforeach
		</table>

		
		@endif


		@if(old('nome'))
 			 <div class="alert alert-success">
   				 <strong>Sucesso!</strong> 
      				  O produto {{ old('nome') }} foi adicionado.
 			 </div>
		@endif

		 <h4>
		  <span class="label label-danger pull-right">
		  
		    Um ou menos itens no estoque
		  </span>
		 </h4>

@stop