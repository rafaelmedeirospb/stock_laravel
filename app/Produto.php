<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

		public $timestamps = false;
    	protected $fillable = array('nome','descricao', 'valor', 'quantidade','tamanho','categoria_id');

		public function categoria(){
        
        	return $this->belongsTo('estoque\Categoria');
   	 }

}

	//


